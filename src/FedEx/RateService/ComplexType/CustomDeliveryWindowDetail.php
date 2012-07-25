<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CustomDeliveryWindowDetail
    extends AbstractComplexType
{
    protected $_name = 'CustomDeliveryWindowDetail';

    /**
     * Indicates the type of custom delivery being requested.
     *
     * @param CustomDeliveryWindowType $Type
     * return CustomDeliveryWindowDetail
     */
    public function setType(\FedEx\RateService\SimpleType\CustomDeliveryWindowType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Time by which delivery is requested.
     *
     * @param time $RequestTime
     * return CustomDeliveryWindowDetail
     */
    public function setRequestTime(time $requestTime)
    {
        $this->RequestTime = $requestTime;
        return $this;
    }
    
    /**
     * Range of dates for custom delivery request; only used if type is BETWEEN.
     *
     * @param DateRange $RequestRange
     * return CustomDeliveryWindowDetail
     */
    public function setRequestRange(DateRange $requestRange)
    {
        $this->RequestRange = $requestRange;
        return $this;
    }
    
    /**
     * Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     *
     * @param date $RequestDate
     * return CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate)
    {
        $this->RequestDate = $requestDate;
        return $this;
    }
    

    
}