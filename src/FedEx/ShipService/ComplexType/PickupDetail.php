<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class describes the pickup characteristics of a shipment (e.g. for use in a tag request).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PickupDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupDetail';

    /**
     * Set ReadyDateTime
     *
     * @param dateTime $readyDateTime
     * return PickupDetail
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * Set LatestPickupDateTime
     *
     * @param dateTime $latestPickupDateTime
     * return PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime)
    {
        $this->LatestPickupDateTime = $latestPickupDateTime;
        return $this;
    }
    
    /**
     * Set CourierInstructions
     *
     * @param string $courierInstructions
     * return PickupDetail
     */
    public function setCourierInstructions($courierInstructions)
    {
        $this->CourierInstructions = $courierInstructions;
        return $this;
    }
    
    /**
     * Identifies the type of Pickup request
     *
     * @param \FedEx\ShipService\SimpleType\PickupRequestType|string $requestType
     * return PickupDetail
     */
    public function setRequestType($requestType)
    {
        $this->RequestType = $requestType;
        return $this;
    }
    
    /**
     * Identifies the type of source for Pickup request
     *
     * @param \FedEx\ShipService\SimpleType\PickupRequestSourceType|string $requestSource
     * return PickupDetail
     */
    public function setRequestSource($requestSource)
    {
        $this->RequestSource = $requestSource;
        return $this;
    }
    

    
}