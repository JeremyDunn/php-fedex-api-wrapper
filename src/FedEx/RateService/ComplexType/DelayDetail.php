<?php
namespace FedEx\RateService\ComplexType;

/**
 * Information about why a shipment delivery is delayed and at what level( country/service etc.).
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class DelayDetail
    extends AbstractComplexType
{
    protected $_name = 'DelayDetail';

    /**
     * The date of the delay
     *
     * @param date $Date
     * return DelayDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * 
     *
     * @param DayOfWeekType $DayOfWeek
     * return DelayDetail
     */
    public function setDayOfWeek(\FedEx\RateService\SimpleType\DayOfWeekType $dayOfWeek)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    
    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
     *
     * @param DelayLevelType $Level
     * return DelayDetail
     */
    public function setLevel(\FedEx\RateService\SimpleType\DelayLevelType $level)
    {
        $this->Level = $level;
        return $this;
    }
    
    /**
     * The point where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @param DelayPointType $Point
     * return DelayDetail
     */
    public function setPoint(\FedEx\RateService\SimpleType\DelayPointType $point)
    {
        $this->Point = $point;
        return $this;
    }
    
    /**
     * The reason for the delay (e.g. holiday, weekend, etc.).
     *
     * @param CommitmentDelayType $Type
     * return DelayDetail
     */
    public function setType(\FedEx\RateService\SimpleType\CommitmentDelayType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The name of the holiday in that country that is causing the delay.
     *
     * @param string $Description
     * return DelayDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}