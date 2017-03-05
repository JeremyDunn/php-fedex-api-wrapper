<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DateRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property date $Begins
 * @property date $Ends

 */
class DateRange extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DateRange';

    /**
     * The beginning date in a date range.
     *
     * @param date $begins
     * @return $this
     */
    public function setBegins($begins)
    {
        $this->values['Begins'] = $begins;
        return $this;
    }

    /**
     * The end date in a date range.
     *
     * @param date $ends
     * @return $this
     */
    public function setEnds($ends)
    {
        $this->values['Ends'] = $ends;
        return $this;
    }

    
}
