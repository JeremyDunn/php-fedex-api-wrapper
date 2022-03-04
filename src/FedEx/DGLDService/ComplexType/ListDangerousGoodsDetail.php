<?php
namespace FedEx\DGLDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ListDangerousGoodsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
 *
 * @property string[] $TrackingNumbers
 * @property string $Description
 * @property \FedEx\DGLDService\SimpleType\DangerousGoodsAccessibilityType|string $Accessibility
 * @property \FedEx\DGLDService\SimpleType\HazardousCommodityOptionType|string[] $Options

 */
class ListDangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ListDangerousGoodsDetail';

    /**
     * Set TrackingNumbers
     *
     * @param string $trackingNumbers
     * @return $this
     */
    public function setTrackingNumbers($trackingNumbers)
    {
        $this->values['TrackingNumbers'] = $trackingNumbers;
        return $this;
    }

    /**
     * Specifies detailed commodity information related to the regulations.
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
     * Set Accessibility
     *
     * @param \FedEx\DGLDService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
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
     * @param \FedEx\DGLDService\SimpleType\HazardousCommodityOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
