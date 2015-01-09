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
     * @return PickupDetail
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * Returns Set ReadyDateTime
     *
     * @return dateTime
     */
    public function getReadyDateTime()
    {
        return $this->ReadyDateTime;
    }
    
    /**
     * Set LatestPickupDateTime
     *
     * @param dateTime $latestPickupDateTime
     * @return PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime)
    {
        $this->LatestPickupDateTime = $latestPickupDateTime;
        return $this;
    }
    
    /**
     * Returns Set LatestPickupDateTime
     *
     * @return dateTime
     */
    public function getLatestPickupDateTime()
    {
        return $this->LatestPickupDateTime;
    }
    
    /**
     * Set CourierInstructions
     *
     * @param string $courierInstructions
     * @return PickupDetail
     */
    public function setCourierInstructions($courierInstructions)
    {
        $this->CourierInstructions = $courierInstructions;
        return $this;
    }
    
    /**
     * Returns Set CourierInstructions
     *
     * @return string
     */
    public function getCourierInstructions()
    {
        return $this->CourierInstructions;
    }
    
    /**
     * Set RequestType
     *
     * @param \FedEx\RateService\SimpleType\PickupRequestType|string $requestType
     * @return PickupDetail
     */
    public function setRequestType($requestType)
    {
        $this->RequestType = $requestType;
        return $this;
    }
    
    /**
     * Returns Set RequestType
     *
     * @return \FedEx\RateService\SimpleType\PickupRequestType|string
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    
    /**
     * Set RequestSource
     *
     * @param \FedEx\RateService\SimpleType\PickupRequestSourceType|string $requestSource
     * @return PickupDetail
     */
    public function setRequestSource($requestSource)
    {
        $this->RequestSource = $requestSource;
        return $this;
    }
    
    /**
     * Returns Set RequestSource
     *
     * @return \FedEx\RateService\SimpleType\PickupRequestSourceType|string
     */
    public function getRequestSource()
    {
        return $this->RequestSource;
    }
    

    
}