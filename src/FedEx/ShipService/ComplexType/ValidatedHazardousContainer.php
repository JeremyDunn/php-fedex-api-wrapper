<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the concept of a container used to package dangerous goods commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ValidatedHazardousContainer
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ValidatedHazardousContainer';

    /**
     * Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.
     *
     * @param decimal $qValue
     * return ValidatedHazardousContainer
     */
    public function setQValue($qValue)
    {
        $this->QValue = $qValue;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @param ValidatedHazardousCommodityContent[] $hazardousCommodities
     * return ValidatedHazardousContainer
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    

    
}