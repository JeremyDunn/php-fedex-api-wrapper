<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details for an Enterprise profile.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ProfileContact[] $Contacts
 * @property string $AccountNumber
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountStatusType|string $AccountStatus
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EnterpriseAccountType|string $AccountType
 * @property AccountGroupMembershipDetail[] $AccountGroups
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountEntityType|string $EntityType
 * @property TaxpayerIdentification[] $Tins
 * @property WelcomeKitDetail $WelcomeKit
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EnterpriseProfileAttributeType|string[] $Attributes
 * @property GroupReferenceDetail[] $GroupReferenceDetails
 * @property string $CreationDate
 * @property AssociatedCompanyAccount[] $AssociatedAccounts

 */
class EnterpriseProfile extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EnterpriseProfile';

    /**
     * Set Contacts
     *
     * @param ProfileContact[] $contacts
     * @return $this
     */
    public function setContacts(array $contacts)
    {
        $this->values['Contacts'] = $contacts;
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
     * Set AccountStatus
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountStatusType|string $accountStatus
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->values['AccountStatus'] = $accountStatus;
        return $this;
    }

    /**
     * Specifies the account type. This specifies the account type in addition to the customer entity type
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EnterpriseAccountType|string $accountType
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->values['AccountType'] = $accountType;
        return $this;
    }

    /**
     * Set AccountGroups
     *
     * @param AccountGroupMembershipDetail[] $accountGroups
     * @return $this
     */
    public function setAccountGroups(array $accountGroups)
    {
        $this->values['AccountGroups'] = $accountGroups;
        return $this;
    }

    /**
     * Identifies the type of entity the account belongs to.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountEntityType|string $entityType
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->values['EntityType'] = $entityType;
        return $this;
    }

    /**
     * Set Tins
     *
     * @param TaxpayerIdentification[] $tins
     * @return $this
     */
    public function setTins(array $tins)
    {
        $this->values['Tins'] = $tins;
        return $this;
    }

    /**
     * Specifies the details about the correspondence of a welcome kit to the customer.
     *
     * @param WelcomeKitDetail $welcomeKit
     * @return $this
     */
    public function setWelcomeKit(WelcomeKitDetail $welcomeKit)
    {
        $this->values['WelcomeKit'] = $welcomeKit;
        return $this;
    }

    /**
     * Specifies additional properties of the customer's enterprise profile.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EnterpriseProfileAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Per-carrier specifications for which reference fields are to be used for multiplier grouping for this customer.
     *
     * @param GroupReferenceDetail[] $groupReferenceDetails
     * @return $this
     */
    public function setGroupReferenceDetails(array $groupReferenceDetails)
    {
        $this->values['GroupReferenceDetails'] = $groupReferenceDetails;
        return $this;
    }

    /**
     * Set CreationDate
     *
     * @param string $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->values['CreationDate'] = $creationDate;
        return $this;
    }

    /**
     * Accounts for acquired/associated companies that are linked to the enterprise profile
     *
     * @param AssociatedCompanyAccount[] $associatedAccounts
     * @return $this
     */
    public function setAssociatedAccounts(array $associatedAccounts)
    {
        $this->values['AssociatedAccounts'] = $associatedAccounts;
        return $this;
    }
}
