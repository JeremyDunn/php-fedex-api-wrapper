<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RecipientCustomsIdType|string $Type
 * @property string $Value

 */
class RecipientCustomsId extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RecipientCustomsId';

    /**
     * Specifies the kind of identification being used.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RecipientCustomsIdType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Contains the actual ID value, of the type specified above.
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
