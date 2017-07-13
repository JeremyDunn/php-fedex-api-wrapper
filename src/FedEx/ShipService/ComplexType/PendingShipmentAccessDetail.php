<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes how and when a pending shipment may be accessed for completion.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $EmailLabelUrl
 * @property string $UserId
 * @property string $Password
 * @property string $ExpirationTimestamp

 */
class PendingShipmentAccessDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PendingShipmentAccessDetail';

    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $emailLabelUrl
     * @return $this
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->values['EmailLabelUrl'] = $emailLabelUrl;
        return $this;
    }

    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->values['UserId'] = $userId;
        return $this;
    }

    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->values['Password'] = $password;
        return $this;
    }

    /**
     * This element is currently not supported and is for the future use.
     *
     * @param string $expirationTimestamp
     * @return $this
     */
    public function setExpirationTimestamp($expirationTimestamp)
    {
        $this->values['ExpirationTimestamp'] = $expirationTimestamp;
        return $this;
    }
}
