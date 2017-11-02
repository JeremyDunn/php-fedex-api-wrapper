<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RecordedDangerousGoodsShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property UploadedDangerousGoodsShipmentDetail $UploadedShipmentDetail
 * @property CompletedDangerousGoodsShipmentDetail $CompletedShipmentDetail

 */
class RecordedDangerousGoodsShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RecordedDangerousGoodsShipmentDetail';

    /**
     * Set UploadedShipmentDetail
     *
     * @param UploadedDangerousGoodsShipmentDetail $uploadedShipmentDetail
     * @return $this
     */
    public function setUploadedShipmentDetail(UploadedDangerousGoodsShipmentDetail $uploadedShipmentDetail)
    {
        $this->values['UploadedShipmentDetail'] = $uploadedShipmentDetail;
        return $this;
    }

    /**
     * Set CompletedShipmentDetail
     *
     * @param CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     * @return $this
     */
    public function setCompletedShipmentDetail(CompletedDangerousGoodsShipmentDetail $completedShipmentDetail)
    {
        $this->values['CompletedShipmentDetail'] = $completedShipmentDetail;
        return $this;
    }
}
