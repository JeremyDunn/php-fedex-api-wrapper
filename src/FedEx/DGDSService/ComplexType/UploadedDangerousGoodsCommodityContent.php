<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadedDangerousGoodsCommodityContent
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property UploadedDangerousGoodsCommodityDescription $Description
 * @property PreciseQuantity $Quantity
 * @property DangerousGoodsInnerReceptacleDetail[] $InnerReceptacles
 * @property DangerousGoodsRadionuclideDetail $RadionuclideDetail
 * @property NetExplosiveDetail $NetExplosiveDetail

 */
class UploadedDangerousGoodsCommodityContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadedDangerousGoodsCommodityContent';

    /**
     * Specifies detailed commodity information related to the regulations.
     *
     * @param UploadedDangerousGoodsCommodityDescription $description
     * @return $this
     */
    public function setDescription(UploadedDangerousGoodsCommodityDescription $description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Specifies the total quantity of this commodity within the container.
     *
     * @param PreciseQuantity $quantity
     * @return $this
     */
    public function setQuantity(PreciseQuantity $quantity)
    {
        $this->values['Quantity'] = $quantity;
        return $this;
    }

    /**
     * Specifies the inner receptacles within the container - including the quantities of this commodity in the receptacles.
     *
     * @param DangerousGoodsInnerReceptacleDetail[] $innerReceptacles
     * @return $this
     */
    public function setInnerReceptacles(array $innerReceptacles)
    {
        $this->values['InnerReceptacles'] = $innerReceptacles;
        return $this;
    }

    /**
     * Specifies the radioactive information for this commodity.
     *
     * @param DangerousGoodsRadionuclideDetail $radionuclideDetail
     * @return $this
     */
    public function setRadionuclideDetail(DangerousGoodsRadionuclideDetail $radionuclideDetail)
    {
        $this->values['RadionuclideDetail'] = $radionuclideDetail;
        return $this;
    }

    /**
     * Specifies the net explosive mass of this commodity.
     *
     * @param NetExplosiveDetail $netExplosiveDetail
     * @return $this
     */
    public function setNetExplosiveDetail(NetExplosiveDetail $netExplosiveDetail)
    {
        $this->values['NetExplosiveDetail'] = $netExplosiveDetail;
        return $this;
    }
}
