<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AccountGroupMasterAccountDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $AccountNumber
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\OperatingCompanyType|string $OperatingCompany
 * @property string $PricingSubGroupCode
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\NationalAccountType|string $NationalAccountType

 */
class AccountGroupMasterAccountDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AccountGroupMasterAccountDetail';

    /**
     * Specifies the account number that is identified as the master account number for the account group. This is not specified for all possbile group codes. In case of Freight, this is can be the national account number.
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
     * Specifies the FedEx operating company under which the master account number is registered.
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
     * Specifies the pricing subgroup that the master account belongs to.
     *
     * @param string $pricingSubGroupCode
     * @return $this
     */
    public function setPricingSubGroupCode($pricingSubGroupCode)
    {
        $this->values['PricingSubGroupCode'] = $pricingSubGroupCode;
        return $this;
    }

    /**
     * Set NationalAccountType
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\NationalAccountType|string $nationalAccountType
     * @return $this
     */
    public function setNationalAccountType($nationalAccountType)
    {
        $this->values['NationalAccountType'] = $nationalAccountType;
        return $this;
    }
}
