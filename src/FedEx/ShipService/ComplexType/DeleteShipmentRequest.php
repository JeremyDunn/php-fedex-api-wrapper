<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data sent to FedEx by a customer in order to delete a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DeleteShipmentRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DeleteShipmentRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return DeleteShipmentRequest
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
     * return DeleteShipmentRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return DeleteShipmentRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * return DeleteShipmentRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The timestamp of the shipment request.
     *
     * @param dateTime $shipTimestamp
     * return DeleteShipmentRequest
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Identifies the FedEx tracking number of the package being cancelled.
     *
     * @param TrackingId $trackingId
     * return DeleteShipmentRequest
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * Determines the type of deletion to be performed in relation to package level vs shipment level.
     *
     * @param \FedEx\ShipService\SimpleType\DeletionControlType|string $deletionControl
     * return DeleteShipmentRequest
     */
    public function setDeletionControl($deletionControl)
    {
        $this->DeletionControl = $deletionControl;
        return $this;
    }
    

    
}