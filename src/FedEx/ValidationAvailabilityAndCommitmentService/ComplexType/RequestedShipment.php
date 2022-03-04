<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RequestedShipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $ShipTimestamp
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DropoffType|string $DropoffType
 * @property string $ServiceType
 * @property string $PackagingType
 * @property string $ShippingCycle
 * @property ShipmentManifestDetail $ManifestDetail
 * @property ShipmentVariationOptionDetail[] $VariationOptions
 * @property Weight $TotalWeight
 * @property Money $TotalInsuredValue
 * @property Dimensions $TotalDimensions
 * @property string $PreferredCurrency
 * @property ShipmentAuthorizationDetail $ShipmentAuthorizationDetail
 * @property Party $Shipper
 * @property Party $Recipient
 * @property string $RecipientLocationNumber
 * @property ContactAndAddress $Origin
 * @property Party $SoldTo
 * @property Payment $ShippingChargesPayment
 * @property ShipmentSpecialServicesRequested $SpecialServicesRequested
 * @property ShipmentProcessingOptionsRequested $ProcessingOptionsRequested
 * @property ExpressFreightDetail $ExpressFreightDetail
 * @property FreightShipmentDetail $FreightShipmentDetail
 * @property ShipmentConsolidationDetail $ConsolidationDetail
 * @property string $DeliveryInstructions
 * @property VariableHandlingChargeDetail $VariableHandlingChargeDetail
 * @property CustomsClearanceDetail $CustomsClearanceDetail
 * @property PickupDetail $PickupDetail
 * @property SmartPostShipmentDetail $SmartPostDetail
 * @property boolean $BlockInsightVisibility
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ErrorLabelBehaviorType|string $ErrorLabelBehavior
 * @property LabelSpecification $LabelSpecification
 * @property ShippingDocumentSpecification $ShippingDocumentSpecification
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateRequestType|string[] $RateRequestTypes
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ReturnedRateType|string $CustomerSelectedActualRateType
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EdtRequestType|string $EdtRequestType
 * @property CustomRatingOptionDetail $CustomRatingOptionDetail
 * @property TrackingId $MasterTrackingId
 * @property int $PackageCount
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ShipmentOnlyFieldsType|string[] $ShipmentOnlyFields
 * @property ShipmentConfigurationData $ConfigurationData
 * @property RequestedPackageLineItem[] $RequestedPackageLineItems

 */
class RequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RequestedShipment';

    /**
     * Set ShipTimestamp
     *
     * @param string $shipTimestamp
     * @return $this
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->values['ShipTimestamp'] = $shipTimestamp;
        return $this;
    }

    /**
     * Set DropoffType
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DropoffType|string $dropoffType
     * @return $this
     */
    public function setDropoffType($dropoffType)
    {
        $this->values['DropoffType'] = $dropoffType;
        return $this;
    }

    /**
     * This field contains the service type values, like PRIORITY_OVERNIGHT and FEDEX_GROUND.
     *
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * This field contains the packaging type values, like YOUR_PACKAGING and FEDEX_ENVELOPE.
     *
     * @param string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['PackagingType'] = $packagingType;
        return $this;
    }

    /**
     * The client's shipping cycle to which this shipment belongs.
     *
     * @param string $shippingCycle
     * @return $this
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->values['ShippingCycle'] = $shippingCycle;
        return $this;
    }

    /**
     * This specifies information related to the manifest associated with the shipment.
     *
     * @param ShipmentManifestDetail $manifestDetail
     * @return $this
     */
    public function setManifestDetail(ShipmentManifestDetail $manifestDetail)
    {
        $this->values['ManifestDetail'] = $manifestDetail;
        return $this;
    }

    /**
     * The shipment variations for the current shipment expressed in key-value pairs.
     *
     * @param ShipmentVariationOptionDetail[] $variationOptions
     * @return $this
     */
    public function setVariationOptions(array $variationOptions)
    {
        $this->values['VariationOptions'] = $variationOptions;
        return $this;
    }

    /**
     * Set TotalWeight
     *
     * @param Weight $totalWeight
     * @return $this
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->values['TotalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     *
     * @param Money $totalInsuredValue
     * @return $this
     */
    public function setTotalInsuredValue(Money $totalInsuredValue)
    {
        $this->values['TotalInsuredValue'] = $totalInsuredValue;
        return $this;
    }

    /**
     * Set TotalDimensions
     *
     * @param Dimensions $totalDimensions
     * @return $this
     */
    public function setTotalDimensions(Dimensions $totalDimensions)
    {
        $this->values['TotalDimensions'] = $totalDimensions;
        return $this;
    }

    /**
     * This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     *
     * @param string $preferredCurrency
     * @return $this
     */
    public function setPreferredCurrency($preferredCurrency)
    {
        $this->values['PreferredCurrency'] = $preferredCurrency;
        return $this;
    }

    /**
     * Specifies details about the entity responsible for the shipment.
     *
     * @param ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @return $this
     */
    public function setShipmentAuthorizationDetail(ShipmentAuthorizationDetail $shipmentAuthorizationDetail)
    {
        $this->values['ShipmentAuthorizationDetail'] = $shipmentAuthorizationDetail;
        return $this;
    }

    /**
     * Set Shipper
     *
     * @param Party $shipper
     * @return $this
     */
    public function setShipper(Party $shipper)
    {
        $this->values['Shipper'] = $shipper;
        return $this;
    }

    /**
     * Set Recipient
     *
     * @param Party $recipient
     * @return $this
     */
    public function setRecipient(Party $recipient)
    {
        $this->values['Recipient'] = $recipient;
        return $this;
    }

    /**
     * Set RecipientLocationNumber
     *
     * @param string $recipientLocationNumber
     * @return $this
     */
    public function setRecipientLocationNumber($recipientLocationNumber)
    {
        $this->values['RecipientLocationNumber'] = $recipientLocationNumber;
        return $this;
    }

    /**
     * Physical starting address for the shipment, if different from shipper's address.
     *
     * @param ContactAndAddress $origin
     * @return $this
     */
    public function setOrigin(ContactAndAddress $origin)
    {
        $this->values['Origin'] = $origin;
        return $this;
    }

    /**
     * The sold-to party is used for customs clearance; for example, in support of US import customs rules. The need for this field could vary based on whether a sold-to party was specified on a consolidation.
     *
     * @param Party $soldTo
     * @return $this
     */
    public function setSoldTo(Party $soldTo)
    {
        $this->values['SoldTo'] = $soldTo;
        return $this;
    }

    /**
     * Set ShippingChargesPayment
     *
     * @param Payment $shippingChargesPayment
     * @return $this
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->values['ShippingChargesPayment'] = $shippingChargesPayment;
        return $this;
    }

    /**
     * Set SpecialServicesRequested
     *
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested(ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->values['SpecialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

    /**
     * Specifies any custom processing to be applied to this shipment.
     *
     * @param ShipmentProcessingOptionsRequested $processingOptionsRequested
     * @return $this
     */
    public function setProcessingOptionsRequested(ShipmentProcessingOptionsRequested $processingOptionsRequested)
    {
        $this->values['ProcessingOptionsRequested'] = $processingOptionsRequested;
        return $this;
    }

    /**
     * Set ExpressFreightDetail
     *
     * @param ExpressFreightDetail $expressFreightDetail
     * @return $this
     */
    public function setExpressFreightDetail(ExpressFreightDetail $expressFreightDetail)
    {
        $this->values['ExpressFreightDetail'] = $expressFreightDetail;
        return $this;
    }

    /**
     * Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     *
     * @param FreightShipmentDetail $freightShipmentDetail
     * @return $this
     */
    public function setFreightShipmentDetail(FreightShipmentDetail $freightShipmentDetail)
    {
        $this->values['FreightShipmentDetail'] = $freightShipmentDetail;
        return $this;
    }

    /**
     * Data applicable to shipments that are a part of a consolidation.
     *
     * @param ShipmentConsolidationDetail $consolidationDetail
     * @return $this
     */
    public function setConsolidationDetail(ShipmentConsolidationDetail $consolidationDetail)
    {
        $this->values['ConsolidationDetail'] = $consolidationDetail;
        return $this;
    }

    /**
     * Used with Ground Home Delivery and Freight.
     *
     * @param string $deliveryInstructions
     * @return $this
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->values['DeliveryInstructions'] = $deliveryInstructions;
        return $this;
    }

    /**
     * Set VariableHandlingChargeDetail
     *
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['VariableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Customs clearance data, used for both international and intra-country shipping.
     *
     * @param CustomsClearanceDetail $customsClearanceDetail
     * @return $this
     */
    public function setCustomsClearanceDetail(CustomsClearanceDetail $customsClearanceDetail)
    {
        $this->values['CustomsClearanceDetail'] = $customsClearanceDetail;
        return $this;
    }

    /**
     * For use in "process tag" transaction.
     *
     * @param PickupDetail $pickupDetail
     * @return $this
     */
    public function setPickupDetail(PickupDetail $pickupDetail)
    {
        $this->values['PickupDetail'] = $pickupDetail;
        return $this;
    }

    /**
     * Specifies the characteristics of a shipment pertaining to SmartPost services.
     *
     * @param SmartPostShipmentDetail $smartPostDetail
     * @return $this
     */
    public function setSmartPostDetail(SmartPostShipmentDetail $smartPostDetail)
    {
        $this->values['SmartPostDetail'] = $smartPostDetail;
        return $this;
    }

    /**
     * If true, only the shipper/payor will have visibility of this shipment.
     *
     * @param boolean $blockInsightVisibility
     * @return $this
     */
    public function setBlockInsightVisibility($blockInsightVisibility)
    {
        $this->values['BlockInsightVisibility'] = $blockInsightVisibility;
        return $this;
    }

    /**
     * Specifies the client-requested response in the event of errors within shipment.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ErrorLabelBehaviorType|string $errorLabelBehavior
     * @return $this
     */
    public function setErrorLabelBehavior($errorLabelBehavior)
    {
        $this->values['ErrorLabelBehavior'] = $errorLabelBehavior;
        return $this;
    }

    /**
     * Set LabelSpecification
     *
     * @param LabelSpecification $labelSpecification
     * @return $this
     */
    public function setLabelSpecification(LabelSpecification $labelSpecification)
    {
        $this->values['LabelSpecification'] = $labelSpecification;
        return $this;
    }

    /**
     * Contains data used to create additional (non-label) shipping documents.
     *
     * @param ShippingDocumentSpecification $shippingDocumentSpecification
     * @return $this
     */
    public function setShippingDocumentSpecification(ShippingDocumentSpecification $shippingDocumentSpecification)
    {
        $this->values['ShippingDocumentSpecification'] = $shippingDocumentSpecification;
        return $this;
    }

    /**
     * Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateRequestType[]|string[] $rateRequestTypes
     * @return $this
     */
    public function setRateRequestTypes(array $rateRequestTypes)
    {
        $this->values['RateRequestTypes'] = $rateRequestTypes;
        return $this;
    }

    /**
     * Specifies the type of rate the customer wishes to have used as the actual rate type.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ReturnedRateType|string $customerSelectedActualRateType
     * @return $this
     */
    public function setCustomerSelectedActualRateType($customerSelectedActualRateType)
    {
        $this->values['CustomerSelectedActualRateType'] = $customerSelectedActualRateType;
        return $this;
    }

    /**
     * Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EdtRequestType|string $edtRequestType
     * @return $this
     */
    public function setEdtRequestType($edtRequestType)
    {
        $this->values['EdtRequestType'] = $edtRequestType;
        return $this;
    }

    /**
     * Specifies the details for the custom rates.
     *
     * @param CustomRatingOptionDetail $customRatingOptionDetail
     * @return $this
     */
    public function setCustomRatingOptionDetail(CustomRatingOptionDetail $customRatingOptionDetail)
    {
        $this->values['CustomRatingOptionDetail'] = $customRatingOptionDetail;
        return $this;
    }

    /**
     * Only used with multiple-transaction shipments, to identify the master package in a multi-piece shipment.
     *
     * @param TrackingId $masterTrackingId
     * @return $this
     */
    public function setMasterTrackingId(TrackingId $masterTrackingId)
    {
        $this->values['MasterTrackingId'] = $masterTrackingId;
        return $this;
    }

    /**
     * The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     *
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['PackageCount'] = $packageCount;
        return $this;
    }

    /**
     * Specifies which package-level data values are provided at the shipment-level only. The package-level data values types specified here will not be provided at the package-level.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ShipmentOnlyFieldsType[]|string[] $shipmentOnlyFields
     * @return $this
     */
    public function setShipmentOnlyFields(array $shipmentOnlyFields)
    {
        $this->values['ShipmentOnlyFields'] = $shipmentOnlyFields;
        return $this;
    }

    /**
     * Specifies data structures that may be re-used multiple times with s single shipment.
     *
     * @param ShipmentConfigurationData $configurationData
     * @return $this
     */
    public function setConfigurationData(ShipmentConfigurationData $configurationData)
    {
        $this->values['ConfigurationData'] = $configurationData;
        return $this;
    }

    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     *
     * @param RequestedPackageLineItem[] $requestedPackageLineItems
     * @return $this
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->values['RequestedPackageLineItems'] = $requestedPackageLineItems;
        return $this;
    }
}
