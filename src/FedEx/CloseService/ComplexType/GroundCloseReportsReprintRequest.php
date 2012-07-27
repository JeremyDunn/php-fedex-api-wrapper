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
class GroundCloseReportsReprintRequest
    extends AbstractComplexType
{
    protected $_name = 'GroundCloseReportsReprintRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return GroundCloseReportsReprintRequest
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
     * return GroundCloseReportsReprintRequest
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
     * return GroundCloseReportsReprintRequest
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
     * return GroundCloseReportsReprintRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $ReportDate
     * return GroundCloseReportsReprintRequest
     */
    public function setReportDate($reportDate)
    {
        $this->ReportDate = $reportDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackingNumber
     * return GroundCloseReportsReprintRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param CloseReportType $CloseReportType
     * return GroundCloseReportsReprintRequest
     */
    public function setCloseReportType(\FedEx\CloseService\SimpleType\CloseReportType $closeReportType)
    {
        $this->CloseReportType = $closeReportType;
        return $this;
    }
    

    
}