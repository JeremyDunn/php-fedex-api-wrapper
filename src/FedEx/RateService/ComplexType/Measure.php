<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Measure
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property float $Quantity
 * @property string $Units

 */
class Measure extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Measure';

    /**
     * Set Quantity
     *
     * @param float $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->values['Quantity'] = $quantity;
        return $this;
    }

    /**
     * Set Units
     *
     * @param string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }
}
