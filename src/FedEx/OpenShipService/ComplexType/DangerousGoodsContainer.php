<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes an approved container used to package dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\HazardousContainerPackingType|string $PackingType
 * @property string $ContainerType
 * @property \FedEx\OpenShipService\SimpleType\RadioactiveContainerClassType|string $RadioactiveContainerClass
 * @property int $NumberOfContainers
 * @property HazardousCommodityContent[] $HazardousCommodities

 */
class DangerousGoodsContainer extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsContainer';

    /**
     * Indicates whether there are additional inner receptacles within this container.
     *
     * @param \FedEx\OpenShipService\SimpleType\HazardousContainerPackingType|string $packingType
     * @return $this
     */
    public function setPackingType($packingType)
    {
        $this->values['PackingType'] = $packingType;
        return $this;
    }

    /**
     * Indicates the type of this dangerous goods container, as specified by the IATA packing instructions. For example, steel cylinder, fiberboard box, plastic jerrican and steel drum.
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
     * Indicates the packaging type of the container used to package the radioactive materials.
     *
     * @param \FedEx\OpenShipService\SimpleType\RadioactiveContainerClassType|string $radioactiveContainerClass
     * @return $this
     */
    public function setRadioactiveContainerClass($radioactiveContainerClass)
    {
        $this->values['RadioactiveContainerClass'] = $radioactiveContainerClass;
        return $this;
    }

    /**
     * Indicates the number of occurrences of this container with identical dangerous goods configuration.
     *
     * @param int $numberOfContainers
     * @return $this
     */
    public function setNumberOfContainers($numberOfContainers)
    {
        $this->values['NumberOfContainers'] = $numberOfContainers;
        return $this;
    }

    /**
     * Documents the kinds and quantities of all hazardous commodities in the current container.
     *
     * @param HazardousCommodityContent[] $hazardousCommodities
     * @return $this
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->values['HazardousCommodities'] = $hazardousCommodities;
        return $this;
    }
}
