<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NetExplosiveDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\NetExplosiveClassificationType|string $Type
 * @property float $Amount
 * @property string $Units

 */
class NetExplosiveDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NetExplosiveDetail';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\NetExplosiveClassificationType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

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
