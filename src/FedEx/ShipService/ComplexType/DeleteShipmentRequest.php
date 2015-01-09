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
     * @return DeleteShipmentRequest
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
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return DeleteShipmentRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return DeleteShipmentRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * @return DeleteShipmentRequest
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
     * The timestamp of the shipment request.
     *
     * @param dateTime $shipTimestamp
     * @return DeleteShipmentRequest
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Returns The timestamp of the shipment request.
     *
     * @return dateTime
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    
    /**
     * Identifies the FedEx tracking number of the package being cancelled.
     *
     * @param TrackingId $trackingId
     * @return DeleteShipmentRequest
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx tracking number of the package being cancelled.
     *
     * @return TrackingId
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    
    /**
     * Determines the type of deletion to be performed in relation to package level vs shipment level.
     *
     * @param \FedEx\ShipService\SimpleType\DeletionControlType|string $deletionControl
     * @return DeleteShipmentRequest
     */
    public function setDeletionControl($deletionControl)
    {
        $this->DeletionControl = $deletionControl;
        return $this;
    }
    
    /**
     * Returns Determines the type of deletion to be performed in relation to package level vs shipment level.
     *
     * @return \FedEx\ShipService\SimpleType\DeletionControlType|string
     */
    public function getDeletionControl()
    {
        return $this->DeletionControl;
    }
    

    
}