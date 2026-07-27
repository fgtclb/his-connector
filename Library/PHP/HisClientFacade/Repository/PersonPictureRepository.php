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

readonly class PersonPictureRepository
{
    public function __construct(private MimedataService $mimedataService) {}

    /**
     * @return Mimedata[]
     */
    public function findPicturesForPerson(int $personId, int $hisKey): array
    {
        /** @var SearchPersonPictureDtoListResponse|false */
        $personPictureResponse = $this->mimedataService->searchPersonPictureDtoList(new SearchPersonPictureDtoList($personId, $hisKey));
        if ($personPictureResponse === false) {
            /** @var \SoapFault */
            $soapException = $this->mimedataService->getLastErrorForMethod(MimedataService::class . '::searchPersonPictureDtoList');
            throw new Exception(sprintf(
                'Unable to fetch picture of person "%d": %s',
                $personId,
                $soapException->getMessage(),
            ), 1785244138, $soapException);
        }
        $picturesMimeData = [];
        foreach ($personPictureResponse->getPersonPictures()->getPersonPicture() ?? [] as $personPicture) {
            /** @var ReadMimedata201912Response|false */
            $mimeDataResponse = $this->mimedataService->readMimedata201912(new ReadMimedata201912($personPicture->getMimedataId()));
            if ($mimeDataResponse === false) {
                /** @var \SoapFault */
                $soapException = $this->mimedataService->getLastErrorForMethod(MimedataService::class . '::readMimedata201912');
                throw new Exception(sprintf(
                    'Unable to fetch picture mime data of person "%d": %s',
                    $personId,
                    $soapException->getMessage(),
                ), 1785244139, $soapException);
            }
            if ($mimeDataResponse->getMimedata() !== null) {
                $picturesMimeData[] = $mimeDataResponse->getMimedata();
            }
        }
        return $picturesMimeData;
    }
}
