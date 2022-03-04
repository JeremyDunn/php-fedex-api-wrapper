<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadionuclideActivity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property float $Value
 * @property \FedEx\ShipService\SimpleType\RadioactivityUnitOfMeasure|string $UnitOfMeasure

 */
class RadionuclideActivity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RadionuclideActivity';

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
     * @param \FedEx\ShipService\SimpleType\RadioactivityUnitOfMeasure|string $unitOfMeasure
     * @return $this
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->values['UnitOfMeasure'] = $unitOfMeasure;
        return $this;
    }
}
