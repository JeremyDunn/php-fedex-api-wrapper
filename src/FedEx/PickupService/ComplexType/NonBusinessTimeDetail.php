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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NonBusinessTimeDetail';

    /**
     * Total number of person days for full non-business days.
     *
     * @param nonNegativeInteger $personDays
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
     * @param nonNegativeInteger $personHours
     * return NonBusinessTimeDetail
     */
    public function setPersonHours($personHours)
    {
        $this->PersonHours = $personHours;
        return $this;
    }
    

    
}