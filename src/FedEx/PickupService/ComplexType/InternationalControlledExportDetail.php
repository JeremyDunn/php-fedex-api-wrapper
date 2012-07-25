<?php
namespace FedEx\PickupService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class InternationalControlledExportDetail
    extends AbstractComplexType
{
    protected $_name = 'InternationalControlledExportDetail';

    /**
     * 
     *
     * @param InternationalControlledExportType $Type
     * return InternationalControlledExportDetail
     */
    public function setType(\FedEx\PickupService\SimpleType\InternationalControlledExportType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $ForeignTradeZoneCode
     * return InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode)
    {
        $this->ForeignTradeZoneCode = $foreignTradeZoneCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $EntryNumber
     * return InternationalControlledExportDetail
     */
    public function setEntryNumber($entryNumber)
    {
        $this->EntryNumber = $entryNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $LicenseOrPermitNumber
     * return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber)
    {
        $this->LicenseOrPermitNumber = $licenseOrPermitNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $LicenseOrPermitExpirationDate
     * return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate)
    {
        $this->LicenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;
        return $this;
    }
    

    
}