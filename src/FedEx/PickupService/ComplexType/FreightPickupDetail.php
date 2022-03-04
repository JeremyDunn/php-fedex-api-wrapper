<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightPickupDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property Contact $ApprovedBy
 * @property \FedEx\PickupService\SimpleType\PaymentType|string $Payment
 * @property \FedEx\PickupService\SimpleType\FreightShipmentRoleType|string $Role
 * @property Party $AlternateBilling
 * @property Contact $SubmittedBy
 * @property FreightPickupLineItem[] $LineItems

 */
class FreightPickupDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightPickupDetail';

    /**
     * Contact Information of origin service center representative that authorized the pickup
     *
     * @param Contact $approvedBy
     * @return $this
     */
    public function setApprovedBy(Contact $approvedBy)
    {
        $this->values['ApprovedBy'] = $approvedBy;
        return $this;
    }

    /**
     * Set Payment
     *
     * @param \FedEx\PickupService\SimpleType\PaymentType|string $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->values['Payment'] = $payment;
        return $this;
    }

    /**
     * Set Role
     *
     * @param \FedEx\PickupService\SimpleType\FreightShipmentRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }

    /**
     * Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     *
     * @param Party $alternateBilling
     * @return $this
     */
    public function setAlternateBilling(Party $alternateBilling)
    {
        $this->values['AlternateBilling'] = $alternateBilling;
        return $this;
    }

    /**
     * Set SubmittedBy
     *
     * @param Contact $submittedBy
     * @return $this
     */
    public function setSubmittedBy(Contact $submittedBy)
    {
        $this->values['SubmittedBy'] = $submittedBy;
        return $this;
    }

    /**
     * Set LineItems
     *
     * @param FreightPickupLineItem[] $lineItems
     * @return $this
     */
    public function setLineItems(array $lineItems)
    {
        $this->values['LineItems'] = $lineItems;
        return $this;
    }
}
