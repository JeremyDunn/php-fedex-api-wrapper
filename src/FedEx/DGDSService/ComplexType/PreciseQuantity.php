<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PreciseQuantity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property float $Amount
 * @property string $Units

 */
class PreciseQuantity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PreciseQuantity';

    /**
     * Set Amount
     *
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['Amount'] = $amount;
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
