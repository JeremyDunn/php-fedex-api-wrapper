<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property int $LineNumber
 * @property string $CustomerReference
 * @property string $Description
 * @property \FedEx\OpenShipService\SimpleType\UploadDocumentProducerType|string $DocumentProducer
 * @property \FedEx\OpenShipService\SimpleType\UploadDocumentType|string $DocumentType
 * @property string $DocumentId
 * @property \FedEx\OpenShipService\SimpleType\UploadDocumentIdProducer|string $DocumentIdProducer

 */
class UploadDocumentReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentReferenceDetail';

    /**
     * Set LineNumber
     *
     * @param int $lineNumber
     * @return $this
     */
    public function setLineNumber($lineNumber)
    {
        $this->values['LineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->values['CustomerReference'] = $customerReference;
        return $this;
    }

    /**
     * Description of the uploaded document.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set DocumentProducer
     *
     * @param \FedEx\OpenShipService\SimpleType\UploadDocumentProducerType|string $documentProducer
     * @return $this
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->values['DocumentProducer'] = $documentProducer;
        return $this;
    }

    /**
     * Set DocumentType
     *
     * @param \FedEx\OpenShipService\SimpleType\UploadDocumentType|string $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->values['DocumentType'] = $documentType;
        return $this;
    }

    /**
     * Set DocumentId
     *
     * @param string $documentId
     * @return $this
     */
    public function setDocumentId($documentId)
    {
        $this->values['DocumentId'] = $documentId;
        return $this;
    }

    /**
     * Set DocumentIdProducer
     *
     * @param \FedEx\OpenShipService\SimpleType\UploadDocumentIdProducer|string $documentIdProducer
     * @return $this
     */
    public function setDocumentIdProducer($documentIdProducer)
    {
        $this->values['DocumentIdProducer'] = $documentIdProducer;
        return $this;
    }
}
