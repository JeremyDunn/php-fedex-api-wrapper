<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RecordedDangerousGoodsHandlingUnitGroup
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property UploadedDangerousGoodsHandlingUnitGroup $UploadedHandlingUnitGroup
 * @property DangerousGoodsHandlingUnitShippingDetail $HandlingUnitShippingDetail

 */
class RecordedDangerousGoodsHandlingUnitGroup extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RecordedDangerousGoodsHandlingUnitGroup';

    /**
     * Set UploadedHandlingUnitGroup
     *
     * @param UploadedDangerousGoodsHandlingUnitGroup $uploadedHandlingUnitGroup
     * @return $this
     */
    public function setUploadedHandlingUnitGroup(UploadedDangerousGoodsHandlingUnitGroup $uploadedHandlingUnitGroup)
    {
        $this->values['UploadedHandlingUnitGroup'] = $uploadedHandlingUnitGroup;
        return $this;
    }

    /**
     * Set HandlingUnitShippingDetail
     *
     * @param DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail
     * @return $this
     */
    public function setHandlingUnitShippingDetail(DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail)
    {
        $this->values['HandlingUnitShippingDetail'] = $handlingUnitShippingDetail;
        return $this;
    }
}
