<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about documents that are recommended to be included with the shipment for ease of shipment processing and transportation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RecommendedDocumentSpecification
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RecommendedDocumentSpecification';

    /**
     * Set Types
     *
     * @param RecommendedDocumentType[] $types
     * @return RecommendedDocumentSpecification
     */
    public function setTypes(array $types)
    {
        $this->Types = $types;
        return $this;
    }
    
    /**
     * Returns Set Types
     *
     * @return RecommendedDocumentType[]
     */
    public function getTypes()
    {
        return $this->Types;
    }
    

    
}