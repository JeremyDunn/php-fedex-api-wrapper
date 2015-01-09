<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GroundCloseRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return GroundCloseRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return GroundCloseRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Set ClientDetail
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return GroundCloseRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return GroundCloseRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Identifies the date and time up to which unclosed shipments are to be closed. Both the date and time portions of the string are expected to be used. The time is the local time based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2009-04-26). The time component must be in the format: HH:MM:SS using a 24 hour clock (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts are separated by a T (e.g. 2009-04-26T17:00:00).
     *
     * @param dateTime $timeUpToWhichShipmentsAreToBeClosed
     * @return GroundCloseRequest
     */
    public function setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed)
    {
        $this->TimeUpToWhichShipmentsAreToBeClosed = $timeUpToWhichShipmentsAreToBeClosed;
        return $this;
    }
    
    /**
     * Returns Identifies the date and time up to which unclosed shipments are to be closed. Both the date and time portions of the string are expected to be used. The time is the local time based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2009-04-26). The time component must be in the format: HH:MM:SS using a 24 hour clock (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts are separated by a T (e.g. 2009-04-26T17:00:00).
     *
     * @return dateTime
     */
    public function getTimeUpToWhichShipmentsAreToBeClosed()
    {
        return $this->TimeUpToWhichShipmentsAreToBeClosed;
    }
    

    
}