<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AccountAliasDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Id
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\AccountAliasType|string $Type
 * @property ProfileContact $Contact
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\AccountAliasAttributeType|string[] $Attributes

 */
class AccountAliasDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AccountAliasDetail';

    /**
     * Unique identifier for this alias.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Set Type
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\AccountAliasType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Contact
     *
     * @param ProfileContact $contact
     * @return $this
     */
    public function setContact(ProfileContact $contact)
    {
        $this->values['Contact'] = $contact;
        return $this;
    }

    /**
     * Set Attributes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\AccountAliasAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }
}
