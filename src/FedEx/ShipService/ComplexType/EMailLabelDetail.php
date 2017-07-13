<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes specific information about the email label shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $NotificationEMailAddress
 * @property string $NotificationMessage

 */
class EMailLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EMailLabelDetail';

    /**
     * Notification email will be sent to this email address
     *
     * @param string $notificationEMailAddress
     * @return $this
     */
    public function setNotificationEMailAddress($notificationEMailAddress)
    {
        $this->values['NotificationEMailAddress'] = $notificationEMailAddress;
        return $this;
    }

    /**
     * Message to be sent in the notification email
     *
     * @param string $notificationMessage
     * @return $this
     */
    public function setNotificationMessage($notificationMessage)
    {
        $this->values['NotificationMessage'] = $notificationMessage;
        return $this;
    }
}
