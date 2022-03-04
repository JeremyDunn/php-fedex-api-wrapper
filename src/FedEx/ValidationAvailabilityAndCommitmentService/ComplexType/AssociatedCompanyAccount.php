<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AssociatedCompanyAccount
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $CompanyIdentifier
 * @property string $AccountNumber
 * @property KeyValueDetail[] $AccountDetails

 */
class AssociatedCompanyAccount extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AssociatedCompanyAccount';

    /**
     * An identifier for the acquired/associated company (for example, TNT, FXOP, etc.)
     *
     * @param string $companyIdentifier
     * @return $this
     */
    public function setCompanyIdentifier($companyIdentifier)
    {
        $this->values['CompanyIdentifier'] = $companyIdentifier;
        return $this;
    }

    /**
     * Set AccountNumber
     *
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['AccountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * A set of attributes associated with this account.
     *
     * @param KeyValueDetail[] $accountDetails
     * @return $this
     */
    public function setAccountDetails(array $accountDetails)
    {
        $this->values['AccountDetails'] = $accountDetails;
        return $this;
    }
}
