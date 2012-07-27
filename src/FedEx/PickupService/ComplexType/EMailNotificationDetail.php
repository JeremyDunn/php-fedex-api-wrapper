<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailNotificationDetail
    extends AbstractComplexType
{
    protected $_name = 'EMailNotificationDetail';

    /**
     * Specifies whether/how email notifications are grouped.
     *
     * @param EMailNotificationAggregationType $AggregationType
     * return EMailNotificationDetail
     */
    public function setAggregationType(\FedEx\Pickup\SimpleType\EMailNotificationAggregationType $aggregationType)
    {
        $this->AggregationType = $aggregationType;
        return $this;
    }
    
    /**
     * A message that will be included in the email notifications
     *
     * @param string $PersonalMessage
     * return EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Information describing the destination of the email, format of the email and events to be notified on
     *
     * @param array[EMailNotificationRecipient] $Recipients
     * return EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    

    
}