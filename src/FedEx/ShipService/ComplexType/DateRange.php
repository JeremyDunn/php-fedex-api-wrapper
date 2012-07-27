<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DateRange
    extends AbstractComplexType
{
    protected $_name = 'DateRange';

    /**
     * The beginning date in a date range.
     *
     * @param date $Begins
     * return DateRange
     */
    public function setBegins($begins)
    {
        $this->Begins = $begins;
        return $this;
    }
    
    /**
     * The end date in a date range.
     *
     * @param date $Ends
     * return DateRange
     */
    public function setEnds($ends)
    {
        $this->Ends = $ends;
        return $this;
    }
    

    
}