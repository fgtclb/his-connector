<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'ScholarshipProgram' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ScholarshipProgram',
            'FrequencyOfOfferValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\FrequencyOfOfferValue',
            'ValueClassDescription' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ValueClassDescription',
            'DocumentStorageCategoryValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\DocumentStorageCategoryValue',
            'CountryValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\CountryValue',
            'EAddresstypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\EAddresstypeValue',
            'KacComponentTypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\KacComponentTypeValue',
            'Tax' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\Tax',
            'SubscriptionOfferValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\SubscriptionOfferValue',
            'ExaminationversionValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ExaminationversionValue',
            'TitleValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\TitleValue',
            'CertificateTitleValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\CertificateTitleValue',
            'TypeOfStudyValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\TypeOfStudyValue',
            'PurposeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\PurposeValue',
            'ControlParameterTypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ControlParameterTypeValue',
            'GenderValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GenderValue',
            'EventtypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\EventtypeValue',
            'ZulConsequenceValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ZulConsequenceValue',
            'Degree' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\Degree',
            'HealthInsuranceValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\HealthInsuranceValue',
            'SubjectIndicatorValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\SubjectIndicatorValue',
            'AbstractValueMaleFemale' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\AbstractValueMaleFemale',
            'RhythmValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\RhythmValue',
            'FunctionalEventValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\FunctionalEventValue',
            'PaymentMethod' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\PaymentMethod',
            'PersonIdentifierTypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\PersonIdentifierTypeValue',
            'ZulMissingDataValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ZulMissingDataValue',
            'TermTypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\TermTypeValue',
            'KeyValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\KeyValue',
            'StudystatusValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\StudystatusValue',
            'CourseTimeslotValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\CourseTimeslotValue',
            'Din277RoomuseValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\Din277RoomuseValue',
            'AffiliationTypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\AffiliationTypeValue',
            'FieldOfStudyValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\FieldOfStudyValue',
            'AbstractKeyValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\AbstractKeyValue',
            'AcademicdegreeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\AcademicdegreeValue',
            'ExternalsystemValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ExternalsystemValue',
            'EquipmentValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\EquipmentValue',
            'LanguageValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\LanguageValue',
            'WorkstatusValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\WorkstatusValue',
            'ReasonForBlockingReregistrationValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ReasonForBlockingReregistrationValue',
            'TimeslotValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\TimeslotValue',
            'UniversityValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\UniversityValue',
            'Fee' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\Fee',
            'FormOfStudiesValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\FormOfStudiesValue',
            'PortalMessageCategory' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\PortalMessageCategory',
            'GradingTypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GradingTypeValue',
            'Subject' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\Subject',
            'StudentstatusValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\StudentstatusValue',
            'EntranceQualificationTypeValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\EntranceQualificationTypeValue',
            'DocumentMetadataCategoryValue' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\DocumentMetadataCategoryValue',
            'getAll' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAll',
            'getAllResponse' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllResponse',
            'getAllExtended' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllExtended',
            'getAllExtendedResponse' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllExtendedResponse',
            'getAllValid' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllValid',
            'getAllValidResponse' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllValidResponse',
            'getAllValidExtended' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllValidExtended',
            'getAllValidExtendedResponse' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllValidExtendedResponse',
            'getAllValueClasses' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllValueClasses',
            'getAllValueClassesResponse' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\GetAllValueClassesResponse',
            'valueClassDescriptionsType' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ValueClassDescriptionsType',
            'valuesXtdType' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ValuesXtdType',
            'valuesType' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ValuesType',
            'ServiceFault' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ServiceFault',
            'ValidationMessage' => '\\FGTCLB\\HisClient\\KeyvalueService\\Struct\\ValidationMessage',
        ];
    }
}
