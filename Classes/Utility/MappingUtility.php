<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Utility;

final readonly class MappingUtility
{
    /**
     * Creates a suitable variable name for accessing and performing actions
     * on an object in a symfony expression
     */
    public function createExpressionVariableName(string $className): string
    {
        $classParts = explode('\\', trim($className, '\\'));
        return lcfirst(array_last($classParts));
    }
}
