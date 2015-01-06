<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details needed to generate any label artifacts required due to regulatory requirements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RegulatoryLabelContentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RegulatoryLabelContentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\RegulatoryLabelType|string $type
     * @return RegulatoryLabelContentDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\RateService\SimpleType\RegulatoryLabelType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Specifies how the customer requested the regulatory label to be generated.
     *
     * @param CustomerSpecifiedLabelGenerationOptionType[] $generationOptions
     * @return RegulatoryLabelContentDetail
     */
    public function setGenerationOptions(array $generationOptions)
    {
        $this->GenerationOptions = $generationOptions;
        return $this;
    }
    
    /**
     * Returns Specifies how the customer requested the regulatory label to be generated.
     *
     * @return CustomerSpecifiedLabelGenerationOptionType[]
     */
    public function getGenerationOptions()
    {
        return $this->GenerationOptions;
    }
    

    
}