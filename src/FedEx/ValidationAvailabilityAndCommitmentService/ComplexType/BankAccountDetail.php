<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * BankAccountDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $AccountNumber
 * @property ParsedContact[] $AccountHolders
 * @property string $IbanCode
 * @property string $BusinessIdentifierCode
 * @property string $SortCode

 */
class BankAccountDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'BankAccountDetail';

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
     * Set AccountHolders
     *
     * @param ParsedContact[] $accountHolders
     * @return $this
     */
    public function setAccountHolders(array $accountHolders)
    {
        $this->values['AccountHolders'] = $accountHolders;
        return $this;
    }

    /**
     * Set IbanCode
     *
     * @param string $ibanCode
     * @return $this
     */
    public function setIbanCode($ibanCode)
    {
        $this->values['IbanCode'] = $ibanCode;
        return $this;
    }

    /**
     * Also known as the SWIFT code.
     *
     * @param string $businessIdentifierCode
     * @return $this
     */
    public function setBusinessIdentifierCode($businessIdentifierCode)
    {
        $this->values['BusinessIdentifierCode'] = $businessIdentifierCode;
        return $this;
    }

    /**
     * Set SortCode
     *
     * @param string $sortCode
     * @return $this
     */
    public function setSortCode($sortCode)
    {
        $this->values['SortCode'] = $sortCode;
        return $this;
    }
}
