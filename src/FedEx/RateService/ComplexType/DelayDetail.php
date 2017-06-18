<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about why a shipment delivery is delayed and at what level( country/service etc.).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Date
 * @property \FedEx\RateService\SimpleType\DayOfWeekType|string $DayOfWeek
 * @property \FedEx\RateService\SimpleType\DelayLevelType|string $Level
 * @property \FedEx\RateService\SimpleType\DelayPointType|string $Point
 * @property \FedEx\RateService\SimpleType\CommitmentDelayType|string $Type
 * @property string $Description

 */
class DelayDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DelayDetail';

    /**
     * The date of the delay
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['Date'] = $date;
        return $this;
    }

    /**
     * Set DayOfWeek
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $dayOfWeek
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->values['DayOfWeek'] = $dayOfWeek;
        return $this;
    }

    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
     *
     * @param \FedEx\RateService\SimpleType\DelayLevelType|string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->values['Level'] = $level;
        return $this;
    }

    /**
     * The point where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @param \FedEx\RateService\SimpleType\DelayPointType|string $point
     * @return $this
     */
    public function setPoint($point)
    {
        $this->values['Point'] = $point;
        return $this;
    }

    /**
     * The reason for the delay (e.g. holiday, weekend, etc.).
     *
     * @param \FedEx\RateService\SimpleType\CommitmentDelayType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * The name of the holiday in that country that is causing the delay.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }
}
