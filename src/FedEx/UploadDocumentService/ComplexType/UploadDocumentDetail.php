<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property int $LineNumber
 * @property string $CustomerReference
 * @property \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string $DocumentType
 * @property string $FileName
 * @property string $DocumentContent
 * @property string $ExpirationDate

 */
class UploadDocumentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentDetail';

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
     * Set DocumentType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->values['DocumentType'] = $documentType;
        return $this;
    }

    /**
     * Set FileName
     *
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->values['FileName'] = $fileName;
        return $this;
    }

    /**
     * Set DocumentContent
     *
     * @param string $documentContent
     * @return $this
     */
    public function setDocumentContent($documentContent)
    {
        $this->values['DocumentContent'] = $documentContent;
        return $this;
    }

    /**
     * Specifies the date until which the document is available
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }
}
