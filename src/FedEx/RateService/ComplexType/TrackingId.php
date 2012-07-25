<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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