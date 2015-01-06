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
     * @return PickupShipmentAttributes
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Returns Set ServiceType
     *
     * @return \FedEx\Pickup\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * Set PackagingType
     *
     * @param \FedEx\Pickup\SimpleType\PackagingType|string $packagingType
     * @return PickupShipmentAttributes
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Returns Set PackagingType
     *
     * @return \FedEx\Pickup\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * Descriptive information about the dimensions of the package.
     *
     * @param Dimensions $dimensions
     * @return PickupShipmentAttributes
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns Descriptive information about the dimensions of the package.
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    
    /**
     * Descriptive information about the weight of the package.
     *
     * @param Weight $weight
     * @return PickupShipmentAttributes
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Descriptive information about the weight of the package.
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    

    
}