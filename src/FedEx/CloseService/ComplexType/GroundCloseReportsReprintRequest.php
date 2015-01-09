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
     * @return GroundCloseReportsReprintRequest
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
     * @return GroundCloseReportsReprintRequest
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
     * @return GroundCloseReportsReprintRequest
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
     * @return GroundCloseReportsReprintRequest
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
     * Set ReportDate
     *
     * @param date $reportDate
     * @return GroundCloseReportsReprintRequest
     */
    public function setReportDate($reportDate)
    {
        $this->ReportDate = $reportDate;
        return $this;
    }
    
    /**
     * Returns Set ReportDate
     *
     * @return date
     */
    public function getReportDate()
    {
        return $this->ReportDate;
    }
    
    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * @return GroundCloseReportsReprintRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns Set TrackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Set CloseReportType
     *
     * @param \FedEx\CloseService\SimpleType\CloseReportType|string $closeReportType
     * @return GroundCloseReportsReprintRequest
     */
    public function setCloseReportType($closeReportType)
    {
        $this->CloseReportType = $closeReportType;
        return $this;
    }
    
    /**
     * Returns Set CloseReportType
     *
     * @return \FedEx\CloseService\SimpleType\CloseReportType|string
     */
    public function getCloseReportType()
    {
        return $this->CloseReportType;
    }
    

    
}