<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive information about the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupShipmentAttributes
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupShipmentAttributes';

    /**
     * Set ServiceType
     *
     * @param \FedEx\Pickup\SimpleType\ServiceType|string $serviceType
     * return PickupShipmentAttributes
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Set PackagingType
     *
     * @param \FedEx\Pickup\SimpleType\PackagingType|string $packagingType
     * return PickupShipmentAttributes
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Descriptive information about the dimensions of the package.
     *
     * @param Dimensions $dimensions
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
     * @param Weight $weight
     * return PickupShipmentAttributes
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    

    
}