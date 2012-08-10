<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned for a FedEx service availability request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ServiceAvailabilityReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ServiceAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return ServiceAvailabilityReply
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
     * return ServiceAvailabilityReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply. 
     *
     * @param TransactionDetail $transactionDetail
     * return ServiceAvailabilityReply
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
     * return ServiceAvailabilityReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The descriptive data for the collection of available FedEx Services returned for the request.
     *
     * @param ServiceAvailabilityOption[] $options
     * return ServiceAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}