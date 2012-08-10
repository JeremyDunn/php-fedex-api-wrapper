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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailNotificationDetail';

    /**
     * Specifies whether/how email notifications are grouped.
     *
     * @param \FedEx\Pickup\SimpleType\EMailNotificationAggregationType|string $aggregationType
     * return EMailNotificationDetail
     */
    public function setAggregationType($aggregationType)
    {
        $this->AggregationType = $aggregationType;
        return $this;
    }
    
    /**
     * A message that will be included in the email notifications
     *
     * @param string $personalMessage
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
     * @param EMailNotificationRecipient[] $recipients
     * return EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    

    
}