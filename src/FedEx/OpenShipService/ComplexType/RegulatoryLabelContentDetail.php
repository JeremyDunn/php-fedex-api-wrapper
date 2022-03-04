<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details needed to generate any label artifacts required due to regulatory requirements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\RegulatoryLabelType|string $Type
 * @property \FedEx\OpenShipService\SimpleType\CustomerSpecifiedLabelGenerationOptionType|string[] $GenerationOptions

 */
class RegulatoryLabelContentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RegulatoryLabelContentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\OpenShipService\SimpleType\RegulatoryLabelType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Specifies how the customer requested the regulatory label to be generated.
     *
     * @param \FedEx\OpenShipService\SimpleType\CustomerSpecifiedLabelGenerationOptionType[]|string[] $generationOptions
     * @return $this
     */
    public function setGenerationOptions(array $generationOptions)
    {
        $this->values['GenerationOptions'] = $generationOptions;
        return $this;
    }
}
