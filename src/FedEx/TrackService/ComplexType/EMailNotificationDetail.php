<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $PersonalMessage
 * @property EMailNotificationRecipient[] $Recipients

 */
class EMailNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EMailNotificationDetail';

    /**
     * A message that will be included in the email notifications
     *
     * @param string $personalMessage
     * @return $this
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->values['PersonalMessage'] = $personalMessage;
        return $this;
    }

    /**
     * Information describing the destination of the email, format of the email and events to be notified on
     *
     * @param EMailNotificationRecipient[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->values['Recipients'] = $recipients;
        return $this;
    }
}
