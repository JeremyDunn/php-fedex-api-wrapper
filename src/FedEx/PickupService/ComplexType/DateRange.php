<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DateRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class DateRange
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DateRange';

    /**
     * The beginning date in a date range.
     *
     * @param date $begins
     * @return DateRange
     */
    public function setBegins($begins)
    {
        $this->Begins = $begins;
        return $this;
    }
    
    /**
     * Returns The beginning date in a date range.
     *
     * @return date
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    
    /**
     * The end date in a date range.
     *
     * @param date $ends
     * @return DateRange
     */
    public function setEnds($ends)
    {
        $this->Ends = $ends;
        return $this;
    }
    
    /**
     * Returns The end date in a date range.
     *
     * @return date
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    

    
}