<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadedDangerousGoodsContainer
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsContainerAttributeType|string[] $Attributes
 * @property string $ContainerType
 * @property float $QValue
 * @property Weight $GrossWeight
 * @property UploadedDangerousGoodsCommodityContent[] $Commodities

 */
class UploadedDangerousGoodsContainer extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadedDangerousGoodsContainer';

    /**
     * Set Attributes
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsContainerAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Specifies the type of container or dangerous goods packaging, like 'Fiberboard Box' or 'Type B(U) Package'.
     *
     * @param string $containerType
     * @return $this
     */
    public function setContainerType($containerType)
    {
        $this->values['ContainerType'] = $containerType;
        return $this;
    }

    /**
     * Set QValue
     *
     * @param float $qValue
     * @return $this
     */
    public function setQValue($qValue)
    {
        $this->values['QValue'] = $qValue;
        return $this;
    }

    /**
     * Set GrossWeight
     *
     * @param Weight $grossWeight
     * @return $this
     */
    public function setGrossWeight(Weight $grossWeight)
    {
        $this->values['GrossWeight'] = $grossWeight;
        return $this;
    }

    /**
     * Set Commodities
     *
     * @param UploadedDangerousGoodsCommodityContent[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['Commodities'] = $commodities;
        return $this;
    }
}
