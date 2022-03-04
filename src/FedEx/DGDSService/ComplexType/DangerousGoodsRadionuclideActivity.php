<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DangerousGoodsRadionuclideActivity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property float $Value
 * @property \FedEx\DGDSService\SimpleType\RadioactivityUnitOfMeasure|string $UnitOfMeasure

 */
class DangerousGoodsRadionuclideActivity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsRadionuclideActivity';

    /**
     * Set Value
     *
     * @param float $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }

    /**
     * Set UnitOfMeasure
     *
     * @param \FedEx\DGDSService\SimpleType\RadioactivityUnitOfMeasure|string $unitOfMeasure
     * @return $this
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->values['UnitOfMeasure'] = $unitOfMeasure;
        return $this;
    }
}
