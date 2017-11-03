<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsReply
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
 * @property DocumentRequirementsDetail $DocumentRequirements

 */
class UploadDocumentsReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentsReply';

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
     * For an upload making use of the POST_SHIPMENT_UPLOAD option, this will indicate information about the required documents necessary for package movement.
     *
     * @param DocumentRequirementsDetail $documentRequirements
     * @return $this
     */
    public function setDocumentRequirements(DocumentRequirementsDetail $documentRequirements)
    {
        $this->values['DocumentRequirements'] = $documentRequirements;
        return $this;
    }
}
