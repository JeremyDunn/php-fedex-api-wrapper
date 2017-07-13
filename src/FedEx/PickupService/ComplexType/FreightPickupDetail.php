<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property Contact $ApprovedBy
 * @property \FedEx\PickupService\SimpleType\FreightAccountPaymentType|string $Payment
 * @property \FedEx\PickupService\SimpleType\FreightShipmentRoleType|string $Role
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
     * Identifies the type of payment to be tendered for the pickup.
     *
     * @param \FedEx\PickupService\SimpleType\FreightAccountPaymentType|string $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->values['Payment'] = $payment;
        return $this;
    }

    /**
     * Indicates the role of the party submitting the transaction.
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
     * Contact Information of the person submitting the pickup.
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
     * Identifies the details about the contents of the shipments to be picked up.
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
