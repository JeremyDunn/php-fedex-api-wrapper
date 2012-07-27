<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Signature Proof Of Delivery Fax request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryFaxRequest
    extends AbstractComplexType
{
    protected $_name = 'SignatureProofOfDeliveryFaxRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @param TransactionDetail $TransactionDetail
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * The version of the request being used.
     *
     * @param VersionId $Version
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $QualifiedTrackingNumber
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setQualifiedTrackingNumber(QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    
    /**
     * Additional customer-supplied text to be added to the body of the letter.
     *
     * @param string $AdditionalComments
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     * Contact and address information about the person requesting the fax to be sent.
     *
     * @param ContactAndAddress $FaxSender
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender(ContactAndAddress $faxSender)
    {
        $this->FaxSender = $faxSender;
        return $this;
    }
    
    /**
     * Contact and address information, including the fax number, about the person to receive the fax.
     *
     * @param ContactAndAddress $FaxRecipient
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient(ContactAndAddress $faxRecipient)
    {
        $this->FaxRecipient = $faxRecipient;
        return $this;
    }
    

    
}