<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocumentRequirementsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\RequiredDocumentType|string[] $RequiredDocuments
 * @property DocumentGenerationDetail[] $GenerationDetails
 * @property \FedEx\ShipService\SimpleType\EnterpriseDocumentType|string[] $ProhibitedDocuments

 */
class DocumentRequirementsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocumentRequirementsDetail';

    /**
     * Set RequiredDocuments
     *
     * @param \FedEx\ShipService\SimpleType\RequiredDocumentType[]|string[] $requiredDocuments
     * @return $this
     */
    public function setRequiredDocuments(array $requiredDocuments)
    {
        $this->values['RequiredDocuments'] = $requiredDocuments;
        return $this;
    }

    /**
     * Set GenerationDetails
     *
     * @param DocumentGenerationDetail[] $generationDetails
     * @return $this
     */
    public function setGenerationDetails(array $generationDetails)
    {
        $this->values['GenerationDetails'] = $generationDetails;
        return $this;
    }

    /**
     * Lists the documents that are not accepted by FedEx for this shipment.
     *
     * @param \FedEx\ShipService\SimpleType\EnterpriseDocumentType[]|string[] $prohibitedDocuments
     * @return $this
     */
    public function setProhibitedDocuments(array $prohibitedDocuments)
    {
        $this->values['ProhibitedDocuments'] = $prohibitedDocuments;
        return $this;
    }
}
