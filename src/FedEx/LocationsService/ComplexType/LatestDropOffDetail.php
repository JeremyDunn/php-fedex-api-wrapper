<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the latest time by which a package can be dropped off at a FedEx location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\DayOfWeekType|string $DayOfWeek
 * @property string $Time
 * @property LatestDropoffOverlayDetail[] $Overlays

 */
class LatestDropOffDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LatestDropOffDetail';

    /**
     * Set DayOfWeek
     *
     * @param \FedEx\LocationsService\SimpleType\DayOfWeekType|string $dayOfWeek
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->values['DayOfWeek'] = $dayOfWeek;
        return $this;
    }

    /**
     * Set Time
     *
     * @param string $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->values['Time'] = $time;
        return $this;
    }

    /**
     * Specifies the details about the overlay to the last drop off time for a carrier at a FedEx location.
     *
     * @param LatestDropoffOverlayDetail[] $overlays
     * @return $this
     */
    public function setOverlays(array $overlays)
    {
        $this->values['Overlays'] = $overlays;
        return $this;
    }
}
