<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about why a shipment delivery is delayed and at what level( country/service etc.).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DelayDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DelayDetail';

    /**
     * The date of the delay
     *
     * @param date $date
     * @return DelayDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns The date of the delay
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Set DayOfWeek
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $dayOfWeek
     * @return DelayDetail
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    
    /**
     * Returns Set DayOfWeek
     *
     * @return \FedEx\RateService\SimpleType\DayOfWeekType|string
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    
    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
     *
     * @param \FedEx\RateService\SimpleType\DelayLevelType|string $level
     * @return DelayDetail
     */
    public function setLevel($level)
    {
        $this->Level = $level;
        return $this;
    }
    
    /**
     * Returns The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
     *
     * @return \FedEx\RateService\SimpleType\DelayLevelType|string
     */
    public function getLevel()
    {
        return $this->Level;
    }
    
    /**
     * The point where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @param \FedEx\RateService\SimpleType\DelayPointType|string $point
     * @return DelayDetail
     */
    public function setPoint($point)
    {
        $this->Point = $point;
        return $this;
    }
    
    /**
     * Returns The point where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @return \FedEx\RateService\SimpleType\DelayPointType|string
     */
    public function getPoint()
    {
        return $this->Point;
    }
    
    /**
     * The reason for the delay (e.g. holiday, weekend, etc.).
     *
     * @param \FedEx\RateService\SimpleType\CommitmentDelayType|string $type
     * @return DelayDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns The reason for the delay (e.g. holiday, weekend, etc.).
     *
     * @return \FedEx\RateService\SimpleType\CommitmentDelayType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * The name of the holiday in that country that is causing the delay.
     *
     * @param string $description
     * @return DelayDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns The name of the holiday in that country that is causing the delay.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}