<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details for a Freight profile.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ProfileContact[] $Contacts
 * @property AccountAliasDetail[] $Aliases
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PremierType|string $PremierType
 * @property TaxpayerIdentification[] $Tins
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\StatusType|string $ProfileStatus
 * @property string $CreationUserGroup
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountManagementStatusType|string $ManagementStatus
 * @property CustomerRevenueDetail $RevenueDetail
 * @property FreightAccountDetail $FreightAccountDetail
 * @property Money $CreditLimit
 * @property ProfileCreditStatusDetail $CreditStatusDetail
 * @property AccountGroupMembershipDetail[] $AccountGroups
 * @property string $CreationDate
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightProfileAttributeType|string[] $Attributes
 * @property TaxExemptionDetail[] $TaxExemptionDetails
 * @property CustomerProfileArchiveDetail $ArchiveDetail

 */
class FreightProfile extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightProfile';

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
     * Set Aliases
     *
     * @param AccountAliasDetail[] $aliases
     * @return $this
     */
    public function setAliases(array $aliases)
    {
        $this->values['Aliases'] = $aliases;
        return $this;
    }

    /**
     * Provides information about the priority customer call receives.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PremierType|string $premierType
     * @return $this
     */
    public function setPremierType($premierType)
    {
        $this->values['PremierType'] = $premierType;
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
     * Set ProfileStatus
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\StatusType|string $profileStatus
     * @return $this
     */
    public function setProfileStatus($profileStatus)
    {
        $this->values['ProfileStatus'] = $profileStatus;
        return $this;
    }

    /**
     * Set CreationUserGroup
     *
     * @param string $creationUserGroup
     * @return $this
     */
    public function setCreationUserGroup($creationUserGroup)
    {
        $this->values['CreationUserGroup'] = $creationUserGroup;
        return $this;
    }

    /**
     * Specifies additional details about the account status and status management.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountManagementStatusType|string $managementStatus
     * @return $this
     */
    public function setManagementStatus($managementStatus)
    {
        $this->values['ManagementStatus'] = $managementStatus;
        return $this;
    }

    /**
     * Specifies details used for billing and invoicing the account.
     *
     * @param CustomerRevenueDetail $revenueDetail
     * @return $this
     */
    public function setRevenueDetail(CustomerRevenueDetail $revenueDetail)
    {
        $this->values['RevenueDetail'] = $revenueDetail;
        return $this;
    }

    /**
     * Set FreightAccountDetail
     *
     * @param FreightAccountDetail $freightAccountDetail
     * @return $this
     */
    public function setFreightAccountDetail(FreightAccountDetail $freightAccountDetail)
    {
        $this->values['FreightAccountDetail'] = $freightAccountDetail;
        return $this;
    }

    /**
     * Set CreditLimit
     *
     * @param Money $creditLimit
     * @return $this
     */
    public function setCreditLimit(Money $creditLimit)
    {
        $this->values['CreditLimit'] = $creditLimit;
        return $this;
    }

    /**
     * Set CreditStatusDetail
     *
     * @param ProfileCreditStatusDetail $creditStatusDetail
     * @return $this
     */
    public function setCreditStatusDetail(ProfileCreditStatusDetail $creditStatusDetail)
    {
        $this->values['CreditStatusDetail'] = $creditStatusDetail;
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
     * Set Attributes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightProfileAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Set TaxExemptionDetails
     *
     * @param TaxExemptionDetail[] $taxExemptionDetails
     * @return $this
     */
    public function setTaxExemptionDetails(array $taxExemptionDetails)
    {
        $this->values['TaxExemptionDetails'] = $taxExemptionDetails;
        return $this;
    }

    /**
     * Describes when and why a profile was archived.
     *
     * @param CustomerProfileArchiveDetail $archiveDetail
     * @return $this
     */
    public function setArchiveDetail(CustomerProfileArchiveDetail $archiveDetail)
    {
        $this->values['ArchiveDetail'] = $archiveDetail;
        return $this;
    }
}
