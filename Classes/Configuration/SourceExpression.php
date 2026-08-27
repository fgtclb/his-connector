<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

final readonly class SourceExpression
{
    public function __construct(public string $sourceExpression) {}

    /**
     * Helper for Fluid to differentiate between types
     */
    public function getIsExpression(): bool
    {
        return true;
    }

    public function __toString(): string
    {
        return $this->sourceExpression;
    }
}
