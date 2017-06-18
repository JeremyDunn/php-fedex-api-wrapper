<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data identifying the party responsible for payment for a service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $AccountNumber
 * @property string $CountryCode
 * @property AssociatedAccount[] $AssociatedAccounts

 */
class Payor extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Payor';

    /**
     * Identifies the FedEx account number assigned to the payor.
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
     * Identifies the country of the payor.
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['CountryCode'] = $countryCode;
        return $this;
    }

    /**
     * Set AssociatedAccounts
     *
     * @param AssociatedAccount[] $associatedAccounts
     * @return $this
     */
    public function setAssociatedAccounts(array $associatedAccounts)
    {
        $this->values['AssociatedAccounts'] = $associatedAccounts;
        return $this;
    }
}
