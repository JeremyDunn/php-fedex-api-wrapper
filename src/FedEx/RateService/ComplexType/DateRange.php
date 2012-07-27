<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DateRange
    extends AbstractComplexType
{
    protected $_name = 'DateRange';

    /**
     * 
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
     * 
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