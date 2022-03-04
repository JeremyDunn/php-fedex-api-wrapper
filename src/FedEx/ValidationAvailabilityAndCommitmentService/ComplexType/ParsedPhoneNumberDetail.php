<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedPhoneNumberDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PhoneNumberType|string $Type
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\UsageType|string $Usage
 * @property ParsedPhoneNumber $PhoneNumber
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $CallPermission
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $TextMessagePermission

 */
class ParsedPhoneNumberDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedPhoneNumberDetail';

    /**
     * Specifies the type of phone number such as HOME, MOBILE.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PhoneNumberType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Specifies the relation of the customer to the phone number such as primary, secondary, et al.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\UsageType|string $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->values['Usage'] = $usage;
        return $this;
    }

    /**
     * Set PhoneNumber
     *
     * @param ParsedPhoneNumber $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(ParsedPhoneNumber $phoneNumber)
    {
        $this->values['PhoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Specifies whether the customer phone number is registered as a Federal Do no Call number.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $callPermission
     * @return $this
     */
    public function setCallPermission($callPermission)
    {
        $this->values['CallPermission'] = $callPermission;
        return $this;
    }

    /**
     * Specifies whether the customer allows FedEx send a text message to this phone number. This permission only captures that the customer has selected for text messages to be sent to a particular phone number. This permission does not identify particular correspondence types such as marketing.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $textMessagePermission
     * @return $this
     */
    public function setTextMessagePermission($textMessagePermission)
    {
        $this->values['TextMessagePermission'] = $textMessagePermission;
        return $this;
    }
}
