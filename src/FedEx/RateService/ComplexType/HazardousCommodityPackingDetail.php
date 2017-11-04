<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies documentation and limits for validation of an individual packing group/category.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property boolean $CargoAircraftOnly
 * @property string $PackingInstructions

 */
class HazardousCommodityPackingDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HazardousCommodityPackingDetail';

    /**
     * Set CargoAircraftOnly
     *
     * @param boolean $cargoAircraftOnly
     * @return $this
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->values['CargoAircraftOnly'] = $cargoAircraftOnly;
        return $this;
    }

    /**
     * Coded specification for how commodity is to be packed.
     *
     * @param string $packingInstructions
     * @return $this
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->values['PackingInstructions'] = $packingInstructions;
        return $this;
    }
}
