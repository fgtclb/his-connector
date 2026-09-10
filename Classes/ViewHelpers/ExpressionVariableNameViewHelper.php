<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\ViewHelpers;

use FGTCLB\HisConnector\Utility\MappingUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

final class ExpressionVariableNameViewHelper extends AbstractViewHelper
{
    public function __construct(private readonly MappingUtility $mappingUtility) {}

    public function initializeArguments(): void
    {
        $this->registerArgument('className', 'string', 'The class for which a variable name should be generated');
    }

    public function render(): string
    {
        return $this->mappingUtility->createExpressionVariableName($this->renderChildren());
    }

    public function getContentArgumentName(): string
    {
        return 'className';
    }
}
