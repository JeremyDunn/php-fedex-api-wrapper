<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies documentation and limits for validation of an individual packing group/category.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityPackingDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityPackingDetail';

    /**
     * Set CargoAircraftOnly
     *
     * @param boolean $cargoAircraftOnly
     * return HazardousCommodityPackingDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Coded specification for how commodity is to be packed.
     *
     * @param string $packingInstructions
     * return HazardousCommodityPackingDetail
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->PackingInstructions = $packingInstructions;
        return $this;
    }
    

    
}