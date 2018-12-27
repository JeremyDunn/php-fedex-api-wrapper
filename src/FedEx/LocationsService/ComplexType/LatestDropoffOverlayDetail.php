<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the time and reason to overlay the last drop off time for a carrier at a FedEx location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\LatestDropOffOverlayType|string $Type
 * @property string $Time

 */
class LatestDropoffOverlayDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LatestDropoffOverlayDetail';

    /**
     * Set Type
     *
     * @param \FedEx\LocationsService\SimpleType\LatestDropOffOverlayType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
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
}
