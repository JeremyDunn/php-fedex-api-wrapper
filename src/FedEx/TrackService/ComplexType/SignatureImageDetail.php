<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureImageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Image
 * @property Notification[] $Notifications

 */
class SignatureImageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SignatureImageDetail';

    /**
     * Set Image
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->values['Image'] = $image;
        return $this;
    }

    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
        return $this;
    }
}
