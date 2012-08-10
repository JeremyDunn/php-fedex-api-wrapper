<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailNotificationRecipient
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class EMailNotificationRecipient
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailNotificationRecipient';

    /**
     * Identifies the relationship this email recipient has to the shipment.
     *
     * @param \FedEx\TrackService\SimpleType\EMailNotificationRecipientType|string $eMailNotificationRecipientType
     * return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType($eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * The email address to send the notification to
     *
     * @param string $eMailAddress
     * return EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * The types of email notifications being requested for this recipient.
     *
     * @param EMailNotificationEventType[] $notificationEventsRequested
     * return EMailNotificationRecipient
     */
    public function setNotificationEventsRequested(array $notificationEventsRequested)
    {
        $this->NotificationEventsRequested = $notificationEventsRequested;
        return $this;
    }
    
    /**
     * The format of the email notification.
     *
     * @param \FedEx\TrackService\SimpleType\EMailNotificationFormatType|string $format
     * return EMailNotificationRecipient
     */
    public function setFormat($format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * The language/locale to be used in this email notification.
     *
     * @param Localization $localization
     * return EMailNotificationRecipient
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}