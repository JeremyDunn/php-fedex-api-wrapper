<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalControlledExportDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class InternationalControlledExportDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'InternationalControlledExportDetail';

    /**
     * Set Type
     *
     * @param \FedEx\Pickup\SimpleType\InternationalControlledExportType|string $type
     * @return InternationalControlledExportDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\Pickup\SimpleType\InternationalControlledExportType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set ForeignTradeZoneCode
     *
     * @param string $foreignTradeZoneCode
     * @return InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode)
    {
        $this->ForeignTradeZoneCode = $foreignTradeZoneCode;
        return $this;
    }
    
    /**
     * Returns Set ForeignTradeZoneCode
     *
     * @return string
     */
    public function getForeignTradeZoneCode()
    {
        return $this->ForeignTradeZoneCode;
    }
    
    /**
     * Set EntryNumber
     *
     * @param string $entryNumber
     * @return InternationalControlledExportDetail
     */
    public function setEntryNumber($entryNumber)
    {
        $this->EntryNumber = $entryNumber;
        return $this;
    }
    
    /**
     * Returns Set EntryNumber
     *
     * @return string
     */
    public function getEntryNumber()
    {
        return $this->EntryNumber;
    }
    
    /**
     * Set LicenseOrPermitNumber
     *
     * @param string $licenseOrPermitNumber
     * @return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber)
    {
        $this->LicenseOrPermitNumber = $licenseOrPermitNumber;
        return $this;
    }
    
    /**
     * Returns Set LicenseOrPermitNumber
     *
     * @return string
     */
    public function getLicenseOrPermitNumber()
    {
        return $this->LicenseOrPermitNumber;
    }
    
    /**
     * Set LicenseOrPermitExpirationDate
     *
     * @param date $licenseOrPermitExpirationDate
     * @return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate)
    {
        $this->LicenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;
        return $this;
    }
    
    /**
     * Returns Set LicenseOrPermitExpirationDate
     *
     * @return date
     */
    public function getLicenseOrPermitExpirationDate()
    {
        return $this->LicenseOrPermitExpirationDate;
    }
    

    
}