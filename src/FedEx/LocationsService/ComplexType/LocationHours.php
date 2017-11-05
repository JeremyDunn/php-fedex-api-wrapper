<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the location hours for a location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\DayOfWeekType|string $DayofWeek
 * @property \FedEx\LocationsService\SimpleType\OperationalHoursType|string $OperationalHours
 * @property TimeRange[] $Hours

 */
class LocationHours extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationHours';

    /**
     * Set DayofWeek
     *
     * @param \FedEx\LocationsService\SimpleType\DayOfWeekType|string $dayofWeek
     * @return $this
     */
    public function setDayofWeek($dayofWeek)
    {
        $this->values['DayofWeek'] = $dayofWeek;
        return $this;
    }

    /**
     * Set OperationalHours
     *
     * @param \FedEx\LocationsService\SimpleType\OperationalHoursType|string $operationalHours
     * @return $this
     */
    public function setOperationalHours($operationalHours)
    {
        $this->values['OperationalHours'] = $operationalHours;
        return $this;
    }

    /**
     * Set Hours
     *
     * @param TimeRange[] $hours
     * @return $this
     */
    public function setHours(array $hours)
    {
        $this->values['Hours'] = $hours;
        return $this;
    }
}
