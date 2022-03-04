<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadedDangerousGoodsHandlingUnit
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsHandlingUnitAttributeType|string[] $Attributes
 * @property RadioactiveDangerousGoodsHandlingUnitDetail $RadioactiveDetail
 * @property UploadedDangerousGoodsContainerGroup[] $ContainerGroups

 */
class UploadedDangerousGoodsHandlingUnit extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadedDangerousGoodsHandlingUnit';

    /**
     * Set Attributes
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsHandlingUnitAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Specifies the radioactive information required for a handling unit.
     *
     * @param RadioactiveDangerousGoodsHandlingUnitDetail $radioactiveDetail
     * @return $this
     */
    public function setRadioactiveDetail(RadioactiveDangerousGoodsHandlingUnitDetail $radioactiveDetail)
    {
        $this->values['RadioactiveDetail'] = $radioactiveDetail;
        return $this;
    }

    /**
     * A container group is used to specify a single dangerous goods container or specify a group of identical dangerous goods containers. A dangerous goods container may also be known as a dangerous goods package. The term 'package' is not necessarily the same concept as a requested package line item in the shipping domain.
     *
     * @param UploadedDangerousGoodsContainerGroup[] $containerGroups
     * @return $this
     */
    public function setContainerGroups(array $containerGroups)
    {
        $this->values['ContainerGroups'] = $containerGroups;
        return $this;
    }
}
