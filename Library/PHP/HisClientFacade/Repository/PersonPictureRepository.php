<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\MimedataService\Service\Service as MimedataService;
use FGTCLB\HisClient\MimedataService\Struct\Mimedata;
use FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912;
use FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912Response;
use FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoList;
use FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoListResponse;
use FGTCLB\HisClientFacade\Exception\Exception;

/**
 * @implements RepositoryInterface<Mimedata>
 */
readonly class PersonPictureRepository implements RepositoryInterface
{
    public function __construct(private MimedataService $mimedataService) {}

    /**
     * @return Mimedata[]
     */
    public function findByPersonIdAndHisKey(int $personId, int $hisKey): array
    {
        try {
            /** @var SearchPersonPictureDtoListResponse */
            $personPictureResponse = $this->mimedataService->searchPersonPictureDtoList(new SearchPersonPictureDtoList($personId, $hisKey));
        } catch (\SoapFault $e) {
            throw new Exception(sprintf(
                'Unable to fetch picture of person "%d": %s',
                $personId,
                $e->getMessage(),
            ), 1785244138, $e);
        }
        $picturesMimeData = [];
        foreach ($personPictureResponse->getPersonPictures()->getPersonPicture() ?? [] as $personPicture) {
            try {
                /** @var ReadMimedata201912Response */
                $mimeDataResponse = $this->mimedataService->readMimedata201912(new ReadMimedata201912($personPicture->getMimedataId()));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch picture mime data of person "%d": %s',
                    $personId,
                    $e->getMessage(),
                ), 1785244139, $e);
            }
            if ($mimeDataResponse->getMimedata() !== null) {
                $picturesMimeData[] = $mimeDataResponse->getMimedata();
            }
        }
        return $picturesMimeData;
    }

    public function getObjectType(): string
    {
        return Mimedata::class;
    }
}
