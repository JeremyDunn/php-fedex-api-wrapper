<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about a FedEx employee.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $EmployeeId
 * @property Contact $Contact
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\OperatingCompanyType|string $OperatingCompany
 * @property string $CallCenterAssignedTo

 */
class FedExEmployee extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FedExEmployee';

    /**
     * Unique identifier for an employee such as employee number.
     *
     * @param string $employeeId
     * @return $this
     */
    public function setEmployeeId($employeeId)
    {
        $this->values['EmployeeId'] = $employeeId;
        return $this;
    }

    /**
     * Contact details for the employee.
     *
     * @param Contact $contact
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->values['Contact'] = $contact;
        return $this;
    }

    /**
     * Specifies the operating company the employee represents.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\OperatingCompanyType|string $operatingCompany
     * @return $this
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->values['OperatingCompany'] = $operatingCompany;
        return $this;
    }

    /**
     * In case of an employee providing customer service, specifies the call center the employee is assigned to.
     *
     * @param string $callCenterAssignedTo
     * @return $this
     */
    public function setCallCenterAssignedTo($callCenterAssignedTo)
    {
        $this->values['CallCenterAssignedTo'] = $callCenterAssignedTo;
        return $this;
    }
}
