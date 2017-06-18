<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\EMailNotificationAggregationType|string $AggregationType
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
     * Specifies whether/how email notifications are grouped.
     *
     * @param \FedEx\ShipService\SimpleType\EMailNotificationAggregationType|string $aggregationType
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        $this->values['AggregationType'] = $aggregationType;
        return $this;
    }

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
