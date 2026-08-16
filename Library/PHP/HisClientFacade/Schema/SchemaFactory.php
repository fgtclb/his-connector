<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

use FGTCLB\HisClientFacade\Collection\CollectionInterface;
use FGTCLB\HisClientFacade\Model\EntityInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\TypeInfo\Type;
use Symfony\Component\TypeInfo\Type\ObjectType;
use Symfony\Component\TypeInfo\Type\UnionType;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * Creates a type schema of a class structure that can contain
 * our custom collections and entities, the generated SOAP entity
 * classes as well as arbitrary classes or other php values. This information
 * can be used to (partially) validate mapping configuration without any
 * actual data being present. It also enables autocompletion or suggestions
 * when creating or altering a mapping configuration.
 */
final readonly class SchemaFactory
{
    private readonly PropertyInfoExtractor $propertyInfoExtractor;

    public function __construct(
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {
        $phpDocExtractor = new PhpDocExtractor();
        $reflectionExtractor = new ReflectionExtractor();
        $this->propertyInfoExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$phpDocExtractor],
            [$reflectionExtractor]
        );
    }

    public function create(string $className): ?SchemaTypeInterface
    {
        return $this->createForCollectionOrModel($className);
    }

    /**
     * @param class-string[] $callStack
     */
    private function createForCollectionOrModel(string $className, array $callStack = []): ?SchemaTypeInterface
    {
        // Prevent infinite loops if a property of an object can contain other instances of itself
        // (e. g. orgUnit.parent contains another orgUnit)
        if (in_array($className, $callStack)) {
            return new RecursiveSchemaValue($className);
        }
        $cacheIdentifier = str_replace('\\', '_', $className) . '_schema';
        if (!$this->cache->has($cacheIdentifier)) {
            switch (true) {
                case is_a($className, CollectionInterface::class, true):
                    $schema = new CollectionType(
                        className: $className,
                        itemType: $this->createForModel($className::getItemType(), [...$callStack, $className]),
                    );
                    break;
                case is_a($className, EntityInterface::class, true):
                case is_a($className, StructInterface::class, true):
                    $schema = $this->createForModel($className, [...$callStack, $className]);
                    break;
                default:
                    return null;
            }
            $this->cache->set($cacheIdentifier, $schema);
        }
        return $this->cache->get($cacheIdentifier);
    }

    /**
     * @param class-string $className
     * @param class-string[] $callStack
     */
    private function createForModel(string $className, array $callStack): ModelType
    {
        $propertyNames = $this->propertyInfoExtractor->getProperties($className);
        $properties = $getters = [];
        foreach ($propertyNames ?? [] as $propertyName) {
            $typeInfo = $this->propertyInfoExtractor->getType($className, $propertyName);
            if ($typeInfo === null) {
                continue;
            }
            $propertyType = $this->determinePreferredPropertyType($typeInfo, $callStack);
            // Skip properties without type info
            if ($propertyType === null) {
                continue;
            }
            // Check how the property should be accessed
            $getterName = 'get' . ucfirst($propertyName);
            if (method_exists($className, $getterName)) {
                $getters[$propertyName] = new SchemaGetter(
                    methodName: $getterName,
                    propertyName: $propertyName,
                    type: $propertyType,
                    isNullable: $typeInfo->isNullable(),
                );
            } else {
                $properties[$propertyName] = new SchemaProperty(
                    propertyName: $propertyName,
                    type: $propertyType,
                    isNullable: $typeInfo->isNullable(),
                );
            }
        }
        return new ModelType(
            className: $className,
            properties: $properties,
            getters: $getters,
        );
    }

    /**
     * @param class-string[] $callStack
     */
    private function determinePreferredPropertyType(Type $typeInfo, array $callStack): ?SchemaTypeInterface
    {
        // Always prefer our object structures over other types (e. g. PostAddress for string|PostAddress)
        foreach ($typeInfo->traverse() as $allowedType) {
            if ($allowedType instanceof ObjectType) {
                $propertyType = $this->createForCollectionOrModel((string)$allowedType, $callStack);
                if ($propertyType !== null) {
                    return $propertyType;
                }
            }
        }
        // If no suitable object type could be found, we take the first available type
        foreach ($typeInfo->traverse() as $allowedType) {
            if ($allowedType->isNullable() || !$allowedType instanceof UnionType) {
                return new ValueType((string)$allowedType);
            }
        }
        return null;
    }
}
