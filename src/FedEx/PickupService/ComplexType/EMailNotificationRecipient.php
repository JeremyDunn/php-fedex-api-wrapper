<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data for a FedEx email notification recipient.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailNotificationRecipient
    extends AbstractComplexType
{
    protected $_name = 'EMailNotificationRecipient';

    /**
     * Identifies the relationship this email recipient has to the shipment.
     *
     * @param EMailNotificationRecipientType $EMailNotificationRecipientType
     * return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType(\FedEx\PickupService\SimpleType\EMailNotificationRecipientType $eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * The email address to send the notification to
     *
     * @param string $EMailAddress
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
     * @param array[EMailNotificationEventType] $NotificationEventsRequested
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
     * @param EMailNotificationFormatType $Format
     * return EMailNotificationRecipient
     */
    public function setFormat(\FedEx\PickupService\SimpleType\EMailNotificationFormatType $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * The language/locale to be used in this email notification.
     *
     * @param Localization $Localization
     * return EMailNotificationRecipient
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}