<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Electronic Trade document references used with the ETD special service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EtdDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EtdDetail';

    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param RequestedShippingDocumentType[] $requestedDocumentCopies
     * @return EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies)
    {
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    
    /**
     * Returns Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @return RequestedShippingDocumentType[]
     */
    public function getRequestedDocumentCopies()
    {
        return $this->RequestedDocumentCopies;
    }
    
    /**
     * Currently not supported.
     *
     * @param UploadDocumentDetail[] $documents
     * @return EtdDetail
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    
    /**
     * Returns Currently not supported.
     *
     * @return UploadDocumentDetail[]
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    
    /**
     * Set DocumentReferences
     *
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * @return EtdDetail
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    
    /**
     * Returns Set DocumentReferences
     *
     * @return UploadDocumentReferenceDetail[]
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    

    
}