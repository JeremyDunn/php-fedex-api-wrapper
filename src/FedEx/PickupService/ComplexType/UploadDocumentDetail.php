<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class UploadDocumentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentDetail';

    /**
     * Set LineNumber
     *
     * @param nonNegativeInteger $lineNumber
     * return UploadDocumentDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * return UploadDocumentDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * Set DocumentProducer
     *
     * @param \FedEx\Pickup\SimpleType\UploadDocumentProducerType|string $documentProducer
     * return UploadDocumentDetail
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\Pickup\SimpleType\UploadDocumentType|string $documentType
     * return UploadDocumentDetail
     */
    public function setDocumentType($documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * Set FileName
     *
     * @param string $fileName
     * return UploadDocumentDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * Set DocumentContent
     *
     * @param base64Binary $documentContent
     * return UploadDocumentDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    

    
}