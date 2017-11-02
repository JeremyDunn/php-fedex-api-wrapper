<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Shipment-level totals of dry ice data across all packages.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property int $PackageCount
 * @property Weight $TotalWeight
 * @property ShipmentDryIceProcessingOptionsRequested $ProcessingOptions

 */
class ShipmentDryIceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentDryIceDetail';

    /**
     * Total number of packages in the shipment that contain dry ice.
     *
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['PackageCount'] = $packageCount;
        return $this;
    }

    /**
     * Total shipment dry ice weight for all packages.
     *
     * @param Weight $totalWeight
     * @return $this
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->values['TotalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Set ProcessingOptions
     *
     * @param ShipmentDryIceProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(ShipmentDryIceProcessingOptionsRequested $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }
}
