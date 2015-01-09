<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GroundCloseReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return GroundCloseReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Set HighestSeverity
     *
     * @return \FedEx\CloseService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return GroundCloseReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Set Notifications
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return GroundCloseReply
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
     * @return GroundCloseReply
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
     * Set CodReport
     *
     * @param base64Binary $codReport
     * @return GroundCloseReply
     */
    public function setCodReport($codReport)
    {
        $this->CodReport = $codReport;
        return $this;
    }
    
    /**
     * Returns Set CodReport
     *
     * @return base64Binary
     */
    public function getCodReport()
    {
        return $this->CodReport;
    }
    
    /**
     * Set HazMatCertificate
     *
     * @param base64Binary $hazMatCertificate
     * @return GroundCloseReply
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    
    /**
     * Returns Set HazMatCertificate
     *
     * @return base64Binary
     */
    public function getHazMatCertificate()
    {
        return $this->HazMatCertificate;
    }
    
    /**
     * Set Manifest
     *
     * @param ManifestFile $manifest
     * @return GroundCloseReply
     */
    public function setManifest(ManifestFile $manifest)
    {
        $this->Manifest = $manifest;
        return $this;
    }
    
    /**
     * Returns Set Manifest
     *
     * @return ManifestFile
     */
    public function getManifest()
    {
        return $this->Manifest;
    }
    
    /**
     * Set MultiweightReport
     *
     * @param base64Binary $multiweightReport
     * @return GroundCloseReply
     */
    public function setMultiweightReport($multiweightReport)
    {
        $this->MultiweightReport = $multiweightReport;
        return $this;
    }
    
    /**
     * Returns Set MultiweightReport
     *
     * @return base64Binary
     */
    public function getMultiweightReport()
    {
        return $this->MultiweightReport;
    }
    

    
}