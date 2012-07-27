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
class GroundCloseReply
    extends AbstractComplexType
{
    protected $_name = 'GroundCloseReply';

    /**
     * 
     *
     * @param NotificationSeverityType $HighestSeverity
     * return GroundCloseReply
     */
    public function setHighestSeverity(\FedEx\CloseService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Notification] $Notifications
     * return GroundCloseReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return GroundCloseReply
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
     * return GroundCloseReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $CodReport
     * return GroundCloseReply
     */
    public function setCodReport($codReport)
    {
        $this->CodReport = $codReport;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $HazMatCertificate
     * return GroundCloseReply
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    
    /**
     * 
     *
     * @param ManifestFile $Manifest
     * return GroundCloseReply
     */
    public function setManifest(ManifestFile $manifest)
    {
        $this->Manifest = $manifest;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $MultiweightReport
     * return GroundCloseReply
     */
    public function setMultiweightReport($multiweightReport)
    {
        $this->MultiweightReport = $multiweightReport;
        return $this;
    }
    

    
}