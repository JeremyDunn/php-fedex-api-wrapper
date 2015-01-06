<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the shipment being tendered to FedEx.
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
     * Identifies the date and time the package is tendered to FedEx. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2006-06-26). The time component must be in the format: HH:MM:SS using a 24 hour clock (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00). There is also a UTC offset component indicating the number of hours/mainutes from UTC (e.g 2006-06-26T17:00:00-0400 is defined form June 26, 2006 5:00 pm Eastern Time).
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
     * Returns Identifies the date and time the package is tendered to FedEx. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2006-06-26). The time component must be in the format: HH:MM:SS using a 24 hour clock (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00). There is also a UTC offset component indicating the number of hours/mainutes from UTC (e.g 2006-06-26T17:00:00-0400 is defined form June 26, 2006 5:00 pm Eastern Time).
     *
     * @return dateTime
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    
    /**
     * Identifies the method by which the package is to be tendered to FedEx. This element does not dispatch a courier for package pickup. See DropoffType for list of valid enumerated values.
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
     * Returns Identifies the method by which the package is to be tendered to FedEx. This element does not dispatch a courier for package pickup. See DropoffType for list of valid enumerated values.
     *
     * @return \FedEx\RateService\SimpleType\DropoffType|string
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    
    /**
     * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
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
     * Returns Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
     *
     * @return \FedEx\RateService\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
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
     * Returns Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
     *
     * @return \FedEx\RateService\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * Identifies the total weight of the shipment being conveyed to FedEx.This is only applicable to International shipments and should only be used on the first package of a mutiple piece shipment.This value contains 1 explicit decimal position
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
     * Returns Identifies the total weight of the shipment being conveyed to FedEx.This is only applicable to International shipments and should only be used on the first package of a mutiple piece shipment.This value contains 1 explicit decimal position
     *
     * @return Weight
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    
    /**
     * Total insured amount.
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
     * Returns Total insured amount.
     *
     * @return Money
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    
    /**
     * Descriptive data identifying the party responsible for shipping the package. Shipper and Origin should have the same address.
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
     * Returns Descriptive data identifying the party responsible for shipping the package. Shipper and Origin should have the same address.
     *
     * @return Party
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    
    /**
     * Descriptive data identifying the party receiving the package.
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
     * Returns Descriptive data identifying the party receiving the package.
     *
     * @return Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    
    /**
     * A unique identifier for a recipient location
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
     * Returns A unique identifier for a recipient location
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
     * Descriptive data indicating the method and means of payment to FedEx for providing shipping services.
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
     * Returns Descriptive data indicating the method and means of payment to FedEx for providing shipping services.
     *
     * @return Payment
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    
    /**
     * Descriptive data regarding special services requested by the shipper for this shipment. If the shipper is requesting a special service which requires additional data (e.g. COD), the special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. For example, to request COD, "COD" must be included in the SpecialServiceTypes collection and the CodDetail object must contain the required data.
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
     * Returns Descriptive data regarding special services requested by the shipper for this shipment. If the shipper is requesting a special service which requires additional data (e.g. COD), the special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. For example, to request COD, "COD" must be included in the SpecialServiceTypes collection and the CodDetail object must contain the required data.
     *
     * @return ShipmentSpecialServicesRequested
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    
    /**
     * Details specific to an Express freight shipment.
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
     * Returns Details specific to an Express freight shipment.
     *
     * @return ExpressFreightDetail
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    
    /**
     * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services.
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
     * Returns Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services.
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
     * Details about how to calculate variable handling charges at the shipment level.
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
     * Returns Details about how to calculate variable handling charges at the shipment level.
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
     * Details about the image format and printer type the label is to returned in.
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
     * Returns Details about the image format and printer type the label is to returned in.
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