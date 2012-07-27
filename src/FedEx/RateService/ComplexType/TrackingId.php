<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackingId
    extends AbstractComplexType
{
    protected $_name = 'TrackingId';

    /**
     * 
     *
     * @param TrackingIdType $TrackingIdType
     * return TrackingId
     */
    public function setTrackingIdType(\FedEx\RateService\SimpleType\TrackingIdType $trackingIdType)
    {
        $this->TrackingIdType = $trackingIdType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $FormId
     * return TrackingId
     */
    public function setFormId($formId)
    {
        $this->FormId = $formId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackingNumber
     * return TrackingId
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    

    
}