<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedExLocatorReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class FedExLocatorReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FedExLocatorReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\LocatorService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return FedExLocatorReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * return FedExLocatorReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.	The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return FedExLocatorReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * return FedExLocatorReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Descriptive data for each of the drop-off locations matches found.
     *
     * @param DropoffLocation[] $dropoffLocations
     * return FedExLocatorReply
     */
    public function setDropoffLocations(array $dropoffLocations)
    {
        $this->DropoffLocations = $dropoffLocations;
        return $this;
    }
    
    /**
     * The total number of locations that matched the request criteria.
     *
     * @param int $availableRecordCount
     * return FedExLocatorReply
     */
    public function setAvailableRecordCount($availableRecordCount)
    {
        $this->AvailableRecordCount = $availableRecordCount;
        return $this;
    }
    

    
}