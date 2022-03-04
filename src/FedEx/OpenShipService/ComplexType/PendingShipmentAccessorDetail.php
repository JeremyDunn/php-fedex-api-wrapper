<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details to be used by the user of the pending shipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\AccessorRoleType|string $Role
 * @property string $UserId
 * @property string $Password
 * @property string $EmailLabelUrl

 */
class PendingShipmentAccessorDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PendingShipmentAccessorDetail';

    /**
     * Specifies the role of the user who is trying to access the pending shipment.
     *
     * @param \FedEx\OpenShipService\SimpleType\AccessorRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }

    /**
     * Set UserId
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
     * Set Password
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
     * Set EmailLabelUrl
     *
     * @param string $emailLabelUrl
     * @return $this
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->values['EmailLabelUrl'] = $emailLabelUrl;
        return $this;
    }
}
