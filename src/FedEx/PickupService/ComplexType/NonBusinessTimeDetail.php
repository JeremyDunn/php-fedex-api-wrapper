<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for services performed during non-business hours and/or days.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class NonBusinessTimeDetail
    extends AbstractComplexType
{
    protected $_name = 'NonBusinessTimeDetail';

    /**
     * Total number of person days for full non-business days.
     *
     * @param nonNegativeInteger $PersonDays
     * return NonBusinessTimeDetail
     */
    public function setPersonDays($personDays)
    {
        $this->PersonDays = $personDays;
        return $this;
    }
    
    /**
     * Total number of person hours (whole or partial hours) for non-business hours.
     *
     * @param nonNegativeInteger $PersonHours
     * return NonBusinessTimeDetail
     */
    public function setPersonHours($personHours)
    {
        $this->PersonHours = $personHours;
        return $this;
    }
    

    
}