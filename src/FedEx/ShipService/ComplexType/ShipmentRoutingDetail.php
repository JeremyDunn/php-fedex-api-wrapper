<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Information about the routing, origin, destination and delivery of a shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentRoutingDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentRoutingDetail';

    /**
     * The prefix portion of the URSA (Universal Routing and Sort Aid) code.
     *
     * @param string $UrsaPrefixCode
     * return ShipmentRoutingDetail
     */
    public function setUrsaPrefixCode($ursaPrefixCode)
    {
        $this->UrsaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    
    /**
     * The suffix portion of the URSA code.
     *
     * @param string $UrsaSuffixCode
     * return ShipmentRoutingDetail
     */
    public function setUrsaSuffixCode($ursaSuffixCode)
    {
        $this->UrsaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    
    /**
     * The identifier of the origin location of the shipment. Express only.
     *
     * @param string $OriginLocationId
     * return ShipmentRoutingDetail
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->OriginLocationId = $originLocationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $OriginServiceArea
     * return ShipmentRoutingDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * The identifier of the destination location of the shipment. Express only.
     *
     * @param string $DestinationLocationId
     * return ShipmentRoutingDetail
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->DestinationLocationId = $destinationLocationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationServiceArea
     * return ShipmentRoutingDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * The state or province code of the destination of the shipment.
     *
     * @param string $DestinationLocationStateOrProvinceCode
     * return ShipmentRoutingDetail
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
    {
        $this->DestinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;
        return $this;
    }
    
    /**
     * The date the shipment is expected to be delivered.
     *
     * @param date $DeliveryDate
     * return ShipmentRoutingDetail
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * The day of the week the shipment is expected to be delivered. Express only.
     *
     * @param DayOfWeekType $DeliveryDay
     * return ShipmentRoutingDetail
     */
    public function setDeliveryDay(\FedEx\ShipService\SimpleType\DayOfWeekType $deliveryDay)
    {
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * The date the shipment is committed to be delivered.
     *
     * @param date $CommitDate
     * return ShipmentRoutingDetail
     */
    public function setCommitDate($commitDate)
    {
        $this->CommitDate = $commitDate;
        return $this;
    }
    
    /**
     * The day of the week the shipment is committed to be delivered. Express only.
     *
     * @param DayOfWeekType $CommitDay
     * return ShipmentRoutingDetail
     */
    public function setCommitDay(\FedEx\ShipService\SimpleType\DayOfWeekType $commitDay)
    {
        $this->CommitDay = $commitDay;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param TransitTimeType $TransitTime
     * return ShipmentRoutingDetail
     */
    public function setTransitTime(\FedEx\ShipService\SimpleType\TransitTimeType $transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Text describing planned delivery.
     *
     * @param string $AstraPlannedServiceLevel
     * return ShipmentRoutingDetail
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel)
    {
        $this->AstraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param string $AstraDescription
     * return ShipmentRoutingDetail
     */
    public function setAstraDescription($astraDescription)
    {
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    
    /**
     * The postal code of the destination of the shipment.
     *
     * @param string $PostalCode
     * return ShipmentRoutingDetail
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * The state or province code of the destination of the shipment.
     *
     * @param string $StateOrProvinceCode
     * return ShipmentRoutingDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * The country code of the destination of the shipment.
     *
     * @param string $CountryCode
     * return ShipmentRoutingDetail
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * The identifier for the airport of the destination of the shipment.
     *
     * @param string $AirportId
     * return ShipmentRoutingDetail
     */
    public function setAirportId($airportId)
    {
        $this->AirportId = $airportId;
        return $this;
    }
    

    
}