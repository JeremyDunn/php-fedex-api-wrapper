<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalControlledExportDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\InternationalControlledExportType|string $Type
 * @property string $ForeignTradeZoneCode
 * @property string $EntryNumber
 * @property string $LicenseOrPermitNumber
 * @property string $LicenseOrPermitExpirationDate

 */
class InternationalControlledExportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InternationalControlledExportDetail';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\InternationalControlledExportType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set ForeignTradeZoneCode
     *
     * @param string $foreignTradeZoneCode
     * @return $this
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode)
    {
        $this->values['ForeignTradeZoneCode'] = $foreignTradeZoneCode;
        return $this;
    }

    /**
     * Set EntryNumber
     *
     * @param string $entryNumber
     * @return $this
     */
    public function setEntryNumber($entryNumber)
    {
        $this->values['EntryNumber'] = $entryNumber;
        return $this;
    }

    /**
     * Set LicenseOrPermitNumber
     *
     * @param string $licenseOrPermitNumber
     * @return $this
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber)
    {
        $this->values['LicenseOrPermitNumber'] = $licenseOrPermitNumber;
        return $this;
    }

    /**
     * Set LicenseOrPermitExpirationDate
     *
     * @param string $licenseOrPermitExpirationDate
     * @return $this
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate)
    {
        $this->values['LicenseOrPermitExpirationDate'] = $licenseOrPermitExpirationDate;
        return $this;
    }
}
