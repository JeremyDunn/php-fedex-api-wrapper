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
     * return GroundCloseReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * return GroundCloseReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * return GroundCloseReply
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
     * return GroundCloseReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set CodReport
     *
     * @param base64Binary $codReport
     * return GroundCloseReply
     */
    public function setCodReport($codReport)
    {
        $this->CodReport = $codReport;
        return $this;
    }
    
    /**
     * Set HazMatCertificate
     *
     * @param base64Binary $hazMatCertificate
     * return GroundCloseReply
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    
    /**
     * Set Manifest
     *
     * @param ManifestFile $manifest
     * return GroundCloseReply
     */
    public function setManifest(ManifestFile $manifest)
    {
        $this->Manifest = $manifest;
        return $this;
    }
    
    /**
     * Set MultiweightReport
     *
     * @param base64Binary $multiweightReport
     * return GroundCloseReply
     */
    public function setMultiweightReport($multiweightReport)
    {
        $this->MultiweightReport = $multiweightReport;
        return $this;
    }
    

    
}