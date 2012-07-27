<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Options available for a tracking notification recipient.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationRecipientDetail
    extends AbstractComplexType
{
    protected $_name = 'TrackNotificationRecipientDetail';

    /**
     * The types of email notifications available for this recipient.
     *
     * @param array[EMailNotificationEventType] $NotificationEventsAvailable
     * return TrackNotificationRecipientDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable)
    {
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    

    
}