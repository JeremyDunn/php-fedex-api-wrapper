<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for services performed during non-business hours and/or days.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property int $PersonDays
 * @property int $PersonHours

 */
class NonBusinessTimeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NonBusinessTimeDetail';

    /**
     * Total number of person days for full non-business days.
     *
     * @param int $personDays
     * @return $this
     */
    public function setPersonDays($personDays)
    {
        $this->values['PersonDays'] = $personDays;
        return $this;
    }

    /**
     * Total number of person hours (whole or partial hours) for non-business hours.
     *
     * @param int $personHours
     * @return $this
     */
    public function setPersonHours($personHours)
    {
        $this->values['PersonHours'] = $personHours;
        return $this;
    }
}
