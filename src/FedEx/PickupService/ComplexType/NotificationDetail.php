<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\NotificationType|string $NotificationType
 * @property EMailDetail $EmailDetail
 * @property FaxDetail $FaxDetail
 * @property SmsDetail $SmsDetail
 * @property Localization $Localization

 */
class NotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NotificationDetail';

    /**
     * Indicates the type of notification that will be sent.
     *
     * @param \FedEx\PickupService\SimpleType\NotificationType|string $notificationType
     * @return $this
     */
    public function setNotificationType($notificationType)
    {
        $this->values['NotificationType'] = $notificationType;
        return $this;
    }

    /**
     * Specifies the email notification details.
     *
     * @param EMailDetail $emailDetail
     * @return $this
     */
    public function setEmailDetail(EMailDetail $emailDetail)
    {
        $this->values['EmailDetail'] = $emailDetail;
        return $this;
    }

    /**
     * Specifies the fax notification details.
     *
     * @param FaxDetail $faxDetail
     * @return $this
     */
    public function setFaxDetail(FaxDetail $faxDetail)
    {
        $this->values['FaxDetail'] = $faxDetail;
        return $this;
    }

    /**
     * Specifies the SMS notification details.
     *
     * @param SmsDetail $smsDetail
     * @return $this
     */
    public function setSmsDetail(SmsDetail $smsDetail)
    {
        $this->values['SmsDetail'] = $smsDetail;
        return $this;
    }

    /**
     * Specifies the localization for this notification.
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
