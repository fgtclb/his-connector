<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readDocuments Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadDocuments extends AbstractStructBase
{
    /**
     * The targetType
     * Meta information extracted from the WSDL
     * - documentation: Type of target entity that the document is attached to.
     * @var string
     */
    protected string $targetType;
    /**
     * The targetId
     * Meta information extracted from the WSDL
     * - documentation: Database ID of owning object, i.e. the person.id for targetType=PERSON
     * @var int
     */
    protected int $targetId;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - documentation: Document type of the documents to read.
     * @var string
     */
    protected string $category;
    /**
     * Constructor method for readDocuments
     * @uses ReadDocuments::setTargetType()
     * @uses ReadDocuments::setTargetId()
     * @uses ReadDocuments::setCategory()
     * @param string $targetType
     * @param int $targetId
     * @param string $category
     */
    public function __construct(string $targetType, int $targetId, string $category)
    {
        $this
            ->setTargetType($targetType)
            ->setTargetId($targetId)
            ->setCategory($category);
    }
    /**
     * Get targetType value
     * @return string
     */
    public function getTargetType(): string
    {
        return $this->targetType;
    }
    /**
     * Set targetType value
     * @uses \FGTCLB\HisClient\MimedataService\Enum\TargetTypeType::valueIsValid()
     * @uses \FGTCLB\HisClient\MimedataService\Enum\TargetTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $targetType
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocuments
     */
    public function setTargetType(string $targetType): self
    {
        // validation for constraint: enumeration
        if (!\FGTCLB\HisClient\MimedataService\Enum\TargetTypeType::valueIsValid($targetType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \FGTCLB\HisClient\MimedataService\Enum\TargetTypeType', is_array($targetType) ? implode(', ', $targetType) : var_export($targetType, true), implode(', ', \FGTCLB\HisClient\MimedataService\Enum\TargetTypeType::getValidValues())), __LINE__);
        }
        $this->targetType = $targetType;
        
        return $this;
    }
    /**
     * Get targetId value
     * @return int
     */
    public function getTargetId(): int
    {
        return $this->targetId;
    }
    /**
     * Set targetId value
     * @param int $targetId
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocuments
     */
    public function setTargetId(int $targetId): self
    {
        // validation for constraint: int
        if (!is_null($targetId) && !(is_int($targetId) || ctype_digit($targetId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($targetId, true), gettype($targetId)), __LINE__);
        }
        $this->targetId = $targetId;
        
        return $this;
    }
    /**
     * Get category value
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @uses \FGTCLB\HisClient\MimedataService\Enum\CategoryType::valueIsValid()
     * @uses \FGTCLB\HisClient\MimedataService\Enum\CategoryType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $category
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocuments
     */
    public function setCategory(string $category): self
    {
        // validation for constraint: enumeration
        if (!\FGTCLB\HisClient\MimedataService\Enum\CategoryType::valueIsValid($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \FGTCLB\HisClient\MimedataService\Enum\CategoryType', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \FGTCLB\HisClient\MimedataService\Enum\CategoryType::getValidValues())), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
}
