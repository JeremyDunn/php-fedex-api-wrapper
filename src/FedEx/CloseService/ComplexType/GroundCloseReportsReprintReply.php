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
class GroundCloseReportsReprintReply
    extends AbstractComplexType
{
    protected $_name = 'GroundCloseReportsReprintReply';

    /**
     * 
     *
     * @param NotificationSeverityType $HighestSeverity
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[ManifestFile] $Manifests
     * return GroundCloseReportsReprintReply
     */
    public function setManifests(array $manifests)
    {
        $this->Manifests = $manifests;
        return $this;
    }
    

    
}