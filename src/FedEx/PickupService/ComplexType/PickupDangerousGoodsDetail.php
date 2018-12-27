<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupDangerousGoodsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\HazardousCommodityRegulationType|string $Regulation
 * @property \FedEx\PickupService\SimpleType\DangerousGoodsAccessibilityType|string $Accessibility
 * @property \FedEx\PickupService\SimpleType\HazardousCommodityOptionType|string[] $Options

 */
class PickupDangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupDangerousGoodsDetail';

    /**
     * Describes the regulation type the pickup dangerous goods.
     *
     * @param \FedEx\PickupService\SimpleType\HazardousCommodityRegulationType|string $regulation
     * @return $this
     */
    public function setRegulation($regulation)
    {
        $this->values['Regulation'] = $regulation;
        return $this;
    }

    /**
     * Set Accessibility
     *
     * @param \FedEx\PickupService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['Accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Specifies the option types of the pickup dangerous goods.
     *
     * @param \FedEx\PickupService\SimpleType\HazardousCommodityOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
