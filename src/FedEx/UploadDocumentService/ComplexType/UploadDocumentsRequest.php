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
 * @property string $OriginStateOrProvinceCode
 * @property string $OriginPostalCode
 * @property string $OriginLocationId
 * @property string $DestinationCountryCode
 * @property string $DestinationStateOrProvinceCode
 * @property string $DestinationPostalCode
 * @property string $DestinationLocationId
 * @property string $FolderId
 * @property string $ShipTimestamp
 * @property \FedEx\UploadDocumentService\SimpleType\CarrierCodeType|string $CarrierCode
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
     * FOR FEDEX INTERNAL USE ONLY: This is used to identify the origin state or province code.
     *
     * @param string $originStateOrProvinceCode
     * @return $this
     */
    public function setOriginStateOrProvinceCode($originStateOrProvinceCode)
    {
        $this->values['OriginStateOrProvinceCode'] = $originStateOrProvinceCode;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: This is used to identify the origin postal code.
     *
     * @param string $originPostalCode
     * @return $this
     */
    public function setOriginPostalCode($originPostalCode)
    {
        $this->values['OriginPostalCode'] = $originPostalCode;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: This field is used to identify the origin location ID by the offline automation platforms for a post-shipment upload.
     *
     * @param string $originLocationId
     * @return $this
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->values['OriginLocationId'] = $originLocationId;
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
     * FOR FEDEX INTERNAL USE ONLY: This is used to identify the destination state or province code.
     *
     * @param string $destinationStateOrProvinceCode
     * @return $this
     */
    public function setDestinationStateOrProvinceCode($destinationStateOrProvinceCode)
    {
        $this->values['DestinationStateOrProvinceCode'] = $destinationStateOrProvinceCode;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: This is used to identify the destination postal code.
     *
     * @param string $destinationPostalCode
     * @return $this
     */
    public function setDestinationPostalCode($destinationPostalCode)
    {
        $this->values['DestinationPostalCode'] = $destinationPostalCode;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: This is used to identify the destination location id.
     *
     * @param string $destinationLocationId
     * @return $this
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->values['DestinationLocationId'] = $destinationLocationId;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: Folder into which the uploaded documents will be stored.
     *
     * @param string $folderId
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->values['FolderId'] = $folderId;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: This field is used to identify the shipping timestamp by the offline automation platforms for a post-shipment upload.
     *
     * @param string $shipTimestamp
     * @return $this
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->values['ShipTimestamp'] = $shipTimestamp;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: This field is used to identify the origin location ID by the offline automation platforms for a post-shipment upload.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
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
