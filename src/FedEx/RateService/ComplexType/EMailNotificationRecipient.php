<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a FedEx email notification recipient.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * @param \FedEx\RateService\SimpleType\EMailNotificationRecipientType|string $eMailNotificationRecipientType
     * @return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType($eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * Returns Identifies the relationship this email recipient has to the shipment.
     *
     * @return \FedEx\RateService\SimpleType\EMailNotificationRecipientType|string
     */
    public function getEMailNotificationRecipientType()
    {
        return $this->EMailNotificationRecipientType;
    }
    
    /**
     * The email address to send the notification to
     *
     * @param string $eMailAddress
     * @return EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * Returns The email address to send the notification to
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }
    
    /**
     * The types of email notifications being requested for this recipient.
     *
     * @param EMailNotificationEventType[] $notificationEventsRequested
     * @return EMailNotificationRecipient
     */
    public function setNotificationEventsRequested(array $notificationEventsRequested)
    {
        $this->NotificationEventsRequested = $notificationEventsRequested;
        return $this;
    }
    
    /**
     * Returns The types of email notifications being requested for this recipient.
     *
     * @return EMailNotificationEventType[]
     */
    public function getNotificationEventsRequested()
    {
        return $this->NotificationEventsRequested;
    }
    
    /**
     * The format of the email notification.
     *
     * @param \FedEx\RateService\SimpleType\EMailNotificationFormatType|string $format
     * @return EMailNotificationRecipient
     */
    public function setFormat($format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns The format of the email notification.
     *
     * @return \FedEx\RateService\SimpleType\EMailNotificationFormatType|string
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * The language/locale to be used in this email notification.
     *
     * @param Localization $localization
     * @return EMailNotificationRecipient
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns The language/locale to be used in this email notification.
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}