<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Signature Proof Of Delivery Letter request.
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
 * @property \FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType|string $LetterFormat
 * @property ContactAndAddress $Consignee

 */
class SignatureProofOfDeliveryLetterRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SignatureProofOfDeliveryLetterRequest';

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
     * Identifies the set of SPOD image types.
     *
     * @param \FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType|string $letterFormat
     * @return $this
     */
    public function setLetterFormat($letterFormat)
    {
        $this->values['LetterFormat'] = $letterFormat;
        return $this;
    }

    /**
     * If provided this information will be print on the letter.
     *
     * @param ContactAndAddress $consignee
     * @return $this
     */
    public function setConsignee(ContactAndAddress $consignee)
    {
        $this->values['Consignee'] = $consignee;
        return $this;
    }
}
