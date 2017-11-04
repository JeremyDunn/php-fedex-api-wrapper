<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseWithDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\CloseService\SimpleType\CloseActionType|string $ActionType
 * @property CloseWithDocumentsProcessingOptionsRequested $ProcessingOptions
 * @property \FedEx\CloseService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property string $ShippingCycle
 * @property string $ReprintCloseDate
 * @property CloseManifestReferenceDetail $ManifestReferenceDetail
 * @property CloseSmartPostDetail $SmartPostDetail
 * @property CloseDocumentSpecification $CloseDocumentSpecification

 */
class CloseWithDocumentsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CloseWithDocumentsRequest';

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
     * Set ActionType
     *
     * @param \FedEx\CloseService\SimpleType\CloseActionType|string $actionType
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->values['ActionType'] = $actionType;
        return $this;
    }

    /**
     * Set ProcessingOptions
     *
     * @param CloseWithDocumentsProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(CloseWithDocumentsProcessingOptionsRequested $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\CloseService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set ShippingCycle
     *
     * @param string $shippingCycle
     * @return $this
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->values['ShippingCycle'] = $shippingCycle;
        return $this;
    }

    /**
     * Set ReprintCloseDate
     *
     * @param string $reprintCloseDate
     * @return $this
     */
    public function setReprintCloseDate($reprintCloseDate)
    {
        $this->values['ReprintCloseDate'] = $reprintCloseDate;
        return $this;
    }

    /**
     * Set ManifestReferenceDetail
     *
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return $this
     */
    public function setManifestReferenceDetail(CloseManifestReferenceDetail $manifestReferenceDetail)
    {
        $this->values['ManifestReferenceDetail'] = $manifestReferenceDetail;
        return $this;
    }

    /**
     * Set SmartPostDetail
     *
     * @param CloseSmartPostDetail $smartPostDetail
     * @return $this
     */
    public function setSmartPostDetail(CloseSmartPostDetail $smartPostDetail)
    {
        $this->values['SmartPostDetail'] = $smartPostDetail;
        return $this;
    }

    /**
     * Set CloseDocumentSpecification
     *
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * @return $this
     */
    public function setCloseDocumentSpecification(CloseDocumentSpecification $closeDocumentSpecification)
    {
        $this->values['CloseDocumentSpecification'] = $closeDocumentSpecification;
        return $this;
    }
}
