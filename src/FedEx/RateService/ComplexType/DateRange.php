<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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