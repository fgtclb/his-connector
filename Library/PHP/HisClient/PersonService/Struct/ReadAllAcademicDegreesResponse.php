<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllAcademicDegreesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllAcademicDegreesResponse extends AbstractStructBase
{
    /**
     * The academicDegrees
     * @var \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType $academicDegrees;
    /**
     * Constructor method for readAllAcademicDegreesResponse
     * @uses ReadAllAcademicDegreesResponse::setAcademicDegrees()
     * @param \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType $academicDegrees
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType $academicDegrees)
    {
        $this
            ->setAcademicDegrees($academicDegrees);
    }
    /**
     * Get academicDegrees value
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType
     */
    public function getAcademicDegrees(): \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType
    {
        return $this->academicDegrees;
    }
    /**
     * Set academicDegrees value
     * @param \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType $academicDegrees
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllAcademicDegreesResponse
     */
    public function setAcademicDegrees(\FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType $academicDegrees): self
    {
        $this->academicDegrees = $academicDegrees;
        
        return $this;
    }
}
