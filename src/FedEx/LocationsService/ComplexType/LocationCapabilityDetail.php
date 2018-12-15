<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationCapabilityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\LocationsService\SimpleType\ServiceType|string $ServiceType
 * @property \FedEx\LocationsService\SimpleType\ServiceCategoryType|string $ServiceCategory
 * @property \FedEx\LocationsService\SimpleType\LocationTransferOfPossessionType|string $TransferOfPossessionType
 * @property \FedEx\LocationsService\SimpleType\DayOfWeekType|string[] $DaysOfWeek

 */
class LocationCapabilityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationCapabilityDetail';

    /**
     * The carrier code for which this capability applies.
     *
     * @param \FedEx\LocationsService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set ServiceType
     *
     * @param \FedEx\LocationsService\SimpleType\ServiceType|string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * The service category for which this capability applies.
     *
     * @param \FedEx\LocationsService\SimpleType\ServiceCategoryType|string $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->values['ServiceCategory'] = $serviceCategory;
        return $this;
    }

    /**
     * The method by which a package is transferred to the possession of a FedEx location.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationTransferOfPossessionType|string $transferOfPossessionType
     * @return $this
     */
    public function setTransferOfPossessionType($transferOfPossessionType)
    {
        $this->values['TransferOfPossessionType'] = $transferOfPossessionType;
        return $this;
    }

    /**
     * The days of the week for which this capability applies.
     *
     * @param \FedEx\LocationsService\SimpleType\DayOfWeekType[]|string[] $daysOfWeek
     * @return $this
     */
    public function setDaysOfWeek(array $daysOfWeek)
    {
        $this->values['DaysOfWeek'] = $daysOfWeek;
        return $this;
    }
}
