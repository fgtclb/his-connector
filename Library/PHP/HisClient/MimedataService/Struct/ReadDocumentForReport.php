<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readDocumentForReport Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadDocumentForReport extends AbstractStructBase
{
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: ID of the person, see PersonService for details.
     * @var int
     */
    protected int $personId;
    /**
     * The report
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of the report. See KeyvalueService, valueClass=Report.
     * @var string
     */
    protected string $report;
    /**
     * The termtype
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of the termtype, i.e. SoSe or WiSe. See KeyvalueService, valueClass=TermTypeValue. See ValueService, getAllTermTypes.
     * @var string
     */
    protected string $termtype;
    /**
     * The year
     * Meta information extracted from the WSDL
     * - documentation: Year of the term, format 'YYYY'. Note that WiSe 2017/18 would be termType=WiSe with year=2017.
     * @var int
     */
    protected int $year;
    /**
     * The documentCategory
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of the DocumentMetadataCategory of the requested document. Set NIL if only the main document is needed for this report.
     * - nillable: true
     * @var string|null
     */
    protected ?string $documentCategory = null;
    /**
     * Constructor method for readDocumentForReport
     * @uses ReadDocumentForReport::setPersonId()
     * @uses ReadDocumentForReport::setReport()
     * @uses ReadDocumentForReport::setTermtype()
     * @uses ReadDocumentForReport::setYear()
     * @uses ReadDocumentForReport::setDocumentCategory()
     * @param int $personId
     * @param string $report
     * @param string $termtype
     * @param int $year
     * @param string $documentCategory
     */
    public function __construct(int $personId, string $report, string $termtype, int $year, ?string $documentCategory = null)
    {
        $this
            ->setPersonId($personId)
            ->setReport($report)
            ->setTermtype($termtype)
            ->setYear($year)
            ->setDocumentCategory($documentCategory);
    }
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReport
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
    /**
     * Get report value
     * @return string
     */
    public function getReport(): string
    {
        return $this->report;
    }
    /**
     * Set report value
     * @param string $report
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReport
     */
    public function setReport(string $report): self
    {
        // validation for constraint: string
        if (!is_null($report) && !is_string($report)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($report, true), gettype($report)), __LINE__);
        }
        $this->report = $report;
        
        return $this;
    }
    /**
     * Get termtype value
     * @return string
     */
    public function getTermtype(): string
    {
        return $this->termtype;
    }
    /**
     * Set termtype value
     * @param string $termtype
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReport
     */
    public function setTermtype(string $termtype): self
    {
        // validation for constraint: string
        if (!is_null($termtype) && !is_string($termtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termtype, true), gettype($termtype)), __LINE__);
        }
        $this->termtype = $termtype;
        
        return $this;
    }
    /**
     * Get year value
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReport
     */
    public function setYear(int $year): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
    /**
     * Get documentCategory value
     * @return string|null
     */
    public function getDocumentCategory(): ?string
    {
        return $this->documentCategory;
    }
    /**
     * Set documentCategory value
     * @param string $documentCategory
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReport
     */
    public function setDocumentCategory(?string $documentCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($documentCategory) && !is_string($documentCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentCategory, true), gettype($documentCategory)), __LINE__);
        }
        $this->documentCategory = $documentCategory;
        
        return $this;
    }
}
