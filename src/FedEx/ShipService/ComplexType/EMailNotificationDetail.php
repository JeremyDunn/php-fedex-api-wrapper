<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EMailNotificationDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailNotificationDetail';

    /**
     * Specifies whether/how email notifications are grouped.
     *
     * @param \FedEx\ShipService\SimpleType\EMailNotificationAggregationType|string $aggregationType
     * @return EMailNotificationDetail
     */
    public function setAggregationType($aggregationType)
    {
        $this->AggregationType = $aggregationType;
        return $this;
    }
    
    /**
     * Returns Specifies whether/how email notifications are grouped.
     *
     * @return \FedEx\ShipService\SimpleType\EMailNotificationAggregationType|string
     */
    public function getAggregationType()
    {
        return $this->AggregationType;
    }
    
    /**
     * A message that will be included in the email notifications
     *
     * @param string $personalMessage
     * @return EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Returns A message that will be included in the email notifications
     *
     * @return string
     */
    public function getPersonalMessage()
    {
        return $this->PersonalMessage;
    }
    
    /**
     * Information describing the destination of the email, format of the email and events to be notified on
     *
     * @param EMailNotificationRecipient[] $recipients
     * @return EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    
    /**
     * Returns Information describing the destination of the email, format of the email and events to be notified on
     *
     * @return EMailNotificationRecipient[]
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    

    
}