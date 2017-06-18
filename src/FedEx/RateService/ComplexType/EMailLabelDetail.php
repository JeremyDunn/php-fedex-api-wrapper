<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specific information about the delivery of the email and options for the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * Email address to send the URL to.
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
     * A message to be inserted into the email.
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
