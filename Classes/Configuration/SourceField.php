<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

final readonly class SourceField
{
    public string $variableName;

    /**
     * @var string[]
     */
    public array $accessorPath;

    public function __construct(public string $sourceField)
    {
        $accessor = explode('.', $sourceField);
        $this->variableName = array_shift($accessor);
        $this->accessorPath = $accessor;
    }

    /**
     * Helper for Fluid to differentiate between types
     */
    public function getIsExpression(): bool
    {
        return false;
    }

    public function __toString(): string
    {
        return $this->sourceField;
    }
}
