<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Descriptive data sent to FedEx by a customer in order to delete a package.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DeleteShipmentRequest
    extends AbstractComplexType
{
    protected $_name = 'DeleteShipmentRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
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
     * @param ClientDetail $ClientDetail
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
     * @param TransactionDetail $TransactionDetail
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
     * @param VersionId $Version
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
     * @param dateTime $ShipTimestamp
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
     * @param TrackingId $TrackingId
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
     * @param DeletionControlType $DeletionControl
     * return DeleteShipmentRequest
     */
    public function setDeletionControl(\FedEx\ShipService\SimpleType\DeletionControlType $deletionControl)
    {
        $this->DeletionControl = $deletionControl;
        return $this;
    }
    

    
}