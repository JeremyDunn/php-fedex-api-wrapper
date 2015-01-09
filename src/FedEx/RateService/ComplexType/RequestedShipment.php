<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RequestedShipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RequestedShipment
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RequestedShipment';

    /**
     * Set ShipTimestamp
     *
     * @param dateTime $shipTimestamp
     * @return RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Returns Set ShipTimestamp
     *
     * @return dateTime
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    
    /**
     * Set DropoffType
     *
     * @param \FedEx\RateService\SimpleType\DropoffType|string $dropoffType
     * @return RequestedShipment
     */
    public function setDropoffType($dropoffType)
    {
        $this->DropoffType = $dropoffType;
        return $this;
    }
    
    /**
     * Returns Set DropoffType
     *
     * @return \FedEx\RateService\SimpleType\DropoffType|string
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    
    /**
     * Set ServiceType
     *
     * @param \FedEx\RateService\SimpleType\ServiceType|string $serviceType
     * @return RequestedShipment
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Returns Set ServiceType
     *
     * @return \FedEx\RateService\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * Set PackagingType
     *
     * @param \FedEx\RateService\SimpleType\PackagingType|string $packagingType
     * @return RequestedShipment
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Returns Set PackagingType
     *
     * @return \FedEx\RateService\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * Set TotalWeight
     *
     * @param Weight $totalWeight
     * @return RequestedShipment
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Returns Set TotalWeight
     *
     * @return Weight
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    
    /**
     * Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     *
     * @param Money $totalInsuredValue
     * @return RequestedShipment
     */
    public function setTotalInsuredValue(Money $totalInsuredValue)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    
    /**
     * Returns Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     *
     * @return Money
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    
    /**
     * This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     *
     * @param string $preferredCurrency
     * @return RequestedShipment
     */
    public function setPreferredCurrency($preferredCurrency)
    {
        $this->PreferredCurrency = $preferredCurrency;
        return $this;
    }
    
    /**
     * Returns This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     *
     * @return string
     */
    public function getPreferredCurrency()
    {
        return $this->PreferredCurrency;
    }
    
    /**
     * Set Shipper
     *
     * @param Party $shipper
     * @return RequestedShipment
     */
    public function setShipper(Party $shipper)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    
    /**
     * Returns Set Shipper
     *
     * @return Party
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    
    /**
     * Set Recipient
     *
     * @param Party $recipient
     * @return RequestedShipment
     */
    public function setRecipient(Party $recipient)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    
    /**
     * Returns Set Recipient
     *
     * @return Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    
    /**
     * Set RecipientLocationNumber
     *
     * @param string $recipientLocationNumber
     * @return RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber)
    {
        $this->RecipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    
    /**
     * Returns Set RecipientLocationNumber
     *
     * @return string
     */
    public function getRecipientLocationNumber()
    {
        return $this->RecipientLocationNumber;
    }
    
    /**
     * Physical starting address for the shipment, if different from shipper's address.
     *
     * @param ContactAndAddress $origin
     * @return RequestedShipment
     */
    public function setOrigin(ContactAndAddress $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * Returns Physical starting address for the shipment, if different from shipper's address.
     *
     * @return ContactAndAddress
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    
    /**
     * Set SoldTo
     *
     * @param Party $soldTo
     * @return RequestedShipment
     */
    public function setSoldTo(Party $soldTo)
    {
        $this->SoldTo = $soldTo;
        return $this;
    }
    
    /**
     * Returns Set SoldTo
     *
     * @return Party
     */
    public function getSoldTo()
    {
        return $this->SoldTo;
    }
    
    /**
     * Set ShippingChargesPayment
     *
     * @param Payment $shippingChargesPayment
     * @return RequestedShipment
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    
    /**
     * Returns Set ShippingChargesPayment
     *
     * @return Payment
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    
    /**
     * Set SpecialServicesRequested
     *
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * @return RequestedShipment
     */
    public function setSpecialServicesRequested(ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Returns Set SpecialServicesRequested
     *
     * @return ShipmentSpecialServicesRequested
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    
    /**
     * Set ExpressFreightDetail
     *
     * @param ExpressFreightDetail $expressFreightDetail
     * @return RequestedShipment
     */
    public function setExpressFreightDetail(ExpressFreightDetail $expressFreightDetail)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    
    /**
     * Returns Set ExpressFreightDetail
     *
     * @return ExpressFreightDetail
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    
    /**
     * Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     *
     * @param FreightShipmentDetail $freightShipmentDetail
     * @return RequestedShipment
     */
    public function setFreightShipmentDetail(FreightShipmentDetail $freightShipmentDetail)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    
    /**
     * Returns Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     *
     * @return FreightShipmentDetail
     */
    public function getFreightShipmentDetail()
    {
        return $this->FreightShipmentDetail;
    }
    
    /**
     * Used with Ground Home Delivery and Freight.
     *
     * @param string $deliveryInstructions
     * @return RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    
    /**
     * Returns Used with Ground Home Delivery and Freight.
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }
    
    /**
     * Set VariableHandlingChargeDetail
     *
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return RequestedShipment
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    
    /**
     * Returns Set VariableHandlingChargeDetail
     *
     * @return VariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    
    /**
     * Customs clearance data, used for both international and intra-country shipping.
     *
     * @param CustomsClearanceDetail $customsClearanceDetail
     * @return RequestedShipment
     */
    public function setCustomsClearanceDetail(CustomsClearanceDetail $customsClearanceDetail)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    
    /**
     * Returns Customs clearance data, used for both international and intra-country shipping.
     *
     * @return CustomsClearanceDetail
     */
    public function getCustomsClearanceDetail()
    {
        return $this->CustomsClearanceDetail;
    }
    
    /**
     * For use in "process tag" transaction.
     *
     * @param PickupDetail $pickupDetail
     * @return RequestedShipment
     */
    public function setPickupDetail(PickupDetail $pickupDetail)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    
    /**
     * Returns For use in "process tag" transaction.
     *
     * @return PickupDetail
     */
    public function getPickupDetail()
    {
        return $this->PickupDetail;
    }
    
    /**
     * Specifies the characteristics of a shipment pertaining to SmartPost services.
     *
     * @param SmartPostShipmentDetail $smartPostDetail
     * @return RequestedShipment
     */
    public function setSmartPostDetail(SmartPostShipmentDetail $smartPostDetail)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the characteristics of a shipment pertaining to SmartPost services.
     *
     * @return SmartPostShipmentDetail
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    
    /**
     * If true, only the shipper/payor will have visibility of this shipment.
     *
     * @param boolean $blockInsightVisibility
     * @return RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    
    /**
     * Returns If true, only the shipper/payor will have visibility of this shipment.
     *
     * @return boolean
     */
    public function getBlockInsightVisibility()
    {
        return $this->BlockInsightVisibility;
    }
    
    /**
     * Set LabelSpecification
     *
     * @param LabelSpecification $labelSpecification
     * @return RequestedShipment
     */
    public function setLabelSpecification(LabelSpecification $labelSpecification)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    
    /**
     * Returns Set LabelSpecification
     *
     * @return LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    
    /**
     * Contains data used to create additional (non-label) shipping documents.
     *
     * @param ShippingDocumentSpecification $shippingDocumentSpecification
     * @return RequestedShipment
     */
    public function setShippingDocumentSpecification(ShippingDocumentSpecification $shippingDocumentSpecification)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    
    /**
     * Returns Contains data used to create additional (non-label) shipping documents.
     *
     * @return ShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    
    /**
     * Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     *
     * @param RateRequestType[] $rateRequestTypes
     * @return RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes)
    {
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    
    /**
     * Returns Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     *
     * @return RateRequestType[]
     */
    public function getRateRequestTypes()
    {
        return $this->RateRequestTypes;
    }
    
    /**
     * Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     *
     * @param \FedEx\RateService\SimpleType\EdtRequestType|string $edtRequestType
     * @return RequestedShipment
     */
    public function setEdtRequestType($edtRequestType)
    {
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    
    /**
     * Returns Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     *
     * @return \FedEx\RateService\SimpleType\EdtRequestType|string
     */
    public function getEdtRequestType()
    {
        return $this->EdtRequestType;
    }
    
    /**
     * The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     *
     * @param nonNegativeInteger $packageCount
     * @return RequestedShipment
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Returns The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     *
     * @return nonNegativeInteger
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    
    /**
     * Specifies which package-level data values are provided at the shipment-level only. The package-level data values types specified here will not be provided at the package-level.
     *
     * @param ShipmentOnlyFieldsType[] $shipmentOnlyFields
     * @return RequestedShipment
     */
    public function setShipmentOnlyFields(array $shipmentOnlyFields)
    {
        $this->ShipmentOnlyFields = $shipmentOnlyFields;
        return $this;
    }
    
    /**
     * Returns Specifies which package-level data values are provided at the shipment-level only. The package-level data values types specified here will not be provided at the package-level.
     *
     * @return ShipmentOnlyFieldsType[]
     */
    public function getShipmentOnlyFields()
    {
        return $this->ShipmentOnlyFields;
    }
    
    /**
     * Specifies data structures that may be re-used multiple times with s single shipment.
     *
     * @param ShipmentConfigurationData $configurationData
     * @return RequestedShipment
     */
    public function setConfigurationData(ShipmentConfigurationData $configurationData)
    {
        $this->ConfigurationData = $configurationData;
        return $this;
    }
    
    /**
     * Returns Specifies data structures that may be re-used multiple times with s single shipment.
     *
     * @return ShipmentConfigurationData
     */
    public function getConfigurationData()
    {
        return $this->ConfigurationData;
    }
    
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     *
     * @param RequestedPackageLineItem[] $requestedPackageLineItems
     * @return RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    
    /**
     * Returns One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     *
     * @return RequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    

    
}