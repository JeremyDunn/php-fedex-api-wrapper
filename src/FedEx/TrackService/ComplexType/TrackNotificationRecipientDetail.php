<?php
namespace FedEx\TrackService\ComplexType;

/**
 * Options available for a tracking notification recipient.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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