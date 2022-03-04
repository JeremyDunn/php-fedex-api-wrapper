<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\NotificationType|string $NotificationType
 * @property EMailDetail $EmailDetail
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
     * @param \FedEx\ShipService\SimpleType\NotificationType|string $notificationType
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
