<?php
namespace FedEx\CountryService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationDescription
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 *
 * @property string $LocationId
 * @property int $LocationNumber
 * @property string $CountryCode
 * @property string $StateOrProvinceCode
 * @property string $PostalCode
 * @property string $ServiceArea
 * @property string $AirportId
 * @property \FedEx\CountryService\SimpleType\PackageSpecialServiceType|string[] $RestrictedPackageSpecialServices
 * @property \FedEx\CountryService\SimpleType\ShipmentSpecialServiceType|string[] $RestrictedShipmentSpecialServices
 * @property boolean $FedExEuropeFirstOrigin

 */
class LocationDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationDescription';

    /**
     * Set LocationId
     *
     * @param string $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->values['LocationId'] = $locationId;
        return $this;
    }

    /**
     * Set LocationNumber
     *
     * @param int $locationNumber
     * @return $this
     */
    public function setLocationNumber($locationNumber)
    {
        $this->values['LocationNumber'] = $locationNumber;
        return $this;
    }

    /**
     * Set CountryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['CountryCode'] = $countryCode;
        return $this;
    }

    /**
     * Set StateOrProvinceCode
     *
     * @param string $stateOrProvinceCode
     * @return $this
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->values['StateOrProvinceCode'] = $stateOrProvinceCode;
        return $this;
    }

    /**
     * Set PostalCode
     *
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->values['PostalCode'] = $postalCode;
        return $this;
    }

    /**
     * Set ServiceArea
     *
     * @param string $serviceArea
     * @return $this
     */
    public function setServiceArea($serviceArea)
    {
        $this->values['ServiceArea'] = $serviceArea;
        return $this;
    }

    /**
     * Set AirportId
     *
     * @param string $airportId
     * @return $this
     */
    public function setAirportId($airportId)
    {
        $this->values['AirportId'] = $airportId;
        return $this;
    }

    /**
     * Package special services prohibited for this location for operational reasons. (Other package special services may or may not be available per shipment for other reasons.)
     *
     * @param \FedEx\CountryService\SimpleType\PackageSpecialServiceType[]|string[] $restrictedPackageSpecialServices
     * @return $this
     */
    public function setRestrictedPackageSpecialServices(array $restrictedPackageSpecialServices)
    {
        $this->values['RestrictedPackageSpecialServices'] = $restrictedPackageSpecialServices;
        return $this;
    }

    /**
     * Shipment special services prohibited for this location for operational reasons. (Other shipment special services may or may not be available per shipment for other reasons.)
     *
     * @param \FedEx\CountryService\SimpleType\ShipmentSpecialServiceType[]|string[] $restrictedShipmentSpecialServices
     * @return $this
     */
    public function setRestrictedShipmentSpecialServices(array $restrictedShipmentSpecialServices)
    {
        $this->values['RestrictedShipmentSpecialServices'] = $restrictedShipmentSpecialServices;
        return $this;
    }

    /**
     * Set FedExEuropeFirstOrigin
     *
     * @param boolean $fedExEuropeFirstOrigin
     * @return $this
     */
    public function setFedExEuropeFirstOrigin($fedExEuropeFirstOrigin)
    {
        $this->values['FedExEuropeFirstOrigin'] = $fedExEuropeFirstOrigin;
        return $this;
    }
}
