<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * Account number used with FEDEX_NATIONAL_FREIGHT service.
     *
     * @param string $fedExNationalFreightAccountNumber
     * @return FreightShipmentDetail
     */
    public function setFedExNationalFreightAccountNumber($fedExNationalFreightAccountNumber)
    {
        $this->FedExNationalFreightAccountNumber = $fedExNationalFreightAccountNumber;
        return $this;
    }
    
    /**
     * Returns Account number used with FEDEX_NATIONAL_FREIGHT service.
     *
     * @return string
     */
    public function getFedExNationalFreightAccountNumber()
    {
        return $this->FedExNationalFreightAccountNumber;
    }
    
    /**
     * Used for validating FedEx National Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @param ContactAndAddress $fedExNationalFreightBillingContactAndAddress
     * @return FreightShipmentDetail
     */
    public function setFedExNationalFreightBillingContactAndAddress(ContactAndAddress $fedExNationalFreightBillingContactAndAddress)
    {
        $this->FedExNationalFreightBillingContactAndAddress = $fedExNationalFreightBillingContactAndAddress;
        return $this;
    }
    
    /**
     * Returns Used for validating FedEx National Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @return ContactAndAddress
     */
    public function getFedExNationalFreightBillingContactAndAddress()
    {
        return $this->FedExNationalFreightBillingContactAndAddress;
    }
    
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param \FedEx\RateService\SimpleType\FreightShipmentRoleType|string $role
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
     * @return \FedEx\RateService\SimpleType\FreightShipmentRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    
    /**
     * Designates which of the requester's tariffs will be used for rating.
     *
     * @param \FedEx\RateService\SimpleType\FreightAccountPaymentType|string $paymentType
     * @return FreightShipmentDetail
     */
    public function setPaymentType($paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Returns Designates which of the requester's tariffs will be used for rating.
     *
     * @return \FedEx\RateService\SimpleType\FreightAccountPaymentType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
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