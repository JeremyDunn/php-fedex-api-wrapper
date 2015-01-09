<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightPickupDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightPickupDetail';

    /**
     * Contact Information of origin service center representative that authorized the pickup
     *
     * @param Contact $approvedBy
     * @return FreightPickupDetail
     */
    public function setApprovedBy(Contact $approvedBy)
    {
        $this->ApprovedBy = $approvedBy;
        return $this;
    }
    
    /**
     * Returns Contact Information of origin service center representative that authorized the pickup
     *
     * @return Contact
     */
    public function getApprovedBy()
    {
        return $this->ApprovedBy;
    }
    
    /**
     * Identifies the type of payment to be tendered for the pickup.
     *
     * @param \FedEx\Pickup\SimpleType\FreightAccountPaymentType|string $payment
     * @return FreightPickupDetail
     */
    public function setPayment($payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    
    /**
     * Returns Identifies the type of payment to be tendered for the pickup.
     *
     * @return \FedEx\Pickup\SimpleType\FreightAccountPaymentType|string
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param \FedEx\Pickup\SimpleType\FreightShipmentRoleType|string $role
     * @return FreightPickupDetail
     */
    public function setRole($role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Returns Indicates the role of the party submitting the transaction.
     *
     * @return \FedEx\Pickup\SimpleType\FreightShipmentRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    
    /**
     * Contact Information of the person submitting the pickup.
     *
     * @param Contact $submittedBy
     * @return FreightPickupDetail
     */
    public function setSubmittedBy(Contact $submittedBy)
    {
        $this->SubmittedBy = $submittedBy;
        return $this;
    }
    
    /**
     * Returns Contact Information of the person submitting the pickup.
     *
     * @return Contact
     */
    public function getSubmittedBy()
    {
        return $this->SubmittedBy;
    }
    
    /**
     * Identifies the details about the contents of the shipments to be picked up.
     *
     * @param FreightPickupLineItem[] $lineItems
     * @return FreightPickupDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    
    /**
     * Returns Identifies the details about the contents of the shipments to be picked up.
     *
     * @return FreightPickupLineItem[]
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    

    
}