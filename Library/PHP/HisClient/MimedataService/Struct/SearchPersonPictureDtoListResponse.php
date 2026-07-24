<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPersonPictureDtoListResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPersonPictureDtoListResponse extends AbstractStructBase
{
    /**
     * The personPictures
     * @var \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType
     */
    protected \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType $personPictures;
    /**
     * Constructor method for searchPersonPictureDtoListResponse
     * @uses SearchPersonPictureDtoListResponse::setPersonPictures()
     * @param \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType $personPictures
     */
    public function __construct(\FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType $personPictures)
    {
        $this
            ->setPersonPictures($personPictures);
    }
    /**
     * Get personPictures value
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType
     */
    public function getPersonPictures(): \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType
    {
        return $this->personPictures;
    }
    /**
     * Set personPictures value
     * @param \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType $personPictures
     * @return \FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoListResponse
     */
    public function setPersonPictures(\FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType $personPictures): self
    {
        $this->personPictures = $personPictures;
        
        return $this;
    }
}
