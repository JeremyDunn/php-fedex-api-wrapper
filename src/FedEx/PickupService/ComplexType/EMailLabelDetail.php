<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Describes specific information about the email label shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailLabelDetail
    extends AbstractComplexType
{
    protected $_name = 'EMailLabelDetail';

    /**
     * Notification email will be sent to this email address
     *
     * @param string $NotificationEMailAddress
     * return EMailLabelDetail
     */
    public function setNotificationEMailAddress($notificationEMailAddress)
    {
        $this->NotificationEMailAddress = $notificationEMailAddress;
        return $this;
    }
    
    /**
     * Message to be sent in the notification email
     *
     * @param string $NotificationMessage
     * return EMailLabelDetail
     */
    public function setNotificationMessage($notificationMessage)
    {
        $this->NotificationMessage = $notificationMessage;
        return $this;
    }
    

    
}