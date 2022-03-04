<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadedDangerousGoodsContainerGroup
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property int $NumberOfIdenticalContainers
 * @property UploadedDangerousGoodsContainer $Container

 */
class UploadedDangerousGoodsContainerGroup extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadedDangerousGoodsContainerGroup';

    /**
     * Indicates the number of identical containers in this group.
     *
     * @param int $numberOfIdenticalContainers
     * @return $this
     */
    public function setNumberOfIdenticalContainers($numberOfIdenticalContainers)
    {
        $this->values['NumberOfIdenticalContainers'] = $numberOfIdenticalContainers;
        return $this;
    }

    /**
     * This specifies the commodities in the container. A container may also be known as a dangerous goods package, but this is not necessarily the same as the 'package' or handling unit that a courier transports for shipping. If the handling unit is an OVERPACK, then this container is inside the handling unit.
     *
     * @param UploadedDangerousGoodsContainer $container
     * @return $this
     */
    public function setContainer(UploadedDangerousGoodsContainer $container)
    {
        $this->values['Container'] = $container;
        return $this;
    }
}
