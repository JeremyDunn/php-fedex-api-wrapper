<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Completed package-level hazardous commodity information for a single package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedHazardousPackageDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedHazardousPackageDetail';

    /**
     * A unique reference id that matches the package to a package configuration. This is populated if the client provided a package configuration for several packages that have the exact same dangerous goods content.
     *
     * @param string $referenceId
     * return CompletedHazardousPackageDetail
     */
    public function setReferenceId($referenceId)
    {
        $this->ReferenceId = $referenceId;
        return $this;
    }
    
    /**
     * Set Accessibility
     *
     * @param \FedEx\ShipService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * return CompletedHazardousPackageDetail
     */
    public function setAccessibility($accessibility)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * When true indicates that the package can be transported only on a cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
     * return CompletedHazardousPackageDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Specifies the maximum radiation level from the package (measured in microSieverts per hour at a distance of one meter from the external surface of the package, divided by 10).
     *
     * @param decimal $radioactiveTransportIndex
     * return CompletedHazardousPackageDetail
     */
    public function setRadioactiveTransportIndex($radioactiveTransportIndex)
    {
        $this->RadioactiveTransportIndex = $radioactiveTransportIndex;
        return $this;
    }
    
    /**
     * Specifies the label that is to be put on a package containing radioactive material. The label type is determined in accordance with the Transportation of Dangerous Goods Act and indicates the type of radioactive material being handled as well as the relative risk.
     *
     * @param \FedEx\ShipService\SimpleType\RadioactiveLabelType|string $labelType
     * return CompletedHazardousPackageDetail
     */
    public function setLabelType($labelType)
    {
        $this->LabelType = $labelType;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @param ValidatedHazardousContainer[] $containers
     * return CompletedHazardousPackageDetail
     */
    public function setContainers(array $containers)
    {
        $this->Containers = $containers;
        return $this;
    }
    

    
}