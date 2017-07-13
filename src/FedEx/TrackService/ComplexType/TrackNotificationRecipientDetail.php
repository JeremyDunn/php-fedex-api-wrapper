<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Options available for a tracking notification recipient.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\EMailNotificationEventType|string[] $NotificationEventsAvailable

 */
class TrackNotificationRecipientDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackNotificationRecipientDetail';

    /**
     * The types of email notifications available for this recipient.
     *
     * @param \FedEx\TrackService\SimpleType\EMailNotificationEventType[]|string[] $notificationEventsAvailable
     * @return $this
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable)
    {
        $this->values['NotificationEventsAvailable'] = $notificationEventsAvailable;
        return $this;
    }
}
