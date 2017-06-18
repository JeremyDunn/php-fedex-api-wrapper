<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailNotificationRecipient
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\EMailNotificationRecipientType|string $EMailNotificationRecipientType
 * @property string $EMailAddress
 * @property \FedEx\TrackService\SimpleType\EMailNotificationEventType|string[] $NotificationEventsRequested
 * @property \FedEx\TrackService\SimpleType\EMailNotificationFormatType|string $Format
 * @property Localization $Localization

 */
class EMailNotificationRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EMailNotificationRecipient';

    /**
     * Identifies the relationship this email recipient has to the shipment.
     *
     * @param \FedEx\TrackService\SimpleType\EMailNotificationRecipientType|string $eMailNotificationRecipientType
     * @return $this
     */
    public function setEMailNotificationRecipientType($eMailNotificationRecipientType)
    {
        $this->values['EMailNotificationRecipientType'] = $eMailNotificationRecipientType;
        return $this;
    }

    /**
     * The email address to send the notification to
     *
     * @param string $eMailAddress
     * @return $this
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->values['EMailAddress'] = $eMailAddress;
        return $this;
    }

    /**
     * The types of email notifications being requested for this recipient.
     *
     * @param \FedEx\TrackService\SimpleType\EMailNotificationEventType[]|string[] $notificationEventsRequested
     * @return $this
     */
    public function setNotificationEventsRequested(array $notificationEventsRequested)
    {
        $this->values['NotificationEventsRequested'] = $notificationEventsRequested;
        return $this;
    }

    /**
     * The format of the email notification.
     *
     * @param \FedEx\TrackService\SimpleType\EMailNotificationFormatType|string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * The language/locale to be used in this email notification.
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }
}
