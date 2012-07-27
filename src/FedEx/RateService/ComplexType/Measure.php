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
class Measure
    extends AbstractComplexType
{
    protected $_name = 'Measure';

    /**
     * 
     *
     * @param decimal $Quantity
     * return Measure
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Units
     * return Measure
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}