<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the information necessary for printing the NAFTA Low Value statement on customs documentation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomsRoleType|string $Role

 */
class NaftaLowValueStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NaftaLowValueStatementDetail';

    /**
     * Specifies the NAFTA statement role.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomsRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }
}
