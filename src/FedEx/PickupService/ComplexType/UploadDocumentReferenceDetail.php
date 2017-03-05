<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property nonNegativeInteger $LineNumber
 * @property string $CustomerReference
 * @property \FedEx\Pickup\SimpleType\UploadDocumentProducerType|string $DocumentProducer
 * @property \FedEx\Pickup\SimpleType\UploadDocumentType|string $DocumentType
 * @property string $DocumentId
 * @property \FedEx\Pickup\SimpleType\UploadDocumentIdProducer|string $DocumentIdProducer

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
     * @param nonNegativeInteger $lineNumber
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
     * Set DocumentProducer
     *
     * @param \FedEx\Pickup\SimpleType\UploadDocumentProducerType|string $documentProducer
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
     * @param \FedEx\Pickup\SimpleType\UploadDocumentType|string $documentType
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
     * @param \FedEx\Pickup\SimpleType\UploadDocumentIdProducer|string $documentIdProducer
     * @return $this
     */
    public function setDocumentIdProducer($documentIdProducer)
    {
        $this->values['DocumentIdProducer'] = $documentIdProducer;
        return $this;
    }

    
}
