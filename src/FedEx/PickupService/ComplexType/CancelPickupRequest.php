<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CancelPickupRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property string $PickupConfirmationNumber
 * @property string $ScheduledDate
 * @property string $EndDate
 * @property string $Location
 * @property string $Remarks
 * @property Payment $ShippingChargesPayment
 * @property string $Reason
 * @property string $ContactName
 * @property string $PhoneNumber
 * @property string $PhoneExtension

 */
class CancelPickupRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CancelPickupRequest';

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
     * Set CarrierCode
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set PickupConfirmationNumber
     *
     * @param string $pickupConfirmationNumber
     * @return $this
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->values['PickupConfirmationNumber'] = $pickupConfirmationNumber;
        return $this;
    }

    /**
     * The local date which the pickup was originally scheduled to be picked up on. The date provided is the local to the client of the request. The date specification does not include any time zone designators.
     *
     * @param string $scheduledDate
     * @return $this
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->values['ScheduledDate'] = $scheduledDate;
        return $this;
    }

    /**
     * Set EndDate
     *
     * @param string $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->values['EndDate'] = $endDate;
        return $this;
    }

    /**
     * Set Location
     *
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['Location'] = $location;
        return $this;
    }

    /**
     * Set Remarks
     *
     * @param string $remarks
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->values['Remarks'] = $remarks;
        return $this;
    }

    /**
     * Set ShippingChargesPayment
     *
     * @param Payment $shippingChargesPayment
     * @return $this
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->values['ShippingChargesPayment'] = $shippingChargesPayment;
        return $this;
    }

    /**
     * The reason for canceling the pickup request.
     *
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->values['Reason'] = $reason;
        return $this;
    }

    /**
     * Identifies the name of the person that requested pickup cancellation.
     *
     * @param string $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->values['ContactName'] = $contactName;
        return $this;
    }

    /**
     * Identifies the phone number of the person that requested pickup cancellation.
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['PhoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Identifies the phone extension of the person that requested pickup cancellation.
     *
     * @param string $phoneExtension
     * @return $this
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->values['PhoneExtension'] = $phoneExtension;
        return $this;
    }
}
