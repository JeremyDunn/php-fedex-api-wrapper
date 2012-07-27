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
    protected $_name = 'PickupShipmentAttributes';

    /**
     * 
     *
     * @param ServiceType $ServiceType
     * return PickupShipmentAttributes
     */
    public function setServiceType(\FedEx\Pickup\SimpleType\ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * 
     *
     * @param PackagingType $PackagingType
     * return PickupShipmentAttributes
     */
    public function setPackagingType(\FedEx\Pickup\SimpleType\PackagingType $packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
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