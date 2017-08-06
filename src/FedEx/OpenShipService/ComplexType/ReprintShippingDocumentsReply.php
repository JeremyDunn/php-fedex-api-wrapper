<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReprintShippingDocumentsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $JobId
 * @property ShippingDocument[] $ShipmentDocuments
 * @property PackageDocument[] $PackageDocuments

 */
class ReprintShippingDocumentsReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ReprintShippingDocumentsReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\OpenShipService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Set JobId
     *
     * @param string $jobId
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->values['JobId'] = $jobId;
        return $this;
    }

    /**
     * Shipment level shipping documents for reprint
     *
     * @param ShippingDocument[] $shipmentDocuments
     * @return $this
     */
    public function setShipmentDocuments(array $shipmentDocuments)
    {
        $this->values['ShipmentDocuments'] = $shipmentDocuments;
        return $this;
    }

    /**
     * Package-level shipping documents for reprint
     *
     * @param PackageDocument[] $packageDocuments
     * @return $this
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->values['PackageDocuments'] = $packageDocuments;
        return $this;
    }
}
