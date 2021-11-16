<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailAddressDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Address
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $ContactPermission

 */
class EMailAddressDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EMailAddressDetail';

    /**
     * Set Address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['Address'] = $address;
        return $this;
    }

    /**
     * This specifies whether the customer would like to be contacted via email. The context of permission and use of this email address is country specific. In the United States, the permission of ALLOWED specifies whether the customer can be contacted via email for marketing correspondence. In United States, the customer can still be contacted for customer service notifications, even though the permission is DISALLOWED.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $contactPermission
     * @return $this
     */
    public function setContactPermission($contactPermission)
    {
        $this->values['ContactPermission'] = $contactPermission;
        return $this;
    }
}
