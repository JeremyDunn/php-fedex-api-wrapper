<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for services performed during non-business hours and/or days.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property nonNegativeInteger $PersonDays
 * @property nonNegativeInteger $PersonHours

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
     * @param nonNegativeInteger $personDays
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
     * @param nonNegativeInteger $personHours
     * @return $this
     */
    public function setPersonHours($personHours)
    {
        $this->values['PersonHours'] = $personHours;
        return $this;
    }

    
}
