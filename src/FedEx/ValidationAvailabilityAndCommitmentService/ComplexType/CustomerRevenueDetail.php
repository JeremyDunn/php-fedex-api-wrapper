<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details used for billing and invoicing the account.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property float $CreditLimit
 * @property string $DeclinedReason
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BillingAccountAttributeType|string[] $BillingAttributes
 * @property string $ClearanceBillingCycle
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerBillingSettlementLevelType|string $BillingSettlementLevel
 * @property int $BillingExtendedInclusionDays
 * @property string $BillingMedium
 * @property string $InternationalBillingMedium
 * @property string $InternationalTransportationInvoiceBypassCode
 * @property string $BillingCycle
 * @property string $InternationalBillingCycle
 * @property int $BillingClosingDay
 * @property string $BillingRestrictionCode
 * @property string $CashOnlyDate
 * @property string $ReceivershipDate
 * @property string $ReceivershipAccountNumber
 * @property string $PreferredCurrencyType
 * @property string $CollectionZone
 * @property int $NumberOfDaysToPayInvoice
 * @property int $NumberOfDaysToPayDuties
 * @property string $AgentTypeCode

 */
class CustomerRevenueDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerRevenueDetail';

    /**
     * Set CreditLimit
     *
     * @param float $creditLimit
     * @return $this
     */
    public function setCreditLimit($creditLimit)
    {
        $this->values['CreditLimit'] = $creditLimit;
        return $this;
    }

    /**
     * Set DeclinedReason
     *
     * @param string $declinedReason
     * @return $this
     */
    public function setDeclinedReason($declinedReason)
    {
        $this->values['DeclinedReason'] = $declinedReason;
        return $this;
    }

    /**
     * Set BillingAttributes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BillingAccountAttributeType[]|string[] $billingAttributes
     * @return $this
     */
    public function setBillingAttributes(array $billingAttributes)
    {
        $this->values['BillingAttributes'] = $billingAttributes;
        return $this;
    }

    /**
     * Set ClearanceBillingCycle
     *
     * @param string $clearanceBillingCycle
     * @return $this
     */
    public function setClearanceBillingCycle($clearanceBillingCycle)
    {
        $this->values['ClearanceBillingCycle'] = $clearanceBillingCycle;
        return $this;
    }

    /**
     * Set BillingSettlementLevel
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerBillingSettlementLevelType|string $billingSettlementLevel
     * @return $this
     */
    public function setBillingSettlementLevel($billingSettlementLevel)
    {
        $this->values['BillingSettlementLevel'] = $billingSettlementLevel;
        return $this;
    }

    /**
     * Set BillingExtendedInclusionDays
     *
     * @param int $billingExtendedInclusionDays
     * @return $this
     */
    public function setBillingExtendedInclusionDays($billingExtendedInclusionDays)
    {
        $this->values['BillingExtendedInclusionDays'] = $billingExtendedInclusionDays;
        return $this;
    }

    /**
     * Set BillingMedium
     *
     * @param string $billingMedium
     * @return $this
     */
    public function setBillingMedium($billingMedium)
    {
        $this->values['BillingMedium'] = $billingMedium;
        return $this;
    }

    /**
     * Set InternationalBillingMedium
     *
     * @param string $internationalBillingMedium
     * @return $this
     */
    public function setInternationalBillingMedium($internationalBillingMedium)
    {
        $this->values['InternationalBillingMedium'] = $internationalBillingMedium;
        return $this;
    }

    /**
     * Set InternationalTransportationInvoiceBypassCode
     *
     * @param string $internationalTransportationInvoiceBypassCode
     * @return $this
     */
    public function setInternationalTransportationInvoiceBypassCode($internationalTransportationInvoiceBypassCode)
    {
        $this->values['InternationalTransportationInvoiceBypassCode'] = $internationalTransportationInvoiceBypassCode;
        return $this;
    }

    /**
     * Set BillingCycle
     *
     * @param string $billingCycle
     * @return $this
     */
    public function setBillingCycle($billingCycle)
    {
        $this->values['BillingCycle'] = $billingCycle;
        return $this;
    }

    /**
     * Set InternationalBillingCycle
     *
     * @param string $internationalBillingCycle
     * @return $this
     */
    public function setInternationalBillingCycle($internationalBillingCycle)
    {
        $this->values['InternationalBillingCycle'] = $internationalBillingCycle;
        return $this;
    }

    /**
     * Set BillingClosingDay
     *
     * @param int $billingClosingDay
     * @return $this
     */
    public function setBillingClosingDay($billingClosingDay)
    {
        $this->values['BillingClosingDay'] = $billingClosingDay;
        return $this;
    }

    /**
     * Set BillingRestrictionCode
     *
     * @param string $billingRestrictionCode
     * @return $this
     */
    public function setBillingRestrictionCode($billingRestrictionCode)
    {
        $this->values['BillingRestrictionCode'] = $billingRestrictionCode;
        return $this;
    }

    /**
     * Set CashOnlyDate
     *
     * @param string $cashOnlyDate
     * @return $this
     */
    public function setCashOnlyDate($cashOnlyDate)
    {
        $this->values['CashOnlyDate'] = $cashOnlyDate;
        return $this;
    }

    /**
     * Set ReceivershipDate
     *
     * @param string $receivershipDate
     * @return $this
     */
    public function setReceivershipDate($receivershipDate)
    {
        $this->values['ReceivershipDate'] = $receivershipDate;
        return $this;
    }

    /**
     * Set ReceivershipAccountNumber
     *
     * @param string $receivershipAccountNumber
     * @return $this
     */
    public function setReceivershipAccountNumber($receivershipAccountNumber)
    {
        $this->values['ReceivershipAccountNumber'] = $receivershipAccountNumber;
        return $this;
    }

    /**
     * Specifies the customer's preferred billing currency type to be used to print invoices and remit payment. If not specified, the currency type defaults to the currency based on the customer payor's country code.
     *
     * @param string $preferredCurrencyType
     * @return $this
     */
    public function setPreferredCurrencyType($preferredCurrencyType)
    {
        $this->values['PreferredCurrencyType'] = $preferredCurrencyType;
        return $this;
    }

    /**
     * Specifies the collection zone assigned to the customer's account. In some countries, the invoices are hand delivered to the customers. The collection zone is used to organise (gather and sort) all the invoices for convenience of the FedEx personnel making deliveries. The hand delivery of invoices is performed in several LAC countries such as Mexico.
     *
     * @param string $collectionZone
     * @return $this
     */
    public function setCollectionZone($collectionZone)
    {
        $this->values['CollectionZone'] = $collectionZone;
        return $this;
    }

    /**
     * Maximum number of days the customer has to pay the invoice. The value must be -1 when creating an account to indicate the value is unspecified.
     *
     * @param int $numberOfDaysToPayInvoice
     * @return $this
     */
    public function setNumberOfDaysToPayInvoice($numberOfDaysToPayInvoice)
    {
        $this->values['NumberOfDaysToPayInvoice'] = $numberOfDaysToPayInvoice;
        return $this;
    }

    /**
     * Maximum number of days the customer has to pay the duties. The value must be -1 when creating an account to indicate the value is unspecified.
     *
     * @param int $numberOfDaysToPayDuties
     * @return $this
     */
    public function setNumberOfDaysToPayDuties($numberOfDaysToPayDuties)
    {
        $this->values['NumberOfDaysToPayDuties'] = $numberOfDaysToPayDuties;
        return $this;
    }

    /**
     * Set AgentTypeCode
     *
     * @param string $agentTypeCode
     * @return $this
     */
    public function setAgentTypeCode($agentTypeCode)
    {
        $this->values['AgentTypeCode'] = $agentTypeCode;
        return $this;
    }
}
