<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentOperationalDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentOperationalDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentOperationalDetail';

    /**
     * Set UrsaPrefixCode
     *
     * @param string $ursaPrefixCode
     * return ShipmentOperationalDetail
     */
    public function setUrsaPrefixCode($ursaPrefixCode)
    {
        $this->UrsaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    
    /**
     * Set UrsaSuffixCode
     *
     * @param string $ursaSuffixCode
     * return ShipmentOperationalDetail
     */
    public function setUrsaSuffixCode($ursaSuffixCode)
    {
        $this->UrsaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    
    /**
     * Set OriginLocationId
     *
     * @param string $originLocationId
     * return ShipmentOperationalDetail
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->OriginLocationId = $originLocationId;
        return $this;
    }
    
    /**
     * Set OriginLocationNumber
     *
     * @param int $originLocationNumber
     * return ShipmentOperationalDetail
     */
    public function setOriginLocationNumber($originLocationNumber)
    {
        $this->OriginLocationNumber = $originLocationNumber;
        return $this;
    }
    
    /**
     * Set OriginServiceArea
     *
     * @param string $originServiceArea
     * return ShipmentOperationalDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * Set DestinationLocationId
     *
     * @param string $destinationLocationId
     * return ShipmentOperationalDetail
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->DestinationLocationId = $destinationLocationId;
        return $this;
    }
    
    /**
     * Set DestinationLocationNumber
     *
     * @param int $destinationLocationNumber
     * return ShipmentOperationalDetail
     */
    public function setDestinationLocationNumber($destinationLocationNumber)
    {
        $this->DestinationLocationNumber = $destinationLocationNumber;
        return $this;
    }
    
    /**
     * Set DestinationServiceArea
     *
     * @param string $destinationServiceArea
     * return ShipmentOperationalDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * This is the state of the destination location ID, and is not necessarily the same as the postal state.
     *
     * @param string $destinationLocationStateOrProvinceCode
     * return ShipmentOperationalDetail
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
    {
        $this->DestinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;
        return $this;
    }
    
    /**
     * Expected/estimated date of delivery.
     *
     * @param date $deliveryDate
     * return ShipmentOperationalDetail
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * Expected/estimated day of week of delivery.
     *
     * @param \FedEx\ShipService\SimpleType\DayOfWeekType|string $deliveryDay
     * return ShipmentOperationalDetail
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Delivery time, as published in Service Guide.
     *
     * @param time $publishedDeliveryTime
     * return ShipmentOperationalDetail
     */
    public function setPublishedDeliveryTime(time $publishedDeliveryTime)
    {
        $this->PublishedDeliveryTime = $publishedDeliveryTime;
        return $this;
    }
    
    /**
     * Committed date of delivery.
     *
     * @param date $commitDate
     * return ShipmentOperationalDetail
     */
    public function setCommitDate($commitDate)
    {
        $this->CommitDate = $commitDate;
        return $this;
    }
    
    /**
     * Committed day of week of delivery.
     *
     * @param \FedEx\ShipService\SimpleType\DayOfWeekType|string $commitDay
     * return ShipmentOperationalDetail
     */
    public function setCommitDay($commitDay)
    {
        $this->CommitDay = $commitDay;
        return $this;
    }
    
    /**
     * Standard transit time per origin, destination, and service.
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $transitTime
     * return ShipmentOperationalDetail
     */
    public function setTransitTime($transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum expected transit time
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $maximumTransitTime
     * return ShipmentOperationalDetail
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * Transit time based on customer eligibility.
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $customTransitTime
     * return ShipmentOperationalDetail
     */
    public function setCustomTransitTime($customTransitTime)
    {
        $this->CustomTransitTime = $customTransitTime;
        return $this;
    }
    
    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @param boolean $ineligibleForMoneyBackGuarantee
     * return ShipmentOperationalDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    
    /**
     * FedEx Ground delivery features for which this shipment may be eligible.
     *
     * @param GroundDeliveryEligibilityType[] $deliveryEligibilities
     * return ShipmentOperationalDetail
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities)
    {
        $this->DeliveryEligibilities = $deliveryEligibilities;
        return $this;
    }
    
    /**
     * Text describing planned delivery.
     *
     * @param string $astraPlannedServiceLevel
     * return ShipmentOperationalDetail
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel)
    {
        $this->AstraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    
    /**
     * Set AstraDescription
     *
     * @param string $astraDescription
     * return ShipmentOperationalDetail
     */
    public function setAstraDescription($astraDescription)
    {
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    
    /**
     * Set PostalCode
     *
     * @param string $postalCode
     * return ShipmentOperationalDetail
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Set StateOrProvinceCode
     *
     * @param string $stateOrProvinceCode
     * return ShipmentOperationalDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Set CountryCode
     *
     * @param string $countryCode
     * return ShipmentOperationalDetail
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Set AirportId
     *
     * @param string $airportId
     * return ShipmentOperationalDetail
     */
    public function setAirportId($airportId)
    {
        $this->AirportId = $airportId;
        return $this;
    }
    
    /**
     * Set ServiceCode
     *
     * @param string $serviceCode
     * return ShipmentOperationalDetail
     */
    public function setServiceCode($serviceCode)
    {
        $this->ServiceCode = $serviceCode;
        return $this;
    }
    
    /**
     * Set Scac
     *
     * @param string $scac
     * return ShipmentOperationalDetail
     */
    public function setScac($scac)
    {
        $this->Scac = $scac;
        return $this;
    }
    

    
}