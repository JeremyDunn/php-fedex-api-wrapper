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
     * @return FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber)
    {
        $this->FedExFreightAccountNumber = $fedExFreightAccountNumber;
        return $this;
    }
    
    /**
     * Returns Account number used with FEDEX_FREIGHT service.
     *
     * @return string
     */
    public function getFedExFreightAccountNumber()
    {
        return $this->FedExFreightAccountNumber;
    }
    
    /**
     * Used for validating FedEx Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @param ContactAndAddress $fedExFreightBillingContactAndAddress
     * @return FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress(ContactAndAddress $fedExFreightBillingContactAndAddress)
    {
        $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    
    /**
     * Returns Used for validating FedEx Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @return ContactAndAddress
     */
    public function getFedExFreightBillingContactAndAddress()
    {
        return $this->FedExFreightBillingContactAndAddress;
    }
    
    /**
     * Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     *
     * @param Party $alternateBilling
     * @return FreightShipmentDetail
     */
    public function setAlternateBilling(Party $alternateBilling)
    {
        $this->AlternateBilling = $alternateBilling;
        return $this;
    }
    
    /**
     * Returns Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     *
     * @return Party
     */
    public function getAlternateBilling()
    {
        return $this->AlternateBilling;
    }
    
    /**
     * Identification values to be printed during creation of a Freight bill of lading.
     *
     * @param PrintedReference[] $printedReferences
     * @return FreightShipmentDetail
     */
    public function setPrintedReferences(array $printedReferences)
    {
        $this->PrintedReferences = $printedReferences;
        return $this;
    }
    
    /**
     * Returns Identification values to be printed during creation of a Freight bill of lading.
     *
     * @return PrintedReference[]
     */
    public function getPrintedReferences()
    {
        return $this->PrintedReferences;
    }
    
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param \FedEx\ShipService\SimpleType\FreightShipmentRoleType|string $role
     * @return FreightShipmentDetail
     */
    public function setRole($role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Returns Indicates the role of the party submitting the transaction.
     *
     * @return \FedEx\ShipService\SimpleType\FreightShipmentRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    
    /**
     * Designates the terms of the "collect" payment for a Freight Shipment.
     *
     * @param \FedEx\ShipService\SimpleType\FreightCollectTermsType|string $collectTermsType
     * @return FreightShipmentDetail
     */
    public function setCollectTermsType($collectTermsType)
    {
        $this->CollectTermsType = $collectTermsType;
        return $this;
    }
    
    /**
     * Returns Designates the terms of the "collect" payment for a Freight Shipment.
     *
     * @return \FedEx\ShipService\SimpleType\FreightCollectTermsType|string
     */
    public function getCollectTermsType()
    {
        return $this->CollectTermsType;
    }
    
    /**
     * Identifies the declared value for the shipment
     *
     * @param Money $declaredValuePerUnit
     * @return FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit(Money $declaredValuePerUnit)
    {
        $this->DeclaredValuePerUnit = $declaredValuePerUnit;
        return $this;
    }
    
    /**
     * Returns Identifies the declared value for the shipment
     *
     * @return Money
     */
    public function getDeclaredValuePerUnit()
    {
        return $this->DeclaredValuePerUnit;
    }
    
    /**
     * Identifies the declared value units corresponding to the above defined declared value
     *
     * @param string $declaredValueUnits
     * @return FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits)
    {
        $this->DeclaredValueUnits = $declaredValueUnits;
        return $this;
    }
    
    /**
     * Returns Identifies the declared value units corresponding to the above defined declared value
     *
     * @return string
     */
    public function getDeclaredValueUnits()
    {
        return $this->DeclaredValueUnits;
    }
    
    /**
     * Set LiabilityCoverageDetail
     *
     * @param LiabilityCoverageDetail $liabilityCoverageDetail
     * @return FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail(LiabilityCoverageDetail $liabilityCoverageDetail)
    {
        $this->LiabilityCoverageDetail = $liabilityCoverageDetail;
        return $this;
    }
    
    /**
     * Returns Set LiabilityCoverageDetail
     *
     * @return LiabilityCoverageDetail
     */
    public function getLiabilityCoverageDetail()
    {
        return $this->LiabilityCoverageDetail;
    }
    
    /**
     * Identifiers for promotional discounts offered to customers.
     *
     * @param string[] $coupons
     * @return FreightShipmentDetail
     */
    public function setCoupons(array $coupons)
    {
        $this->Coupons = $coupons;
        return $this;
    }
    
    /**
     * Returns Identifiers for promotional discounts offered to customers.
     *
     * @return string[]
     */
    public function getCoupons()
    {
        return $this->Coupons;
    }
    
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing).
     *
     * @param nonNegativeInteger $totalHandlingUnits
     * @return FreightShipmentDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Returns Total number of individual handling units in the entire shipment (for unit pricing).
     *
     * @return nonNegativeInteger
     */
    public function getTotalHandlingUnits()
    {
        return $this->TotalHandlingUnits;
    }
    
    /**
     * Estimated discount rate provided by client for unsecured rate quote.
     *
     * @param decimal $clientDiscountPercent
     * @return FreightShipmentDetail
     */
    public function setClientDiscountPercent($clientDiscountPercent)
    {
        $this->ClientDiscountPercent = $clientDiscountPercent;
        return $this;
    }
    
    /**
     * Returns Estimated discount rate provided by client for unsecured rate quote.
     *
     * @return decimal
     */
    public function getClientDiscountPercent()
    {
        return $this->ClientDiscountPercent;
    }
    
    /**
     * Total weight of pallets used in shipment.
     *
     * @param Weight $palletWeight
     * @return FreightShipmentDetail
     */
    public function setPalletWeight(Weight $palletWeight)
    {
        $this->PalletWeight = $palletWeight;
        return $this;
    }
    
    /**
     * Returns Total weight of pallets used in shipment.
     *
     * @return Weight
     */
    public function getPalletWeight()
    {
        return $this->PalletWeight;
    }
    
    /**
     * Overall shipment dimensions.
     *
     * @param Dimensions $shipmentDimensions
     * @return FreightShipmentDetail
     */
    public function setShipmentDimensions(Dimensions $shipmentDimensions)
    {
        $this->ShipmentDimensions = $shipmentDimensions;
        return $this;
    }
    
    /**
     * Returns Overall shipment dimensions.
     *
     * @return Dimensions
     */
    public function getShipmentDimensions()
    {
        return $this->ShipmentDimensions;
    }
    
    /**
     * Description for the shipment.
     *
     * @param string $comment
     * @return FreightShipmentDetail
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;
        return $this;
    }
    
    /**
     * Returns Description for the shipment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }
    
    /**
     * Specifies which party will pay surcharges for any special services which support split billing.
     *
     * @param FreightSpecialServicePayment[] $specialServicePayments
     * @return FreightShipmentDetail
     */
    public function setSpecialServicePayments(array $specialServicePayments)
    {
        $this->SpecialServicePayments = $specialServicePayments;
        return $this;
    }
    
    /**
     * Returns Specifies which party will pay surcharges for any special services which support split billing.
     *
     * @return FreightSpecialServicePayment[]
     */
    public function getSpecialServicePayments()
    {
        return $this->SpecialServicePayments;
    }
    
    /**
     * Must be populated if any line items contain hazardous materials.
     *
     * @param string $hazardousMaterialsEmergencyContactNumber
     * @return FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber)
    {
        $this->HazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
        return $this;
    }
    
    /**
     * Returns Must be populated if any line items contain hazardous materials.
     *
     * @return string
     */
    public function getHazardousMaterialsEmergencyContactNumber()
    {
        return $this->HazardousMaterialsEmergencyContactNumber;
    }
    
    /**
     * Set HazardousMaterialsOfferor
     *
     * @param string $hazardousMaterialsOfferor
     * @return FreightShipmentDetail
     */
    public function setHazardousMaterialsOfferor($hazardousMaterialsOfferor)
    {
        $this->HazardousMaterialsOfferor = $hazardousMaterialsOfferor;
        return $this;
    }
    
    /**
     * Returns Set HazardousMaterialsOfferor
     *
     * @return string
     */
    public function getHazardousMaterialsOfferor()
    {
        return $this->HazardousMaterialsOfferor;
    }
    
    /**
     * Details of the commodities in the shipment.
     *
     * @param FreightShipmentLineItem[] $lineItems
     * @return FreightShipmentDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    
    /**
     * Returns Details of the commodities in the shipment.
     *
     * @return FreightShipmentLineItem[]
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    

    
}