<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Signature Proof Of Delivery Fax request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property QualifiedTrackingNumber $QualifiedTrackingNumber
 * @property string $AdditionalComments
 * @property ContactAndAddress $FaxSender
 * @property ContactAndAddress $FaxRecipient

 */
class SignatureProofOfDeliveryFaxRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SignatureProofOfDeliveryFaxRequest';

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
     * Descriptive data identifying the client submitting the transaction.
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
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
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
     * The version of the request being used.
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
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return $this
     */
    public function setQualifiedTrackingNumber(QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->values['QualifiedTrackingNumber'] = $qualifiedTrackingNumber;
        return $this;
    }

    /**
     * Additional customer-supplied text to be added to the body of the letter.
     *
     * @param string $additionalComments
     * @return $this
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->values['AdditionalComments'] = $additionalComments;
        return $this;
    }

    /**
     * Contact and address information about the person requesting the fax to be sent.
     *
     * @param ContactAndAddress $faxSender
     * @return $this
     */
    public function setFaxSender(ContactAndAddress $faxSender)
    {
        $this->values['FaxSender'] = $faxSender;
        return $this;
    }

    /**
     * Contact and address information, including the fax number, about the person to receive the fax.
     *
     * @param ContactAndAddress $faxRecipient
     * @return $this
     */
    public function setFaxRecipient(ContactAndAddress $faxRecipient)
    {
        $this->values['FaxRecipient'] = $faxRecipient;
        return $this;
    }
}
