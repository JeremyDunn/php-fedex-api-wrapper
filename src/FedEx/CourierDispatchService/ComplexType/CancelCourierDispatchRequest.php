<?php
namespace FedEx\CourierDispatchService\ComplexType;

/**
 * The descriptive data to cancel a package pickup request.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CancelCourierDispatchRequest
    extends AbstractComplexType
{
    protected $_name = 'CancelCourierDispatchRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return CancelCourierDispatchRequest
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
     * return CancelCourierDispatchRequest
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
     * return CancelCourierDispatchRequest
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
     * return CancelCourierDispatchRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the FedEx operating company (transportation) that was sent the courier dispatch that is being canceled.
     *
     * @param CarrierCodeType $CarrierCode
     * return CancelCourierDispatchRequest
     */
    public function setCarrierCode(\FedEx\CourierDispatchService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the dispatch confirmation number that is being canceled. The dispatch confirmation number was returned to the client when the courier dispatch was requested.
     *
     * @param string $DispatchConfirmationNumber
     * return CancelCourierDispatchRequest
     */
    public function setDispatchConfirmationNumber($dispatchConfirmationNumber)
    {
        $this->DispatchConfirmationNumber = $dispatchConfirmationNumber;
        return $this;
    }
    
    /**
     * Identifies the scheduled date for the courier dispatch that is being canceled. The scheduled date was provided by the client when the courier dispatch was requested.
     *
     * @param date $ScheduledDate
     * return CancelCourierDispatchRequest
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->ScheduledDate = $scheduledDate;
        return $this;
    }
    
    /**
     * Identifies the FedEx location identifier responsible for dispatching the courier for package pickup that is being canceled. The FedEx location identifier was returned to the client when the courier dispatch was requested. Required for Express service type.
     *
     * @param string $Location
     * return CancelCourierDispatchRequest
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Identifies comments the customer wants to convey to the FedEx courier regarding the package pickup.
     *
     * @param string $CourierRemarks
     * return CancelCourierDispatchRequest
     */
    public function setCourierRemarks($courierRemarks)
    {
        $this->CourierRemarks = $courierRemarks;
        return $this;
    }
    

    
}