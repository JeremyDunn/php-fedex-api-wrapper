<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes an approved container used to package dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DangerousGoodsContainer
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DangerousGoodsContainer';

    /**
     * Indicates whether there are additional inner receptacles within this container.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousContainerPackingType|string $packingType
     * return DangerousGoodsContainer
     */
    public function setPackingType($packingType)
    {
        $this->PackingType = $packingType;
        return $this;
    }
    
    /**
     * Indicates the type of this dangerous goods container, as specified by the IATA packing instructions. For example, steel cylinder, fiberboard box, plastic jerrican and steel drum.
     *
     * @param string $containerType
     * return DangerousGoodsContainer
     */
    public function setContainerType($containerType)
    {
        $this->ContainerType = $containerType;
        return $this;
    }
    
    /**
     * Indicates the packaging type of the container used to package the radioactive materials.
     *
     * @param \FedEx\ShipService\SimpleType\RadioactiveContainerClassType|string $radioactiveContainerClass
     * return DangerousGoodsContainer
     */
    public function setRadioactiveContainerClass($radioactiveContainerClass)
    {
        $this->RadioactiveContainerClass = $radioactiveContainerClass;
        return $this;
    }
    
    /**
     * Indicates the number of occurrences of this container with identical dangerous goods configuration.
     *
     * @param nonNegativeInteger $numberOfContainers
     * return DangerousGoodsContainer
     */
    public function setNumberOfContainers($numberOfContainers)
    {
        $this->NumberOfContainers = $numberOfContainers;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current container.
     *
     * @param HazardousCommodityContent[] $hazardousCommodities
     * return DangerousGoodsContainer
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    

    
}