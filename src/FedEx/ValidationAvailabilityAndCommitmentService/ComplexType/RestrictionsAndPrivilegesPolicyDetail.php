<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RestrictionsAndPrivilegesPolicyDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RestrictionsAndPrivilegesPolicyExceptionType|string $ExceptionType
 * @property PolicyGridManifest[] $PolicyGridManifests
 * @property EnterprisePrivilegeDetail[] $PrivilegeDetails

 */
class RestrictionsAndPrivilegesPolicyDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RestrictionsAndPrivilegesPolicyDetail';

    /**
     * Set ExceptionType
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RestrictionsAndPrivilegesPolicyExceptionType|string $exceptionType
     * @return $this
     */
    public function setExceptionType($exceptionType)
    {
        $this->values['ExceptionType'] = $exceptionType;
        return $this;
    }

    /**
     * Set PolicyGridManifests
     *
     * @param PolicyGridManifest[] $policyGridManifests
     * @return $this
     */
    public function setPolicyGridManifests(array $policyGridManifests)
    {
        $this->values['PolicyGridManifests'] = $policyGridManifests;
        return $this;
    }

    /**
     * Set PrivilegeDetails
     *
     * @param EnterprisePrivilegeDetail[] $privilegeDetails
     * @return $this
     */
    public function setPrivilegeDetails(array $privilegeDetails)
    {
        $this->values['PrivilegeDetails'] = $privilegeDetails;
        return $this;
    }
}
