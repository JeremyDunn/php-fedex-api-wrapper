<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Shipment-level totals of dry ice data across all packages.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentDryIceDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentDryIceDetail';

    /**
     * Total number of packages in the shipment that contain dry ice.
     *
     * @param nonNegativeInteger $PackageCount
     * return ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Total shipment dry ice weight for all packages.
     *
     * @param Weight $TotalWeight
     * return ShipmentDryIceDetail
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    

    
}