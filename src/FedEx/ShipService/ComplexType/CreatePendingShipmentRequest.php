<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Create Pending Shipment Request
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CreatePendingShipmentRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreatePendingShipmentRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return CreatePendingShipmentRequest
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
     * @return CreatePendingShipmentRequest
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
     * @return CreatePendingShipmentRequest
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
     * @return CreatePendingShipmentRequest
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
     * Descriptive data about the shipment being sent by the requestor.
     *
     * @param RequestedShipment $requestedShipment
     * @return CreatePendingShipmentRequest
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
    
    /**
     * Returns Descriptive data about the shipment being sent by the requestor.
     *
     * @return RequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    

    
}