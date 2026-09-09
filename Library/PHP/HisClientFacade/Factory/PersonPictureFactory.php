<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\MimedataService\Struct\Mimedata;
use FGTCLB\HisClientFacade\Exception\PersonPictureEntityException;
use FGTCLB\HisClientFacade\Model\PersonPicture;

readonly class PersonPictureFactory
{
    public function create(Mimedata $mimedata): PersonPicture
    {
        if ($mimedata->getId() === null || $mimedata->getMimeType() === null) {
            throw new PersonPictureEntityException(
                'Invalid mimedata given for person picture: id or mime type missing',
                1788872343,
            );
        }
        return new PersonPicture(
            id: $mimedata->getId(),
            fileContents: $mimedata->getMimeBlob(),
            mimeType: $mimedata->getMimeType(),
            originalFileName: $mimedata->getMimeFilename(),
            description: $mimedata->getDescription(),
        );
    }
}
