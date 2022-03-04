<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional details about an air cargo account.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $AirCargoSubAccountType
 * @property string[] $Synonyms
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BrokerPaymentType|string $BrokerPaymentType
 * @property string $BrokerAccountNumber
 * @property string $AirportIATAAgentId
 * @property string $PayorType
 * @property string $AssociatedAirportId
 * @property string $BillingInstructions

 */
class AirCargoDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AirCargoDetail';

    /**
     * Business mode for the air cargo account.
     *
     * @param string $airCargoSubAccountType
     * @return $this
     */
    public function setAirCargoSubAccountType($airCargoSubAccountType)
    {
        $this->values['AirCargoSubAccountType'] = $airCargoSubAccountType;
        return $this;
    }

    /**
     * Values of additional ids for the airport
     *
     * @param string $synonyms
     * @return $this
     */
    public function setSynonyms($synonyms)
    {
        $this->values['Synonyms'] = $synonyms;
        return $this;
    }

    /**
     * Specifies whether the broker is a paying or non-paying broker
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BrokerPaymentType|string $brokerPaymentType
     * @return $this
     */
    public function setBrokerPaymentType($brokerPaymentType)
    {
        $this->values['BrokerPaymentType'] = $brokerPaymentType;
        return $this;
    }

    /**
     * Account number of the broker.
     *
     * @param string $brokerAccountNumber
     * @return $this
     */
    public function setBrokerAccountNumber($brokerAccountNumber)
    {
        $this->values['BrokerAccountNumber'] = $brokerAccountNumber;
        return $this;
    }

    /**
     * Specifies the id of the IATA agent at the airport.
     *
     * @param string $airportIATAAgentId
     * @return $this
     */
    public function setAirportIATAAgentId($airportIATAAgentId)
    {
        $this->values['AirportIATAAgentId'] = $airportIATAAgentId;
        return $this;
    }

    /**
     * TBD
     *
     * @param string $payorType
     * @return $this
     */
    public function setPayorType($payorType)
    {
        $this->values['PayorType'] = $payorType;
        return $this;
    }

    /**
     * Specifies the airport id associated with the account.
     *
     * @param string $associatedAirportId
     * @return $this
     */
    public function setAssociatedAirportId($associatedAirportId)
    {
        $this->values['AssociatedAirportId'] = $associatedAirportId;
        return $this;
    }

    /**
     * Billing instructions for the air cargo account.
     *
     * @param string $billingInstructions
     * @return $this
     */
    public function setBillingInstructions($billingInstructions)
    {
        $this->values['BillingInstructions'] = $billingInstructions;
        return $this;
    }
}
