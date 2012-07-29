<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Measure
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Measure
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Measure';

    /**
     * Set Quantity
     *
     * @param decimal $quantity
     * return Measure
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Set Units
     *
     * @param string $units
     * return Measure
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}