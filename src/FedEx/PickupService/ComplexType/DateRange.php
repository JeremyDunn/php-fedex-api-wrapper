<?php
namespace FedEx\PickupService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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