<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightShipmentDetail';

    /**
     * Account number used with FEDEX_FREIGHT service.
     *
     * @param string $fedExFreightAccountNumber
     * return FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber)
    {
        $this->FedExFreightAccountNumber = $fedExFreightAccountNumber;
        return $this;
    }
    
    /**
     * Used for validating FedEx Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @param ContactAndAddress $fedExFreightBillingContactAndAddress
     * return FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress(ContactAndAddress $fedExFreightBillingContactAndAddress)
    {
        $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    
    /**
     * Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     *
     * @param Party $alternateBilling
     * return FreightShipmentDetail
     */
    public function setAlternateBilling(Party $alternateBilling)
    {
        $this->AlternateBilling = $alternateBilling;
        return $this;
    }
    
    /**
     * Identification values to be printed during creation of a Freight bill of lading.
     *
     * @param PrintedReference[] $printedReferences
     * return FreightShipmentDetail
     */
    public function setPrintedReferences(array $printedReferences)
    {
        $this->PrintedReferences = $printedReferences;
        return $this;
    }
    
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param \FedEx\ShipService\SimpleType\FreightShipmentRoleType|string $role
     * return FreightShipmentDetail
     */
    public function setRole($role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Designates the terms of the "collect" payment for a Freight Shipment.
     *
     * @param \FedEx\ShipService\SimpleType\FreightCollectTermsType|string $collectTermsType
     * return FreightShipmentDetail
     */
    public function setCollectTermsType($collectTermsType)
    {
        $this->CollectTermsType = $collectTermsType;
        return $this;
    }
    
    /**
     * Identifies the declared value for the shipment
     *
     * @param Money $declaredValuePerUnit
     * return FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit(Money $declaredValuePerUnit)
    {
        $this->DeclaredValuePerUnit = $declaredValuePerUnit;
        return $this;
    }
    
    /**
     * Identifies the declared value units corresponding to the above defined declared value
     *
     * @param string $declaredValueUnits
     * return FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits)
    {
        $this->DeclaredValueUnits = $declaredValueUnits;
        return $this;
    }
    
    /**
     * Set LiabilityCoverageDetail
     *
     * @param LiabilityCoverageDetail $liabilityCoverageDetail
     * return FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail(LiabilityCoverageDetail $liabilityCoverageDetail)
    {
        $this->LiabilityCoverageDetail = $liabilityCoverageDetail;
        return $this;
    }
    
    /**
     * Identifiers for promotional discounts offered to customers.
     *
     * @param string[] $coupons
     * return FreightShipmentDetail
     */
    public function setCoupons(array $coupons)
    {
        $this->Coupons = $coupons;
        return $this;
    }
    
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing).
     *
     * @param nonNegativeInteger $totalHandlingUnits
     * return FreightShipmentDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Estimated discount rate provided by client for unsecured rate quote.
     *
     * @param decimal $clientDiscountPercent
     * return FreightShipmentDetail
     */
    public function setClientDiscountPercent($clientDiscountPercent)
    {
        $this->ClientDiscountPercent = $clientDiscountPercent;
        return $this;
    }
    
    /**
     * Total weight of pallets used in shipment.
     *
     * @param Weight $palletWeight
     * return FreightShipmentDetail
     */
    public function setPalletWeight(Weight $palletWeight)
    {
        $this->PalletWeight = $palletWeight;
        return $this;
    }
    
    /**
     * Overall shipment dimensions.
     *
     * @param Dimensions $shipmentDimensions
     * return FreightShipmentDetail
     */
    public function setShipmentDimensions(Dimensions $shipmentDimensions)
    {
        $this->ShipmentDimensions = $shipmentDimensions;
        return $this;
    }
    
    /**
     * Description for the shipment.
     *
     * @param string $comment
     * return FreightShipmentDetail
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;
        return $this;
    }
    
    /**
     * Specifies which party will pay surcharges for any special services which support split billing.
     *
     * @param FreightSpecialServicePayment[] $specialServicePayments
     * return FreightShipmentDetail
     */
    public function setSpecialServicePayments(array $specialServicePayments)
    {
        $this->SpecialServicePayments = $specialServicePayments;
        return $this;
    }
    
    /**
     * Must be populated if any line items contain hazardous materials.
     *
     * @param string $hazardousMaterialsEmergencyContactNumber
     * return FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber)
    {
        $this->HazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
        return $this;
    }
    
    /**
     * Set HazardousMaterialsOfferor
     *
     * @param string $hazardousMaterialsOfferor
     * return FreightShipmentDetail
     */
    public function setHazardousMaterialsOfferor($hazardousMaterialsOfferor)
    {
        $this->HazardousMaterialsOfferor = $hazardousMaterialsOfferor;
        return $this;
    }
    
    /**
     * Details of the commodities in the shipment.
     *
     * @param FreightShipmentLineItem[] $lineItems
     * return FreightShipmentDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    

    
}