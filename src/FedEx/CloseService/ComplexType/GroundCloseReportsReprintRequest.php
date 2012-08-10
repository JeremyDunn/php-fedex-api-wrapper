<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseReportsReprintRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseReportsReprintRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GroundCloseReportsReprintRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return GroundCloseReportsReprintRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * return GroundCloseReportsReprintRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * return GroundCloseReportsReprintRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * return GroundCloseReportsReprintRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set ReportDate
     *
     * @param date $reportDate
     * return GroundCloseReportsReprintRequest
     */
    public function setReportDate($reportDate)
    {
        $this->ReportDate = $reportDate;
        return $this;
    }
    
    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * return GroundCloseReportsReprintRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Set CloseReportType
     *
     * @param \FedEx\CloseService\SimpleType\CloseReportType|string $closeReportType
     * return GroundCloseReportsReprintRequest
     */
    public function setCloseReportType($closeReportType)
    {
        $this->CloseReportType = $closeReportType;
        return $this;
    }
    

    
}