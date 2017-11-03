<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property UploadDocumentsProcessingOptionsRequested $ProcessingOptions
 * @property string $OriginCountryCode
 * @property string $DestinationCountryCode
 * @property \FedEx\UploadDocumentService\SimpleType\DocumentUsageType|string $Usage
 * @property UploadDocumentDetail[] $Documents

 */
class UploadDocumentsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentsRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Set ProcessingOptions
     *
     * @param UploadDocumentsProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(UploadDocumentsProcessingOptionsRequested $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Set OriginCountryCode
     *
     * @param string $originCountryCode
     * @return $this
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->values['OriginCountryCode'] = $originCountryCode;
        return $this;
    }

    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * @return $this
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->values['DestinationCountryCode'] = $destinationCountryCode;
        return $this;
    }

    /**
     * Specifies the intent or the usage of the documents being uploaded. This provides details about how the documents are relevant to the current transaction.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\DocumentUsageType|string $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->values['Usage'] = $usage;
        return $this;
    }

    /**
     * Set Documents
     *
     * @param UploadDocumentDetail[] $documents
     * @return $this
     */
    public function setDocuments(array $documents)
    {
        $this->values['Documents'] = $documents;
        return $this;
    }
}
