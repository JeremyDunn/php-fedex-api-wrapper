<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DateRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * Set Begins
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
     * Returns Set Begins
     *
     * @return date
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    
    /**
     * Set Ends
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
     * Returns Set Ends
     *
     * @return date
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    

    
}