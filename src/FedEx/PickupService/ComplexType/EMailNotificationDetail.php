<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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
    public function setAggregationType(\FedEx\PickupService\SimpleType\EMailNotificationAggregationType $aggregationType)
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