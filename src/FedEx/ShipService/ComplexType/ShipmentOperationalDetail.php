<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentOperationalDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentOperationalDetail';

    /**
     * 
     *
     * @param string $UrsaPrefixCode
     * return ShipmentOperationalDetail
     */
    public function setUrsaPrefixCode($ursaPrefixCode)
    {
        $this->UrsaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $UrsaSuffixCode
     * return ShipmentOperationalDetail
     */
    public function setUrsaSuffixCode($ursaSuffixCode)
    {
        $this->UrsaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $OriginLocationId
     * return ShipmentOperationalDetail
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->OriginLocationId = $originLocationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param int $OriginLocationNumber
     * return ShipmentOperationalDetail
     */
    public function setOriginLocationNumber($originLocationNumber)
    {
        $this->OriginLocationNumber = $originLocationNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $OriginServiceArea
     * return ShipmentOperationalDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationLocationId
     * return ShipmentOperationalDetail
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->DestinationLocationId = $destinationLocationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param int $DestinationLocationNumber
     * return ShipmentOperationalDetail
     */
    public function setDestinationLocationNumber($destinationLocationNumber)
    {
        $this->DestinationLocationNumber = $destinationLocationNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationServiceArea
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
     * @param string $DestinationLocationStateOrProvinceCode
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
     * @param date $DeliveryDate
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
     * @param DayOfWeekType $DeliveryDay
     * return ShipmentOperationalDetail
     */
    public function setDeliveryDay(\FedEx\ShipService\SimpleType\DayOfWeekType $deliveryDay)
    {
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Delivery time, as published in Service Guide.
     *
     * @param time $PublishedDeliveryTime
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
     * @param date $CommitDate
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
     * @param DayOfWeekType $CommitDay
     * return ShipmentOperationalDetail
     */
    public function setCommitDay(\FedEx\ShipService\SimpleType\DayOfWeekType $commitDay)
    {
        $this->CommitDay = $commitDay;
        return $this;
    }
    
    /**
     * Standard transit time per origin, destination, and service.
     *
     * @param TransitTimeType $TransitTime
     * return ShipmentOperationalDetail
     */
    public function setTransitTime(\FedEx\ShipService\SimpleType\TransitTimeType $transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum expected transit time
     *
     * @param TransitTimeType $MaximumTransitTime
     * return ShipmentOperationalDetail
     */
    public function setMaximumTransitTime(\FedEx\ShipService\SimpleType\TransitTimeType $maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * Transit time based on customer eligibility.
     *
     * @param TransitTimeType $CustomTransitTime
     * return ShipmentOperationalDetail
     */
    public function setCustomTransitTime(\FedEx\ShipService\SimpleType\TransitTimeType $customTransitTime)
    {
        $this->CustomTransitTime = $customTransitTime;
        return $this;
    }
    
    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @param boolean $IneligibleForMoneyBackGuarantee
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
     * @param array[GroundDeliveryEligibilityType] $DeliveryEligibilities
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
     * @param string $AstraPlannedServiceLevel
     * return ShipmentOperationalDetail
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel)
    {
        $this->AstraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $AstraDescription
     * return ShipmentOperationalDetail
     */
    public function setAstraDescription($astraDescription)
    {
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $PostalCode
     * return ShipmentOperationalDetail
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $StateOrProvinceCode
     * return ShipmentOperationalDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CountryCode
     * return ShipmentOperationalDetail
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $AirportId
     * return ShipmentOperationalDetail
     */
    public function setAirportId($airportId)
    {
        $this->AirportId = $airportId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $ServiceCode
     * return ShipmentOperationalDetail
     */
    public function setServiceCode($serviceCode)
    {
        $this->ServiceCode = $serviceCode;
        return $this;
    }
    

    
}