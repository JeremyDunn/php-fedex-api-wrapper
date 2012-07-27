<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class describes the pickup characteristics of a shipment (e.g. for use in a tag request).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * 
     *
     * @param PickupRequestType $RequestType
     * return PickupDetail
     */
    public function setRequestType(\FedEx\RateService\SimpleType\PickupRequestType $requestType)
    {
        $this->RequestType = $requestType;
        return $this;
    }
    
    /**
     * 
     *
     * @param PickupRequestSourceType $RequestSource
     * return PickupDetail
     */
    public function setRequestSource(\FedEx\RateService\SimpleType\PickupRequestSourceType $requestSource)
    {
        $this->RequestSource = $requestSource;
        return $this;
    }
    

    
}