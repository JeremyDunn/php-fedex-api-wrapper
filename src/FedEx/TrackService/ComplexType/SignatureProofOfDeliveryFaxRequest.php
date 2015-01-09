<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Signature Proof Of Delivery Fax request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class SignatureProofOfDeliveryFaxRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureProofOfDeliveryFaxRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @param TransactionDetail $transactionDetail
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * The version of the request being used.
     *
     * @param VersionId $version
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns The version of the request being used.
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setQualifiedTrackingNumber(QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    
    /**
     * Returns Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @return QualifiedTrackingNumber
     */
    public function getQualifiedTrackingNumber()
    {
        return $this->QualifiedTrackingNumber;
    }
    
    /**
     * Additional customer-supplied text to be added to the body of the letter.
     *
     * @param string $additionalComments
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     * Returns Additional customer-supplied text to be added to the body of the letter.
     *
     * @return string
     */
    public function getAdditionalComments()
    {
        return $this->AdditionalComments;
    }
    
    /**
     * Contact and address information about the person requesting the fax to be sent.
     *
     * @param ContactAndAddress $faxSender
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender(ContactAndAddress $faxSender)
    {
        $this->FaxSender = $faxSender;
        return $this;
    }
    
    /**
     * Returns Contact and address information about the person requesting the fax to be sent.
     *
     * @return ContactAndAddress
     */
    public function getFaxSender()
    {
        return $this->FaxSender;
    }
    
    /**
     * Contact and address information, including the fax number, about the person to receive the fax.
     *
     * @param ContactAndAddress $faxRecipient
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient(ContactAndAddress $faxRecipient)
    {
        $this->FaxRecipient = $faxRecipient;
        return $this;
    }
    
    /**
     * Returns Contact and address information, including the fax number, about the person to receive the fax.
     *
     * @return ContactAndAddress
     */
    public function getFaxRecipient()
    {
        return $this->FaxRecipient;
    }
    

    
}