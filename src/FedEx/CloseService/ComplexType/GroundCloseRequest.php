<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseRequest
    extends AbstractComplexType
{
    protected $_name = 'GroundCloseRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return GroundCloseRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param ClientDetail $ClientDetail
     * return GroundCloseRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return GroundCloseRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return GroundCloseRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the date and time up to which unclosed shipments are to be closed. Both the date and time portions of the string are expected to be used. The time is the local time based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2009-04-26). The time component must be in the format: HH:MM:SS using a 24 hour clock (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts are separated by a T (e.g. 2009-04-26T17:00:00).
     *
     * @param dateTime $TimeUpToWhichShipmentsAreToBeClosed
     * return GroundCloseRequest
     */
    public function setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed)
    {
        $this->TimeUpToWhichShipmentsAreToBeClosed = $timeUpToWhichShipmentsAreToBeClosed;
        return $this;
    }
    

    
}