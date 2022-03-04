<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data to cancel a package pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\CourierDispatchService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property string $DispatchConfirmationNumber
 * @property string $ScheduledDate
 * @property string $Location
 * @property string $CourierRemarks

 */
class CancelCourierDispatchRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CancelCourierDispatchRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
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
     * The descriptive data identifying the client submitting the transaction.
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
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
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
     * Identifies the FedEx operating company (transportation) that was sent the courier dispatch that is being canceled.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Identifies the dispatch confirmation number that is being canceled. The dispatch confirmation number was returned to the client when the courier dispatch was requested.
     *
     * @param string $dispatchConfirmationNumber
     * @return $this
     */
    public function setDispatchConfirmationNumber($dispatchConfirmationNumber)
    {
        $this->values['DispatchConfirmationNumber'] = $dispatchConfirmationNumber;
        return $this;
    }

    /**
     * Identifies the scheduled date for the courier dispatch that is being canceled. The scheduled date was provided by the client when the courier dispatch was requested.
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
     * Identifies the FedEx location identifier responsible for dispatching the courier for package pickup that is being canceled. The FedEx location identifier was returned to the client when the courier dispatch was requested. Required for Express service type.
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
     * Identifies comments the customer wants to convey to the FedEx courier regarding the package pickup.
     *
     * @param string $courierRemarks
     * @return $this
     */
    public function setCourierRemarks($courierRemarks)
    {
        $this->values['CourierRemarks'] = $courierRemarks;
        return $this;
    }
}
