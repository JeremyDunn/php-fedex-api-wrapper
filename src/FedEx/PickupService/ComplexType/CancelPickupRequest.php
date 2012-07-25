<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data to cancel a shipment pickup request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CancelPickupRequest
    extends AbstractComplexType
{
    protected $_name = 'CancelPickupRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return CancelPickupRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return CancelPickupRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return CancelPickupRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return CancelPickupRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the FedEx operating company (transportation) that was sent the pickup that is being canceled.
     *
     * @param CarrierCodeType $CarrierCode
     * return CancelPickupRequest
     */
    public function setCarrierCode(\FedEx\PickupService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the pickup confirmation number that is being canceled. The pickup confirmation number was returned to the client when the pickup was requested.
     *
     * @param string $PickupConfirmationNumber
     * return CancelPickupRequest
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Identifies the scheduled date for the pickup that is being canceled. The scheduled date was provided by the client when the pickup was requested.
     *
     * @param date $ScheduledDate
     * return CancelPickupRequest
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->ScheduledDate = $scheduledDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $EndDate
     * return CancelPickupRequest
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;
        return $this;
    }
    
    /**
     * Identifies the FedEx location identifier responsible for processing the package pickup that is being canceled. The FedEx location identifier was returned to the client when the pickup was requested. Required for Express service type.
     *
     * @param string $Location
     * return CancelPickupRequest
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Identifies comments the customer wants to convey to the FedEx courier regarding the package pickup.
     *
     * @param string $Remarks
     * return CancelPickupRequest
     */
    public function setRemarks($remarks)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    
    /**
     * 
     *
     * @param Payment $ShippingChargesPayment
     * return CancelPickupRequest
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    
    /**
     * The reason for canceling the pickup request.
     *
     * @param string $Reason
     * return CancelPickupRequest
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Identifies the name of the person that requested pickup cancellation.
     *
     * @param string $ContactName
     * return CancelPickupRequest
     */
    public function setContactName($contactName)
    {
        $this->ContactName = $contactName;
        return $this;
    }
    
    /**
     * Identifies the phone number of the person that requested pickup cancellation.
     *
     * @param string $PhoneNumber
     * return CancelPickupRequest
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Identifies the phone extension of the person that requested pickup cancellation.
     *
     * @param string $PhoneExtension
     * return CancelPickupRequest
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    

    
}