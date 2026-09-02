<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Service;

use FGTCLB\HisConnector\Configuration\FieldMapping;
use FGTCLB\HisConnector\Configuration\SourceExpression;
use FGTCLB\HisConnector\Configuration\ValueMapping;
use FGTCLB\HisConnector\Exception\FieldMappingException;
use Symfony\Component\ExpressionLanguage\SyntaxError;
use Symfony\Component\PropertyAccess\Exception\ExceptionInterface as PropertyAccessExceptionInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use TYPO3\CMS\Core\ExpressionLanguage\Resolver;

/**
 * Applies mapping configuration (source field or expression, value mapping, default values)
 * on a field level. For field mappings that don't use Symfony expressions, access to non-existent
 * variables is treated as an error, while access to non-existent properties results in a "null"
 * value, unless fallbackValue is specified.
 * Within Symfony expressions, the (rather strict) expression rules apply, which means that access
 * to subproperties of nullable values need the ? operator.
 */
final readonly class FieldMapper
{
    private Resolver $expressionLanguage;
    private PropertyAccessorInterface $propertyAccessor;

    public function __construct()
    {
        $this->expressionLanguage = new Resolver('his_connector', []);
        $this->propertyAccessor = PropertyAccess::createPropertyAccessorBuilder()
            ->disableExceptionOnInvalidPropertyPath()
            ->disableExceptionOnInvalidIndex()
            ->getPropertyAccessor();
    }

    /**
     * @param array<string, mixed> $availableVariables
     */
    public function applyFieldMapping(FieldMapping $fieldMapping, array $availableVariables): mixed
    {
        if ($fieldMapping->sourceField instanceof SourceExpression) {
            try {
                $sourceValue = $this->expressionLanguage->evaluate($fieldMapping->sourceField->sourceExpression, $availableVariables);
            } catch (SyntaxError $e) {
                throw new FieldMappingException(sprintf(
                    'Unable to map "%s.%s" due to invalid expression syntax "%s": %s',
                    $fieldMapping->tableName,
                    $fieldMapping->fieldName,
                    $fieldMapping->sourceField->sourceExpression,
                    $e->getMessage(),
                ), 1788341861, $e);
            } catch (\Exception $e) {
                throw new FieldMappingException(sprintf(
                    'Unable to map "%s.%s" with expression "%s": %s',
                    $fieldMapping->tableName,
                    $fieldMapping->fieldName,
                    $fieldMapping->sourceField->sourceExpression,
                    $e->getMessage(),
                ), 1788341862, $e);
            }
        } elseif (!array_key_exists($fieldMapping->sourceField->variableName, $availableVariables)) {
            throw new FieldMappingException(sprintf(
                'Unable to map "%s.%s" with field "%s": variable "%s" does not exist',
                $fieldMapping->tableName,
                $fieldMapping->fieldName,
                $fieldMapping->sourceField->sourceField,
                $fieldMapping->sourceField->variableName,
            ), 1788341863);
        } else {
            $sourceValue = $availableVariables[$fieldMapping->sourceField->variableName];
            if ($fieldMapping->sourceField->accessorPath !== []) {
                if (!is_object($sourceValue) && !is_array($sourceValue)) {
                    $sourceValue = null;
                } else {
                    try {
                        $sourceValue = $this->propertyAccessor->getValue($sourceValue, implode('?.', $fieldMapping->sourceField->accessorPath));
                    } catch (PropertyAccessExceptionInterface $e) {
                        // Due to the ?. operator, this is an edge case
                        $sourceValue = null;
                    }
                }
            }
        }
        return $this->applyValueMapping($sourceValue, $fieldMapping);
    }

    private function applyValueMapping(mixed $sourceValue, FieldMapping $fieldMapping): mixed
    {
        $valueMapping = array_find(
            $fieldMapping->valueMapping ?? [],
            fn(ValueMapping $item) => $item->source === $sourceValue,
        );
        return $valueMapping->target ?? $fieldMapping->valueMappingDefault ?? $sourceValue ?? $fieldMapping->fallbackValue;
    }
}
