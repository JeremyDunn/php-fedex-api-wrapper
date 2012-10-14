<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the shipment being tendered to FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * return RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Identifies the method by which the package is to be tendered to FedEx. This element does not dispatch a courier for package pickup. See DropoffType for list of valid enumerated values.
     *
     * @param \FedEx\ShipService\SimpleType\DropoffType|string $dropoffType
     * return RequestedShipment
     */
    public function setDropoffType($dropoffType)
    {
        $this->DropoffType = $dropoffType;
        return $this;
    }
    
    /**
     * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
     *
     * @param \FedEx\ShipService\SimpleType\ServiceType|string $serviceType
     * return RequestedShipment
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
     *
     * @param \FedEx\ShipService\SimpleType\PackagingType|string $packagingType
     * return RequestedShipment
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Identifies the total weight of the shipment being conveyed to FedEx.This is only applicable to International shipments and should only be used on the first package of a mutiple piece shipment.This value contains 1 explicit decimal position
     *
     * @param Weight $totalWeight
     * return RequestedShipment
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Total insured amount.
     *
     * @param Money $totalInsuredValue
     * return RequestedShipment
     */
    public function setTotalInsuredValue(Money $totalInsuredValue)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    
    /**
     * This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     *
     * @param string $preferredCurrency
     * return RequestedShipment
     */
    public function setPreferredCurrency($preferredCurrency)
    {
        $this->PreferredCurrency = $preferredCurrency;
        return $this;
    }
    
    /**
     * Descriptive data identifying the party responsible for shipping the package. Shipper and Origin should have the same address.
     *
     * @param Party $shipper
     * return RequestedShipment
     */
    public function setShipper(Party $shipper)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    
    /**
     * Descriptive data identifying the party receiving the package.
     *
     * @param Party $recipient
     * return RequestedShipment
     */
    public function setRecipient(Party $recipient)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    
    /**
     * A unique identifier for a recipient location
     *
     * @param string $recipientLocationNumber
     * return RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber)
    {
        $this->RecipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    
    /**
     * Physical starting address for the shipment, if different from shipper's address.
     *
     * @param ContactAndAddress $origin
     * return RequestedShipment
     */
    public function setOrigin(ContactAndAddress $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * Descriptive data indicating the method and means of payment to FedEx for providing shipping services.
     *
     * @param Payment $shippingChargesPayment
     * return RequestedShipment
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    
    /**
     * Descriptive data regarding special services requested by the shipper for this shipment. If the shipper is requesting a special service which requires additional data (e.g. COD), the special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. For example, to request COD, "COD" must be included in the SpecialServiceTypes collection and the CodDetail object must contain the required data.
     *
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * return RequestedShipment
     */
    public function setSpecialServicesRequested(ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Details specific to an Express freight shipment.
     *
     * @param ExpressFreightDetail $expressFreightDetail
     * return RequestedShipment
     */
    public function setExpressFreightDetail(ExpressFreightDetail $expressFreightDetail)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    
    /**
     * Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     *
     * @param FreightShipmentDetail $freightShipmentDetail
     * return RequestedShipment
     */
    public function setFreightShipmentDetail(FreightShipmentDetail $freightShipmentDetail)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    
    /**
     * Used with Ground Home Delivery and Freight.
     *
     * @param string $deliveryInstructions
     * return RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    
    /**
     * Details about how to calculate variable handling charges at the shipment level.
     *
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * return RequestedShipment
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    
    /**
     * Customs clearance data, used for both international and intra-country shipping.
     *
     * @param CustomsClearanceDetail $customsClearanceDetail
     * return RequestedShipment
     */
    public function setCustomsClearanceDetail(CustomsClearanceDetail $customsClearanceDetail)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    
    /**
     * For use in "process tag" transaction.
     *
     * @param PickupDetail $pickupDetail
     * return RequestedShipment
     */
    public function setPickupDetail(PickupDetail $pickupDetail)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    
    /**
     * Specifies the characteristics of a shipment pertaining to SmartPost services.
     *
     * @param SmartPostShipmentDetail $smartPostDetail
     * return RequestedShipment
     */
    public function setSmartPostDetail(SmartPostShipmentDetail $smartPostDetail)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * If true, only the shipper/payor will have visibility of this shipment.
     *
     * @param boolean $blockInsightVisibility
     * return RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    
    /**
     * Details about the image format and printer type the label is to returned in.
     *
     * @param LabelSpecification $labelSpecification
     * return RequestedShipment
     */
    public function setLabelSpecification(LabelSpecification $labelSpecification)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    
    /**
     * Contains data used to create additional (non-label) shipping documents.
     *
     * @param ShippingDocumentSpecification $shippingDocumentSpecification
     * return RequestedShipment
     */
    public function setShippingDocumentSpecification(ShippingDocumentSpecification $shippingDocumentSpecification)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    
    /**
     * Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     *
     * @param RateRequestType[] $rateRequestTypes
     * return RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes)
    {
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    
    /**
     * Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     *
     * @param \FedEx\ShipService\SimpleType\EdtRequestType|string $edtRequestType
     * return RequestedShipment
     */
    public function setEdtRequestType($edtRequestType)
    {
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    
    /**
     * Only used with multiple-transaction shipments, to identify the master package in a multi-piece shipment.
     *
     * @param TrackingId $masterTrackingId
     * return RequestedShipment
     */
    public function setMasterTrackingId(TrackingId $masterTrackingId)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    
    /**
     * The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     *
     * @param nonNegativeInteger $packageCount
     * return RequestedShipment
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Specifies data structures that may be re-used multiple times with s single shipment.
     *
     * @param ShipmentConfigurationData $configurationData
     * return RequestedShipment
     */
    public function setConfigurationData(ShipmentConfigurationData $configurationData)
    {
        $this->ConfigurationData = $configurationData;
        return $this;
    }
    
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     *
     * @param RequestedPackageLineItem[] $requestedPackageLineItems
     * return RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    

    
}