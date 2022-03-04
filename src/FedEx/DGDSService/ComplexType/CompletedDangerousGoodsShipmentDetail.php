<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedDangerousGoodsShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\HazardousCommodityRegulationType|string $Regulation
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsRegulationAttributeType|string[] $RegulationAttributes
 * @property int $TotalHandlingUnitCount
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsAircraftCategoryType|string $AircraftCategoryType
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsDescriptorType|string[] $DangerousGoodsDescriptors
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsAccessibilityType|string $Accessibility
 * @property \FedEx\DGDSService\SimpleType\HazardousCommodityOptionType|string[] $Options
 * @property ShipmentDryIceDetail $ShipmentDryIceDetail
 * @property string $ExpirationDate

 */
class CompletedDangerousGoodsShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedDangerousGoodsShipmentDetail';

    /**
     * The regulation under which the DG data has been validated.
     *
     * @param \FedEx\DGDSService\SimpleType\HazardousCommodityRegulationType|string $regulation
     * @return $this
     */
    public function setRegulation($regulation)
    {
        $this->values['Regulation'] = $regulation;
        return $this;
    }

    /**
     * Set RegulationAttributes
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsRegulationAttributeType[]|string[] $regulationAttributes
     * @return $this
     */
    public function setRegulationAttributes(array $regulationAttributes)
    {
        $this->values['RegulationAttributes'] = $regulationAttributes;
        return $this;
    }

    /**
     * The total number of DG handling units (or packages) in the shipment.
     *
     * @param int $totalHandlingUnitCount
     * @return $this
     */
    public function setTotalHandlingUnitCount($totalHandlingUnitCount)
    {
        $this->values['TotalHandlingUnitCount'] = $totalHandlingUnitCount;
        return $this;
    }

    /**
     * Identifies the type of aircraft category allowed for the shipment.
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
     * The total dry ice information for the shipment.
     *
     * @param ShipmentDryIceDetail $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail(ShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->values['ShipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * The date on which previously uploaded dangerous goods data will expire and no longer be accessible.
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }
}
