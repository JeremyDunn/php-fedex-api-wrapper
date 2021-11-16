<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details of an interline customer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $InterlineCode
 * @property string $InterlineEmployeeId

 */
class InterlineCustomerDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InterlineCustomerDetail';

    /**
     * Identifies the interline code associated with the account.
     *
     * @param string $interlineCode
     * @return $this
     */
    public function setInterlineCode($interlineCode)
    {
        $this->values['InterlineCode'] = $interlineCode;
        return $this;
    }

    /**
     * An employee id (within the affiliated interline company) associated with this interline customer.
     *
     * @param string $interlineEmployeeId
     * @return $this
     */
    public function setInterlineEmployeeId($interlineEmployeeId)
    {
        $this->values['InterlineEmployeeId'] = $interlineEmployeeId;
        return $this;
    }
}
