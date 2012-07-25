<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Descriptive information about the shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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
    public function setServiceType(\FedEx\PickupService\SimpleType\ServiceType $serviceType)
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
    public function setPackagingType(\FedEx\PickupService\SimpleType\PackagingType $packagingType)
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