<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes specific information about the email label shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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