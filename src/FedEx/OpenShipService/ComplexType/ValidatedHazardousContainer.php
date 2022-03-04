<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the concept of a container used to package dangerous goods commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property float $QValue
 * @property ValidatedHazardousCommodityContent[] $HazardousCommodities

 */
class ValidatedHazardousContainer extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ValidatedHazardousContainer';

    /**
     * Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.
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
     * Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @param ValidatedHazardousCommodityContent[] $hazardousCommodities
     * @return $this
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->values['HazardousCommodities'] = $hazardousCommodities;
        return $this;
    }
}
