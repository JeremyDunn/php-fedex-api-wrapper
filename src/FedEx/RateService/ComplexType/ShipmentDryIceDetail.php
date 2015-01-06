<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Shipment-level totals of dry ice data across all packages.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentDryIceDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentDryIceDetail';

    /**
     * Total number of packages in the shipment that contain dry ice.
     *
     * @param nonNegativeInteger $packageCount
     * @return ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Returns Total number of packages in the shipment that contain dry ice.
     *
     * @return nonNegativeInteger
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    
    /**
     * Total shipment dry ice weight for all packages.
     *
     * @param Weight $totalWeight
     * @return ShipmentDryIceDetail
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Returns Total shipment dry ice weight for all packages.
     *
     * @return Weight
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    

    
}