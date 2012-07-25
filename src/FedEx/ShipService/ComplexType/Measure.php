<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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