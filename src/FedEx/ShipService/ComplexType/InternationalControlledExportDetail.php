<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalControlledExportDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @param \FedEx\ShipService\SimpleType\InternationalControlledExportType|string $type
     * return InternationalControlledExportDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Set ForeignTradeZoneCode
     *
     * @param string $foreignTradeZoneCode
     * return InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode)
    {
        $this->ForeignTradeZoneCode = $foreignTradeZoneCode;
        return $this;
    }
    
    /**
     * Set EntryNumber
     *
     * @param string $entryNumber
     * return InternationalControlledExportDetail
     */
    public function setEntryNumber($entryNumber)
    {
        $this->EntryNumber = $entryNumber;
        return $this;
    }
    
    /**
     * Set LicenseOrPermitNumber
     *
     * @param string $licenseOrPermitNumber
     * return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber)
    {
        $this->LicenseOrPermitNumber = $licenseOrPermitNumber;
        return $this;
    }
    
    /**
     * Set LicenseOrPermitExpirationDate
     *
     * @param date $licenseOrPermitExpirationDate
     * return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate)
    {
        $this->LicenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;
        return $this;
    }
    

    
}