<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details for an Express profile.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ProfileContact[] $Contacts
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountStatusType|string $AccountStatus
 * @property string $CreationUserGroup
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountManagementStatusType|string $ManagementStatus
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\StatusType|string $ProfileStatus
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ExpressAccountType|string $AccountType
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PremierType|string $PremierType
 * @property TaxpayerIdentification[] $Tins
 * @property TaxExemptionDetail[] $TaxExemptionDetails
 * @property AccountGroupMembershipDetail[] $AccountGroups
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ExpressProfileAttributeType|string[] $Attributes
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerCashType|string $CashType
 * @property CreditCard $CreditCard
 * @property string $FreightChargesPaymentType
 * @property Money $CreditLimit
 * @property ProfileCreditStatusDetail $CreditStatusDetail
 * @property EDIMasterDetail $EdiMasterDetail
 * @property string $CostCenterAccountNumber
 * @property string $BillToAccountNumber
 * @property GroundProfile $GroundProfile
 * @property CustomerShippingVolumeDetail $ShippingVolumeDetail
 * @property CustomerSuppliesDetail $SuppliesDetail
 * @property int $StationNumber
 * @property string $StationId
 * @property AirCargoDetail $AirCargoDetail
 * @property CustomerProfileBankDetail[] $BankDetails
 * @property DirectDebitDetail[] $DirectDebitDetails
 * @property CustomerProfileVATDetail[] $VatDetails
 * @property InterlineCustomerDetail $InterlineDetail
 * @property CustomerRevenueDetail $RevenueDetail
 * @property EnterpriseCustomerDiscountDetail $DiscountDetail
 * @property CustomerDiscountDetail[] $DiscountDetails
 * @property FedExEmployee $SalesContact
 * @property SmartPostAccountDetail $SmartPostAccountDetail
 * @property CustomerAccountFranchiseeDetail $FranchiseeDetail
 * @property string $CreationDate
 * @property CustomerProfileArchiveDetail $ArchiveDetail

 */
