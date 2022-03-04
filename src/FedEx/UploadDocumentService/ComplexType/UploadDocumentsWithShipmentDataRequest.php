<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsWithShipmentDataRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\UploadDocumentService\SimpleType\RequestedShippingDocumentType|string[] $ShippingDocumentTypesToProduce
 * @property CustomerProvidedImage[] $CustomerProvidedImages
 * @property RequestedShipment $RequestedShipment
 * @property CompletedShipmentDetail $CompletedShipmentDetail
 * @property UploadDocumentDetail[] $Documents
 * @property UploadDocumentReferenceDetail[] $DocumentReferences

 */
class UploadDocumentsWithShipmentDataRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentsWithShipmentDataRequest';

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
     * Specifies which type of document(s) should be produced by FedEx (using the shipment data below) and forwarded along with any customer-provided documents or references.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\RequestedShippingDocumentType[]|string[] $shippingDocumentTypesToProduce
     * @return $this
     */
    public function setShippingDocumentTypesToProduce(array $shippingDocumentTypesToProduce)
    {
        $this->values['ShippingDocumentTypesToProduce'] = $shippingDocumentTypesToProduce;
        return $this;
    }

    /**
     * Contains images provided by customer for inclusion on FedEx-produced documents.
     *
     * @param CustomerProvidedImage[] $customerProvidedImages
     * @return $this
     */
    public function setCustomerProvidedImages(array $customerProvidedImages)
    {
        $this->values['CustomerProvidedImages'] = $customerProvidedImages;
        return $this;
    }

    /**
     * Set RequestedShipment
     *
     * @param RequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->values['RequestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Set CompletedShipmentDetail
     *
     * @param CompletedShipmentDetail $completedShipmentDetail
     * @return $this
     */
    public function setCompletedShipmentDetail(CompletedShipmentDetail $completedShipmentDetail)
    {
        $this->values['CompletedShipmentDetail'] = $completedShipmentDetail;
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

    /**
     * Set DocumentReferences
     *
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * @return $this
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->values['DocumentReferences'] = $documentReferences;
        return $this;
    }
}
