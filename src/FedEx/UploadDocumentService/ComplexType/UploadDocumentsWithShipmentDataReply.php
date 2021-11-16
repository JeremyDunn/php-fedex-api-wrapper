<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsWithShipmentDataReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property UploadDocumentStatusDetail[] $DocumentStatuses
 * @property UploadDocumentStatusDetail[] $DocumentReferenceStatuses

 */
class UploadDocumentsWithShipmentDataReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentsWithShipmentDataReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Set DocumentStatuses
     *
     * @param UploadDocumentStatusDetail[] $documentStatuses
     * @return $this
     */
    public function setDocumentStatuses(array $documentStatuses)
    {
        $this->values['DocumentStatuses'] = $documentStatuses;
        return $this;
    }

    /**
     * Set DocumentReferenceStatuses
     *
     * @param UploadDocumentStatusDetail[] $documentReferenceStatuses
     * @return $this
     */
    public function setDocumentReferenceStatuses(array $documentReferenceStatuses)
    {
        $this->values['DocumentReferenceStatuses'] = $documentReferenceStatuses;
        return $this;
    }
}
