<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ConfirmConsolidationRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property AsynchronousProcessingOptionsRequested $AsynchronousProcessingOptions
 * @property ConsolidationKey $ConsolidationKey
 * @property LabelSpecification $LabelSpecification
 * @property ShippingDocumentSpecification $ShippingDocumentSpecification
 * @property ConsolidationDocumentSpecification $ConsolidationDocumentSpecification
 * @property \FedEx\OpenShipService\SimpleType\RateRequestType|string[] $RateRequestTypes
 * @property \FedEx\OpenShipService\SimpleType\EdtRequestType|string $EdtRequestType

 */
class ConfirmConsolidationRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConfirmConsolidationRequest';

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
     * This is used to specify processing options related to synchronous or asynchronous processing.
     *
     * @param AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return $this
     */
    public function setAsynchronousProcessingOptions(AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions)
    {
        $this->values['AsynchronousProcessingOptions'] = $asynchronousProcessingOptions;
        return $this;
    }

    /**
     * Identifies the consolidation containing the open shipment which contains the desired package.
     *
     * @param ConsolidationKey $consolidationKey
     * @return $this
     */
    public function setConsolidationKey(ConsolidationKey $consolidationKey)
    {
        $this->values['ConsolidationKey'] = $consolidationKey;
        return $this;
    }

    /**
     * Set LabelSpecification
     *
     * @param LabelSpecification $labelSpecification
     * @return $this
     */
    public function setLabelSpecification(LabelSpecification $labelSpecification)
    {
        $this->values['LabelSpecification'] = $labelSpecification;
        return $this;
    }

    /**
     * Contains data used to create additional (non-label) shipping documents.
     *
     * @param ShippingDocumentSpecification $shippingDocumentSpecification
     * @return $this
     */
    public function setShippingDocumentSpecification(ShippingDocumentSpecification $shippingDocumentSpecification)
    {
        $this->values['ShippingDocumentSpecification'] = $shippingDocumentSpecification;
        return $this;
    }

    /**
     * Contains data used to create additional (non-label) consolidation documents.
     *
     * @param ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @return $this
     */
    public function setConsolidationDocumentSpecification(ConsolidationDocumentSpecification $consolidationDocumentSpecification)
    {
        $this->values['ConsolidationDocumentSpecification'] = $consolidationDocumentSpecification;
        return $this;
    }

    /**
     * Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     *
     * @param \FedEx\OpenShipService\SimpleType\RateRequestType[]|string[] $rateRequestTypes
     * @return $this
     */
    public function setRateRequestTypes(array $rateRequestTypes)
    {
        $this->values['RateRequestTypes'] = $rateRequestTypes;
        return $this;
    }

    /**
     * Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     *
     * @param \FedEx\OpenShipService\SimpleType\EdtRequestType|string $edtRequestType
     * @return $this
     */
    public function setEdtRequestType($edtRequestType)
    {
        $this->values['EdtRequestType'] = $edtRequestType;
        return $this;
    }
}
