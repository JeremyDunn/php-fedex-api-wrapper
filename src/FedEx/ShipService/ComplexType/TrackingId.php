<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setTrackingIdType(\FedEx\ShipService\SimpleType\TrackingIdType $trackingIdType)
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
     * For use with SmartPost tracking IDs only
     *
     * @param string $UspsApplicationId
     * return TrackingId
     */
    public function setUspsApplicationId($uspsApplicationId)
    {
        $this->UspsApplicationId = $uspsApplicationId;
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