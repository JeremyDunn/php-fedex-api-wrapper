<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightAccountDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $AccountNumber
 * @property string $Scac
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightAccountType|string $Type
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightTariffType|string $Tariff
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightAccountStatusType|string $Status

 */
class FreightAccountDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightAccountDetail';

    /**
     * Freight or National Freight account number.
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
     * Carrier code under which Freight account number was issued.
     *
     * @param string $scac
     * @return $this
     */
    public function setScac($scac)
    {
        $this->values['Scac'] = $scac;
        return $this;
    }

    /**
     * Usage of Freight account.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightAccountType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Kind of rating used for this account.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightTariffType|string $tariff
     * @return $this
     */
    public function setTariff($tariff)
    {
        $this->values['Tariff'] = $tariff;
        return $this;
    }

    /**
     * Account status unique to FedEx Freight.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\FreightAccountStatusType|string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }
}
