<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CleansedAddressAndLocationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $CountryCode
 * @property string $StateOrProvinceCode
 * @property string $PostalCode
 * @property string $ServiceArea
 * @property string $LocationId
 * @property int $LocationNumber
 * @property string $AirportId

 */
class CleansedAddressAndLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CleansedAddressAndLocationDetail';

    /**
     * This represents the internal FedEx-system recognized country code.
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
     * This represents the internal FedEx-system recognized state or province code.
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
     * This represents the internal FedEx-system recognized postal code.
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
     * The unique location identifier
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
     * The op-co specific numeric identifier for a location
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
}
