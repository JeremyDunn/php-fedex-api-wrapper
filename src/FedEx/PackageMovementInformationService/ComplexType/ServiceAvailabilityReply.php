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
     * @return ServiceAvailabilityReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @return \FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * @return ServiceAvailabilityReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns The descriptive data detailing the status of a sumbitted transaction.
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply. 
     *
     * @param TransactionDetail $transactionDetail
     * @return ServiceAvailabilityReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply. 
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return ServiceAvailabilityReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * The descriptive data for the collection of available FedEx Services returned for the request.
     *
     * @param ServiceAvailabilityOption[] $options
     * @return ServiceAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns The descriptive data for the collection of available FedEx Services returned for the request.
     *
     * @return ServiceAvailabilityOption[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}