<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about documents that are recommended to be included with the shipment for ease of shipment processing and transportation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\RecommendedDocumentType|string[] $Types

 */
class RecommendedDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RecommendedDocumentSpecification';

    /**
     * Set Types
     *
     * @param \FedEx\OpenShipService\SimpleType\RecommendedDocumentType[]|string[] $types
     * @return $this
     */
    public function setTypes(array $types)
    {
        $this->values['Types'] = $types;
        return $this;
    }
}
