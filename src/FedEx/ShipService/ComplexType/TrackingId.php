<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingId
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class TrackingId
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackingId';

    /**
     * Set TrackingIdType
     *
     * @param \FedEx\ShipService\SimpleType\TrackingIdType|string $trackingIdType
     * @return TrackingId
     */
    public function setTrackingIdType($trackingIdType)
    {
        $this->TrackingIdType = $trackingIdType;
        return $this;
    }
    
    /**
     * Returns Set TrackingIdType
     *
     * @return \FedEx\ShipService\SimpleType\TrackingIdType|string
     */
    public function getTrackingIdType()
    {
        return $this->TrackingIdType;
    }
    
    /**
     * Set FormId
     *
     * @param string $formId
     * @return TrackingId
     */
    public function setFormId($formId)
    {
        $this->FormId = $formId;
        return $this;
    }
    
    /**
     * Returns Set FormId
     *
     * @return string
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    
    /**
     * For use with SmartPost tracking IDs only
     *
     * @param string $uspsApplicationId
     * @return TrackingId
     */
    public function setUspsApplicationId($uspsApplicationId)
    {
        $this->UspsApplicationId = $uspsApplicationId;
        return $this;
    }
    
    /**
     * Returns For use with SmartPost tracking IDs only
     *
     * @return string
     */
    public function getUspsApplicationId()
    {
        return $this->UspsApplicationId;
    }
    
    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * @return TrackingId
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns Set TrackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    

    
}