class ExpressProfile extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExpressProfile';

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
     * Specifies the account type associated with the Express profile for the account.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ExpressAccountType|string $accountType
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->values['AccountType'] = $accountType;
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
     * Set Attributes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ExpressProfileAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Indication of cash standing, to assist with rating and eligibility.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerCashType|string $cashType
     * @return $this
     */
    public function setCashType($cashType)
    {
        $this->values['CashType'] = $cashType;
        return $this;
    }

    /**
     * Set CreditCard
     *
     * @param CreditCard $creditCard
     * @return $this
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->values['CreditCard'] = $creditCard;
        return $this;
    }

    /**
     * Identifies that entity who is responsible for paying for freight charges.
     *
     * @param string $freightChargesPaymentType
     * @return $this
     */
    public function setFreightChargesPaymentType($freightChargesPaymentType)
    {
        $this->values['FreightChargesPaymentType'] = $freightChargesPaymentType;
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
     * Set EdiMasterDetail
     *
     * @param EDIMasterDetail $ediMasterDetail
     * @return $this
     */
    public function setEdiMasterDetail(EDIMasterDetail $ediMasterDetail)
    {
        $this->values['EdiMasterDetail'] = $ediMasterDetail;
        return $this;
    }

    /**
     * This is the account number associated with the customer's cost center.
     *
     * @param string $costCenterAccountNumber
     * @return $this
     */
    public function setCostCenterAccountNumber($costCenterAccountNumber)
    {
        $this->values['CostCenterAccountNumber'] = $costCenterAccountNumber;
        return $this;
    }

    /**
     * This is the account number used to bill the invoices to. For example, a department at a university has a shipping account number but uses the university's account number to bill invoices to.
     *
     * @param string $billToAccountNumber
     * @return $this
     */
    public function setBillToAccountNumber($billToAccountNumber)
    {
        $this->values['BillToAccountNumber'] = $billToAccountNumber;
        return $this;
    }

    /**
     * Set GroundProfile
     *
     * @param GroundProfile $groundProfile
     * @return $this
     */
    public function setGroundProfile(GroundProfile $groundProfile)
    {
        $this->values['GroundProfile'] = $groundProfile;
        return $this;
    }

    /**
     * Set ShippingVolumeDetail
     *
     * @param CustomerShippingVolumeDetail $shippingVolumeDetail
     * @return $this
     */
    public function setShippingVolumeDetail(CustomerShippingVolumeDetail $shippingVolumeDetail)
    {
        $this->values['ShippingVolumeDetail'] = $shippingVolumeDetail;
        return $this;
    }

    /**
     * Set SuppliesDetail
     *
     * @param CustomerSuppliesDetail $suppliesDetail
     * @return $this
     */
    public function setSuppliesDetail(CustomerSuppliesDetail $suppliesDetail)
    {
        $this->values['SuppliesDetail'] = $suppliesDetail;
        return $this;
    }

    /**
     * For the US and Canada, it is derived from the shipper postal code. For international customers, it is a result of the station alpha id.
     *
     * @param int $stationNumber
     * @return $this
     */
    public function setStationNumber($stationNumber)
    {
        $this->values['StationNumber'] = $stationNumber;
        return $this;
    }

    /**
     * A free-form field used primarily for accounts that may have numerous branches. This id helps to distinguish one store from another, especially within the same city.
     *
     * @param string $stationId
     * @return $this
     */
    public function setStationId($stationId)
    {
        $this->values['StationId'] = $stationId;
        return $this;
    }

    /**
     * Set AirCargoDetail
     *
     * @param AirCargoDetail $airCargoDetail
     * @return $this
     */
    public function setAirCargoDetail(AirCargoDetail $airCargoDetail)
    {
        $this->values['AirCargoDetail'] = $airCargoDetail;
        return $this;
    }

    /**
     * Specifies the details about the bank provided by the customer. These banking details can be used when conducting business with the customer.
     *
     * @param CustomerProfileBankDetail[] $bankDetails
     * @return $this
     */
    public function setBankDetails(array $bankDetails)
    {
        $this->values['BankDetails'] = $bankDetails;
        return $this;
    }

    /**
     * Set DirectDebitDetails
     *
     * @param DirectDebitDetail[] $directDebitDetails
     * @return $this
     */
    public function setDirectDebitDetails(array $directDebitDetails)
    {
        $this->values['DirectDebitDetails'] = $directDebitDetails;
        return $this;
    }

    /**
     * Specifies the details about the VAT (value added tax) handling for the customer's account.
     *
     * @param CustomerProfileVATDetail[] $vatDetails
     * @return $this
     */
    public function setVatDetails(array $vatDetails)
    {
        $this->values['VatDetails'] = $vatDetails;
        return $this;
    }

    /**
     * Specifies the details of an interline customer.
     *
     * @param InterlineCustomerDetail $interlineDetail
     * @return $this
     */
    public function setInterlineDetail(InterlineCustomerDetail $interlineDetail)
    {
        $this->values['InterlineDetail'] = $interlineDetail;
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
     * Set DiscountDetail
     *
     * @param EnterpriseCustomerDiscountDetail $discountDetail
     * @return $this
     */
    public function setDiscountDetail(EnterpriseCustomerDiscountDetail $discountDetail)
    {
        $this->values['DiscountDetail'] = $discountDetail;
        return $this;
    }

    /**
     * Set DiscountDetails
     *
     * @param CustomerDiscountDetail[] $discountDetails
     * @return $this
     */
    public function setDiscountDetails(array $discountDetails)
    {
        $this->values['DiscountDetails'] = $discountDetails;
        return $this;
    }

    /**
     * Details about the FedEx Sales representative assigned to this account.
     *
     * @param FedExEmployee $salesContact
     * @return $this
     */
    public function setSalesContact(FedExEmployee $salesContact)
    {
        $this->values['SalesContact'] = $salesContact;
        return $this;
    }

    /**
     * Set SmartPostAccountDetail
     *
     * @param SmartPostAccountDetail $smartPostAccountDetail
     * @return $this
     */
    public function setSmartPostAccountDetail(SmartPostAccountDetail $smartPostAccountDetail)
    {
        $this->values['SmartPostAccountDetail'] = $smartPostAccountDetail;
        return $this;
    }

    /**
     * Describes the Franchisee relationship(s) of this customer account.
     *
     * @param CustomerAccountFranchiseeDetail $franchiseeDetail
     * @return $this
     */
    public function setFranchiseeDetail(CustomerAccountFranchiseeDetail $franchiseeDetail)
    {
        $this->values['FranchiseeDetail'] = $franchiseeDetail;
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
