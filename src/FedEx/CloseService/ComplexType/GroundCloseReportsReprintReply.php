<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseReportsReprintReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseReportsReprintReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GroundCloseReportsReprintReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
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
     * return GroundCloseReportsReprintReply
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    
    /**
     * Set Manifests
     *
     * @param ManifestFile[] $manifests
     * return GroundCloseReportsReprintReply
     */
    public function setManifests(array $manifests)
    {
        $this->Manifests = $manifests;
        return $this;
    }
    

    
}