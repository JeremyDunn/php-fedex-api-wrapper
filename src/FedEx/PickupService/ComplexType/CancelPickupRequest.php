<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data to cancel a shipment pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CancelPickupRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CancelPickupRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return CancelPickupRequest
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
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return CancelPickupRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return CancelPickupRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return CancelPickupRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Identifies the FedEx operating company (transportation) that was sent the pickup that is being canceled.
     *
     * @param \FedEx\Pickup\SimpleType\CarrierCodeType|string $carrierCode
     * @return CancelPickupRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx operating company (transportation) that was sent the pickup that is being canceled.
     *
     * @return \FedEx\Pickup\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * Identifies the pickup confirmation number that is being canceled. The pickup confirmation number was returned to the client when the pickup was requested.
     *
     * @param string $pickupConfirmationNumber
     * @return CancelPickupRequest
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the pickup confirmation number that is being canceled. The pickup confirmation number was returned to the client when the pickup was requested.
     *
     * @return string
     */
    public function getPickupConfirmationNumber()
    {
        return $this->PickupConfirmationNumber;
    }
    
    /**
     * Identifies the scheduled date for the pickup that is being canceled. The scheduled date was provided by the client when the pickup was requested.
     *
     * @param date $scheduledDate
     * @return CancelPickupRequest
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->ScheduledDate = $scheduledDate;
        return $this;
    }
    
    /**
     * Returns Identifies the scheduled date for the pickup that is being canceled. The scheduled date was provided by the client when the pickup was requested.
     *
     * @return date
     */
    public function getScheduledDate()
    {
        return $this->ScheduledDate;
    }
    
    /**
     * Set EndDate
     *
     * @param date $endDate
     * @return CancelPickupRequest
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;
        return $this;
    }
    
    /**
     * Returns Set EndDate
     *
     * @return date
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    
    /**
     * Identifies the FedEx location identifier responsible for processing the package pickup that is being canceled. The FedEx location identifier was returned to the client when the pickup was requested. Required for Express service type.
     *
     * @param string $location
     * @return CancelPickupRequest
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx location identifier responsible for processing the package pickup that is being canceled. The FedEx location identifier was returned to the client when the pickup was requested. Required for Express service type.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }
    
    /**
     * Identifies comments the customer wants to convey to the FedEx courier regarding the package pickup.
     *
     * @param string $remarks
     * @return CancelPickupRequest
     */
    public function setRemarks($remarks)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    
    /**
     * Returns Identifies comments the customer wants to convey to the FedEx courier regarding the package pickup.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    
    /**
     * Set ShippingChargesPayment
     *
     * @param Payment $shippingChargesPayment
     * @return CancelPickupRequest
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    
    /**
     * Returns Set ShippingChargesPayment
     *
     * @return Payment
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    
    /**
     * The reason for canceling the pickup request.
     *
     * @param string $reason
     * @return CancelPickupRequest
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Returns The reason for canceling the pickup request.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }
    
    /**
     * Identifies the name of the person that requested pickup cancellation.
     *
     * @param string $contactName
     * @return CancelPickupRequest
     */
    public function setContactName($contactName)
    {
        $this->ContactName = $contactName;
        return $this;
    }
    
    /**
     * Returns Identifies the name of the person that requested pickup cancellation.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    
    /**
     * Identifies the phone number of the person that requested pickup cancellation.
     *
     * @param string $phoneNumber
     * @return CancelPickupRequest
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the phone number of the person that requested pickup cancellation.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    
    /**
     * Identifies the phone extension of the person that requested pickup cancellation.
     *
     * @param string $phoneExtension
     * @return CancelPickupRequest
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Returns Identifies the phone extension of the person that requested pickup cancellation.
     *
     * @return string
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }
    

    
}