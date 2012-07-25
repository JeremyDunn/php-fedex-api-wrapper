<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class UploadDocumentDetail
    extends AbstractComplexType
{
    protected $_name = 'UploadDocumentDetail';

    /**
     * 
     *
     * @param nonNegativeInteger $LineNumber
     * return UploadDocumentDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CustomerReference
     * return UploadDocumentDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentProducerType $DocumentProducer
     * return UploadDocumentDetail
     */
    public function setDocumentProducer(\FedEx\RateService\SimpleType\UploadDocumentProducerType $documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentType $DocumentType
     * return UploadDocumentDetail
     */
    public function setDocumentType(\FedEx\RateService\SimpleType\UploadDocumentType $documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $FileName
     * return UploadDocumentDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $DocumentContent
     * return UploadDocumentDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    

    
}