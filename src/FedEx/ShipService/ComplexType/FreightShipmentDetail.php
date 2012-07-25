<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'FreightShipmentDetail';

    /**
     * Account number used with FEDEX_FREIGHT service.
     *
     * @param string $FedExFreightAccountNumber
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
     * @param ContactAndAddress $FedExFreightBillingContactAndAddress
     * return FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress(ContactAndAddress $fedExFreightBillingContactAndAddress)
    {
        $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    
    /**
     * Identification values to be printed during creation of a Freight bill of lading.
     *
     * @param array[PrintedReference] $PrintedReferences
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
     * @param FreightShipmentRoleType $Role
     * return FreightShipmentDetail
     */
    public function setRole(\FedEx\ShipService\SimpleType\FreightShipmentRoleType $role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Designates which of the requester's tariffs will be used for rating.
     *
     * @param FreightAccountPaymentType $PaymentType
     * return FreightShipmentDetail
     */
    public function setPaymentType(\FedEx\ShipService\SimpleType\FreightAccountPaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Designates the terms of the "collect" payment for a Freight Shipment.
     *
     * @param FreightCollectTermsType $CollectTermsType
     * return FreightShipmentDetail
     */
    public function setCollectTermsType(\FedEx\ShipService\SimpleType\FreightCollectTermsType $collectTermsType)
    {
        $this->CollectTermsType = $collectTermsType;
        return $this;
    }
    
    /**
     * Identifies the declared value for the shipment
     *
     * @param Money $DeclaredValuePerUnit
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
     * @param string $DeclaredValueUnits
     * return FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits)
    {
        $this->DeclaredValueUnits = $declaredValueUnits;
        return $this;
    }
    
    /**
     * 
     *
     * @param LiabilityCoverageDetail $LiabilityCoverageDetail
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
     * @param array[string] $Coupons
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
     * @param nonNegativeInteger $TotalHandlingUnits
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
     * @param decimal $ClientDiscountPercent
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
     * @param Weight $PalletWeight
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
     * @param Dimensions $ShipmentDimensions
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
     * @param string $Comment
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
     * @param array[FreightSpecialServicePayment] $SpecialServicePayments
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
     * @param string $HazardousMaterialsEmergencyContactNumber
     * return FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber)
    {
        $this->HazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
        return $this;
    }
    
    /**
     * Details of the commodities in the shipment.
     *
     * @param array[FreightShipmentLineItem] $LineItems
     * return FreightShipmentDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    

    
}