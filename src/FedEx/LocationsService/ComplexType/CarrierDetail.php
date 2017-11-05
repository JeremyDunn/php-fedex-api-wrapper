<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CarrierDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\CarrierCodeType|string $Carrier
 * @property \FedEx\LocationsService\SimpleType\ServiceCategoryType|string $ServiceCategory
 * @property \FedEx\LocationsService\SimpleType\ServiceType|string $ServiceType
 * @property \FedEx\LocationsService\SimpleType\CountryRelationshipType|string $CountryRelationship
 * @property LatestDropOffDetail[] $NormalLatestDropOffDetails
 * @property LatestDropOffDetail[] $ExceptionalLatestDropOffDetails
 * @property LatestDropOffDetail $EffectiveLatestDropOffDetails
 * @property ShippingHoliday[] $ShippingHolidays

 */
class CarrierDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CarrierDetail';

    /**
     * Set Carrier
     *
     * @param \FedEx\LocationsService\SimpleType\CarrierCodeType|string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->values['Carrier'] = $carrier;
        return $this;
    }

    /**
     * Set ServiceCategory
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
     * This field describe a subset of the carrier's products or services which may have unique characteristics: i.e. latest drop-off times at a particular location vary depending on the destination type.
     *
     * @param \FedEx\LocationsService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return $this
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->values['CountryRelationship'] = $countryRelationship;
        return $this;
    }

    /**
     * Specifies the details about the latest times a drop off can be made at a location most days. These are the normal drop off times.
     *
     * @param LatestDropOffDetail[] $normalLatestDropOffDetails
     * @return $this
     */
    public function setNormalLatestDropOffDetails(array $normalLatestDropOffDetails)
    {
        $this->values['NormalLatestDropOffDetails'] = $normalLatestDropOffDetails;
        return $this;
    }

    /**
     * Specifies the details about the exceptional latest times a drop off can be made at a location. These are drop off times that are a variation from the normal drop off times.
     *
     * @param LatestDropOffDetail[] $exceptionalLatestDropOffDetails
     * @return $this
     */
    public function setExceptionalLatestDropOffDetails(array $exceptionalLatestDropOffDetails)
    {
        $this->values['ExceptionalLatestDropOffDetails'] = $exceptionalLatestDropOffDetails;
        return $this;
    }

    /**
     * Specifies the details about the effective latest times drop off can be made at a location on the date requested. These are drop off times that are derived from the normal and exceptional drop off times, depending upon the date requested.
     *
     * @param LatestDropOffDetail $effectiveLatestDropOffDetails
     * @return $this
     */
    public function setEffectiveLatestDropOffDetails(LatestDropOffDetail $effectiveLatestDropOffDetails)
    {
        $this->values['EffectiveLatestDropOffDetails'] = $effectiveLatestDropOffDetails;
        return $this;
    }

    /**
     * Set ShippingHolidays
     *
     * @param ShippingHoliday[] $shippingHolidays
     * @return $this
     */
    public function setShippingHolidays(array $shippingHolidays)
    {
        $this->values['ShippingHolidays'] = $shippingHolidays;
        return $this;
    }
}
