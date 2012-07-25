<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

/**
 * The descriptive data returned for a FedEx service availability request.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ServiceAvailabilityReply
    extends AbstractComplexType
{
    protected $_name = 'ServiceAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return ServiceAvailabilityReply
     */
    public function setHighestSeverity(\FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
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
     * @param TransactionDetail $TransactionDetail
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
     * @param VersionId $Version
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
     * @param array[ServiceAvailabilityOption] $Options
     * return ServiceAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}