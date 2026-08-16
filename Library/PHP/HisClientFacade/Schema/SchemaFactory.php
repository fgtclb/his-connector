<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

use FGTCLB\HisClientFacade\Collection\CollectionInterface;
use FGTCLB\HisClientFacade\Model\EntityInterface;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\TypeInfo\Type\ObjectType;
use Symfony\Component\TypeInfo\Type\UnionType;
use WsdlToPhp\PackageBase\StructInterface;

final readonly class SchemaFactory
{
    private readonly PropertyInfoExtractor $propertyInfoExtractor;

    public function __construct()
    {
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
     * @param array<string, ?SchemaTypeInterface> $cache
     */
    private function createForCollectionOrModel(string $className, array $callStack = [], array $cache = []): ?SchemaTypeInterface
    {
        if (isset($cache[$className])) {
            return $cache[$className];
        }
        if (in_array($className, $callStack)) {
            return new RecursiveSchemaValue($className);
        }
        $cache[$className] = null;
        if (is_a($className, CollectionInterface::class, true)) {
            $cache[$className] = new CollectionType(
                className: $className,
                itemType: $this->createForModel($className::getItemType(), [...$callStack, $className], $cache),
            );
        } elseif (is_a($className, EntityInterface::class, true) || is_a($className, StructInterface::class, true)) {
            $cache[$className] = $this->createForModel($className, [...$callStack, $className], $cache);
        }
        return $cache[$className];
    }

    /**
     * @param class-string $className
     * @param class-string[] $callStack
     * @param array<string, ?SchemaTypeInterface> $cache
     */
    private function createForModel(string $className, array $callStack, array $cache): SchemaType
    {
        $propertyNames = $this->propertyInfoExtractor->getProperties($className);
        $properties = $getters = [];
        foreach ($propertyNames ?? [] as $propertyName) {
            $typeInfo = $this->propertyInfoExtractor->getType($className, $propertyName);
            if ($typeInfo === null) {
                continue;
            }
            $propertyType = null;
            foreach ($typeInfo->traverse() as $allowedType) {
                if ($allowedType instanceof ObjectType) {
                    $propertyType = $this->createForCollectionOrModel((string)$allowedType, $callStack, $cache);
                    if ($propertyType !== null) {
                        break;
                    }
                }
            }
            if ($propertyType === null) {
                foreach ($typeInfo->traverse() as $allowedType) {
                    if ($allowedType->isNullable() || !$allowedType instanceof UnionType) {
                        $propertyType = new ValueType((string)$allowedType);
                        break;
                    }
                }
            }
            if ($propertyType === null) {
                continue;
            }
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
        return new SchemaType(
            className: $className,
            properties: $properties,
            getters: $getters,
        );
    }
}
