<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property \FedEx\CloseService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $CodReport
 * @property string $HazMatCertificate
 * @property ManifestFile $Manifest
 * @property string $MultiweightReport

 */
class GroundCloseReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GroundCloseReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Set CodReport
     *
     * @param string $codReport
     * @return $this
     */
    public function setCodReport($codReport)
    {
        $this->values['CodReport'] = $codReport;
        return $this;
    }

    /**
     * Set HazMatCertificate
     *
     * @param string $hazMatCertificate
     * @return $this
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->values['HazMatCertificate'] = $hazMatCertificate;
        return $this;
    }

    /**
     * Set Manifest
     *
     * @param ManifestFile $manifest
     * @return $this
     */
    public function setManifest(ManifestFile $manifest)
    {
        $this->values['Manifest'] = $manifest;
        return $this;
    }

    /**
     * Set MultiweightReport
     *
     * @param string $multiweightReport
     * @return $this
     */
    public function setMultiweightReport($multiweightReport)
    {
        $this->values['MultiweightReport'] = $multiweightReport;
        return $this;
    }
}
