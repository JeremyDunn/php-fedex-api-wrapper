<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive information about the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class PickupShipmentAttributes
    extends AbstractComplexType
{
    protected $_name = 'PickupShipmentAttributes';

    /**
     * Descriptive information about the dimensions of the package.
     *
     * @param Dimensions $Dimensions
     * return PickupShipmentAttributes
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Descriptive information about the weight of the package.
     *
     * @param Weight $Weight
     * return PickupShipmentAttributes
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    

    
}