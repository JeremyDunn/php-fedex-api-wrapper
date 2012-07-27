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
    protected $_name = 'PickupDetail';

    /**
     * 
     *
     * @param dateTime $ReadyDateTime
     * return PickupDetail
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $LatestPickupDateTime
     * return PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime)
    {
        $this->LatestPickupDateTime = $latestPickupDateTime;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CourierInstructions
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
     * @param PickupRequestType $RequestType
     * return PickupDetail
     */
    public function setRequestType(\FedEx\ShipService\SimpleType\PickupRequestType $requestType)
    {
        $this->RequestType = $requestType;
        return $this;
    }
    
    /**
     * Identifies the type of source for Pickup request
     *
     * @param PickupRequestSourceType $RequestSource
     * return PickupDetail
     */
    public function setRequestSource(\FedEx\ShipService\SimpleType\PickupRequestSourceType $requestSource)
    {
        $this->RequestSource = $requestSource;
        return $this;
    }
    

    
}