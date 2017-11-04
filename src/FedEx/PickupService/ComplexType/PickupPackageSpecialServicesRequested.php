<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupPackageSpecialServicesRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\PackageSpecialServiceType|string[] $SpecialServiceTypes
 * @property PickupDangerousGoodsDetail $DangerousGoodsDetail
 * @property PriorityAlertDetail $PriorityAlertDetail

 */
class PickupPackageSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPackageSpecialServicesRequested';

    /**
     * Set SpecialServiceTypes
     *
     * @param \FedEx\PickupService\SimpleType\PackageSpecialServiceType[]|string[] $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['SpecialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * Set DangerousGoodsDetail
     *
     * @param PickupDangerousGoodsDetail $dangerousGoodsDetail
     * @return $this
     */
    public function setDangerousGoodsDetail(PickupDangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->values['DangerousGoodsDetail'] = $dangerousGoodsDetail;
        return $this;
    }

    /**
     * Set PriorityAlertDetail
     *
     * @param PriorityAlertDetail $priorityAlertDetail
     * @return $this
     */
    public function setPriorityAlertDetail(PriorityAlertDetail $priorityAlertDetail)
    {
        $this->values['PriorityAlertDetail'] = $priorityAlertDetail;
        return $this;
    }
}
