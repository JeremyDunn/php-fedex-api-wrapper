<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Signature Proof Of Delivery Letter request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class SignatureProofOfDeliveryLetterRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureProofOfDeliveryLetterRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @param TransactionDetail $transactionDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * The version of the request being used.
     *
     * @param VersionId $version
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $qualifiedTrackingNumber
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setQualifiedTrackingNumber(QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    
    /**
     * Additional customer-supplied text to be added to the body of the letter.
     *
     * @param string $additionalComments
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     * Identifies the set of SPOD image types.
     *
     * @param \FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType|string $letterFormat
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setLetterFormat($letterFormat)
    {
        $this->LetterFormat = $letterFormat;
        return $this;
    }
    
    /**
     * If provided this information will be print on the letter.
     *
     * @param ContactAndAddress $consignee
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setConsignee(ContactAndAddress $consignee)
    {
        $this->Consignee = $consignee;
        return $this;
    }
    

    
}