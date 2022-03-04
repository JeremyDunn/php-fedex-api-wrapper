<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This provides the information needed for shipping, rating, validation, and label generation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property TrackingNumberUnit[] $TrackingNumberUnits
 * @property string $Description
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsAircraftCategoryType|string $AircraftCategoryType
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsDescriptorType|string[] $DangerousGoodsDescriptors
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsAccessibilityType|string $Accessibility
 * @property \FedEx\DGDSService\SimpleType\HazardousCommodityOptionType|string[] $Options
 * @property Weight $DryIceWeight

 */
class DangerousGoodsHandlingUnitShippingDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsHandlingUnitShippingDetail';

    /**
     * Set TrackingNumberUnits
     *
     * @param TrackingNumberUnit[] $trackingNumberUnits
     * @return $this
     */
    public function setTrackingNumberUnits(array $trackingNumberUnits)
    {
        $this->values['TrackingNumberUnits'] = $trackingNumberUnits;
        return $this;
    }

    /**
     * The customer provided description for this handling unit.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set AircraftCategoryType
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsAircraftCategoryType|string $aircraftCategoryType
     * @return $this
     */
    public function setAircraftCategoryType($aircraftCategoryType)
    {
        $this->values['AircraftCategoryType'] = $aircraftCategoryType;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: These descriptors are used for shipping clients to apply the correct behavior for validation and label generation.
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsDescriptorType[]|string[] $dangerousGoodsDescriptors
     * @return $this
     */
    public function setDangerousGoodsDescriptors(array $dangerousGoodsDescriptors)
    {
        $this->values['DangerousGoodsDescriptors'] = $dangerousGoodsDescriptors;
        return $this;
    }

    /**
     * Set Accessibility
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['Accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Set Options
     *
     * @param \FedEx\DGDSService\SimpleType\HazardousCommodityOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * The total dry ice weight for this handling unit (or package).
     *
     * @param Weight $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->values['DryIceWeight'] = $dryIceWeight;
        return $this;
    }
}
