<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Bank information for the customer profile
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Id
 * @property string $AccountNumber
 * @property string $GiroNumber
 * @property string $Domicile
 * @property string $BranchId
 * @property Address $Address

 */
class CustomerProfileBankDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerProfileBankDetail';

    /**
     * The identification of the bank, where the customer has an account
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * The account number of the customer's bank account.
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
     * The giro number is a five-digit number, which replaces the name, bank code and account number of the beneficiary.
     *
     * @param string $giroNumber
     * @return $this
     */
    public function setGiroNumber($giroNumber)
    {
        $this->values['GiroNumber'] = $giroNumber;
        return $this;
    }

    /**
     * Identifies the place where a bill of exchange is made payable.
     *
     * @param string $domicile
     * @return $this
     */
    public function setDomicile($domicile)
    {
        $this->values['Domicile'] = $domicile;
        return $this;
    }

    /**
     * The identification of the branch where the customer has an account
     *
     * @param string $branchId
     * @return $this
     */
    public function setBranchId($branchId)
    {
        $this->values['BranchId'] = $branchId;
        return $this;
    }

    /**
     * Address of the bank branch
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }
}
