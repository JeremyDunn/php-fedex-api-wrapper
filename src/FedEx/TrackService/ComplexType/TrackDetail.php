<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Detailed tracking information about a particular package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property Notification $Notification
 * @property string $TrackingNumber
 * @property StringBarcode $Barcode
 * @property string $TrackingNumberUniqueIdentifier
 * @property string $StatusCode
 * @property string $StatusDescription
 * @property TrackReconciliation $Reconciliation
 * @property string $ServiceCommitMessage
 * @property \FedEx\TrackService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\TrackService\SimpleType\OperatingCompanyType|string $OperatingCompany
 * @property ContactAndAddress $ProductionLocationContactAndAddress
 * @property TrackPackageIdentifier[] $OtherIdentifiers
 * @property string $ServiceInfo
 * @property \FedEx\TrackService\SimpleType\ServiceType|string $ServiceType
 * @property Weight $PackageWeight
 * @property Dimensions $PackageDimensions
 * @property Weight $PackageDimensionalWeight
 * @property Weight $ShipmentWeight
 * @property string $Packaging
 * @property \FedEx\TrackService\SimpleType\PackagingType|string $PackagingType
 * @property int $PackageSequenceNumber
 * @property int $PackageCount
 * @property \FedEx\TrackService\SimpleType\TrackReturnLabelType|string $TrackReturnLabelType
 * @property string $TrackReturnDescription
 * @property Address $ShipperAddress
 * @property Address $OriginLocationAddress
 * @property string $EstimatedPickupTimestamp
 * @property string $ShipTimestamp
 * @property Distance $TotalTransitDistance
 * @property Distance $DistanceToDestination
 * @property Address $DestinationAddress
 * @property Address $DestinationLocationAddress
 * @property string $EstimatedDeliveryTimestamp
 * @property string $ActualDeliveryTimestamp
 * @property Address $ActualDeliveryAddress
 * @property \FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType|string $OfficeOrderDeliveryMethod
 * @property \FedEx\TrackService\SimpleType\TrackDeliveryLocationType|string $DeliveryLocationType
 * @property string $DeliveryLocationDescription
 * @property string $DeliverySignatureName
 * @property boolean $SignatureProofOfDeliveryAvailable
 * @property \FedEx\TrackService\SimpleType\EMailNotificationEventType|string[] $NotificationEventsAvailable
 * @property TrackSplitShipmentPart[] $SplitShipmentParts
 * @property \FedEx\TrackService\SimpleType\RedirectToHoldEligibilityType|string $RedirectToHoldEligibility
 * @property TrackEvent[] $Events

 */
class TrackDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackDetail';

    /**
     * To report soft error on an individual track detail.
     *
     * @param Notification $notification
     * @return $this
     */
    public function setNotification(Notification $notification)
    {
        $this->values['Notification'] = $notification;
        return $this;
    }

    /**
     * The FedEx package identifier.
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Set Barcode
     *
     * @param StringBarcode $barcode
     * @return $this
     */
    public function setBarcode(StringBarcode $barcode)
    {
        $this->values['Barcode'] = $barcode;
        return $this;
    }

    /**
     * When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return $this
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->values['TrackingNumberUniqueIdentifier'] = $trackingNumberUniqueIdentifier;
        return $this;
    }

    /**
     * A code that identifies this type of status. This is the most recent status.
     *
     * @param string $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->values['StatusCode'] = $statusCode;
        return $this;
    }

    /**
     * A human-readable description of this status.
     *
     * @param string $statusDescription
     * @return $this
     */
    public function setStatusDescription($statusDescription)
    {
        $this->values['StatusDescription'] = $statusDescription;
        return $this;
    }

    /**
     * Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     *
     * @param TrackReconciliation $reconciliation
     * @return $this
     */
    public function setReconciliation(TrackReconciliation $reconciliation)
    {
        $this->values['Reconciliation'] = $reconciliation;
        return $this;
    }

    /**
     * Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been cancelled
     *
     * @param string $serviceCommitMessage
     * @return $this
     */
    public function setServiceCommitMessage($serviceCommitMessage)
    {
        $this->values['ServiceCommitMessage'] = $serviceCommitMessage;
        return $this;
    }

    /**
     * Identifies a FedEx operating company (transportation).
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Identifies operating transportation company that is the specific to the carrier code.
     *
     * @param \FedEx\TrackService\SimpleType\OperatingCompanyType|string $operatingCompany
     * @return $this
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->values['OperatingCompany'] = $operatingCompany;
        return $this;
    }

    /**
     * Specifies the FXO production centre contact and address.
     *
     * @param ContactAndAddress $productionLocationContactAndAddress
     * @return $this
     */
    public function setProductionLocationContactAndAddress(ContactAndAddress $productionLocationContactAndAddress)
    {
        $this->values['ProductionLocationContactAndAddress'] = $productionLocationContactAndAddress;
        return $this;
    }

    /**
     * Other related identifiers for this package such as reference numbers.
     *
     * @param TrackPackageIdentifier[] $otherIdentifiers
     * @return $this
     */
    public function setOtherIdentifiers(array $otherIdentifiers)
    {
        $this->values['OtherIdentifiers'] = $otherIdentifiers;
        return $this;
    }

    /**
     * Retained for legacy compatibility only. User/screen friendly description of the Service type (e.g. Priority Overnight).
     *
     * @param string $serviceInfo
     * @return $this
     */
    public function setServiceInfo($serviceInfo)
    {
        $this->values['ServiceInfo'] = $serviceInfo;
        return $this;
    }

    /**
     * Strict representation of the Service type (e.g. PRIORITY_OVERNIGHT).
     *
     * @param \FedEx\TrackService\SimpleType\ServiceType|string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * The weight of this package.
     *
     * @param Weight $packageWeight
     * @return $this
     */
    public function setPackageWeight(Weight $packageWeight)
    {
        $this->values['PackageWeight'] = $packageWeight;
        return $this;
    }

    /**
     * Physical dimensions of the package.
     *
     * @param Dimensions $packageDimensions
     * @return $this
     */
    public function setPackageDimensions(Dimensions $packageDimensions)
    {
        $this->values['PackageDimensions'] = $packageDimensions;
        return $this;
    }

    /**
     * The dimensional weight of the package.
     *
     * @param Weight $packageDimensionalWeight
     * @return $this
     */
    public function setPackageDimensionalWeight(Weight $packageDimensionalWeight)
    {
        $this->values['PackageDimensionalWeight'] = $packageDimensionalWeight;
        return $this;
    }

    /**
     * The weight of the entire shipment.
     *
     * @param Weight $shipmentWeight
     * @return $this
     */
    public function setShipmentWeight(Weight $shipmentWeight)
    {
        $this->values['ShipmentWeight'] = $shipmentWeight;
        return $this;
    }

    /**
     * Retained for legacy compatibility only.
     *
     * @param string $packaging
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->values['Packaging'] = $packaging;
        return $this;
    }

    /**
     * Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     *
     * @param \FedEx\TrackService\SimpleType\PackagingType|string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['PackagingType'] = $packagingType;
        return $this;
    }

    /**
     * The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     *
     * @param int $packageSequenceNumber
     * @return $this
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        $this->values['PackageSequenceNumber'] = $packageSequenceNumber;
        return $this;
    }

    /**
     * The number of packages in this shipment.
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
     * Set TrackReturnLabelType
     *
     * @param \FedEx\TrackService\SimpleType\TrackReturnLabelType|string $trackReturnLabelType
     * @return $this
     */
    public function setTrackReturnLabelType($trackReturnLabelType)
    {
        $this->values['TrackReturnLabelType'] = $trackReturnLabelType;
        return $this;
    }

    /**
     * Set TrackReturnDescription
     *
     * @param string $trackReturnDescription
     * @return $this
     */
    public function setTrackReturnDescription($trackReturnDescription)
    {
        $this->values['TrackReturnDescription'] = $trackReturnDescription;
        return $this;
    }

    /**
     * The address information for the shipper.
     *
     * @param Address $shipperAddress
     * @return $this
     */
    public function setShipperAddress(Address $shipperAddress)
    {
        $this->values['ShipperAddress'] = $shipperAddress;
        return $this;
    }

    /**
     * The address of the FedEx pickup location/facility.
     *
     * @param Address $originLocationAddress
     * @return $this
     */
    public function setOriginLocationAddress(Address $originLocationAddress)
    {
        $this->values['OriginLocationAddress'] = $originLocationAddress;
        return $this;
    }

    /**
     * Estimated package pickup time for shipments that haven't been picked up.
     *
     * @param string $estimatedPickupTimestamp
     * @return $this
     */
    public function setEstimatedPickupTimestamp($estimatedPickupTimestamp)
    {
        $this->values['EstimatedPickupTimestamp'] = $estimatedPickupTimestamp;
        return $this;
    }

    /**
     * Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
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
     * The distance from the origin to the destination. Returned for Custom Critical shipments.
     *
     * @param Distance $totalTransitDistance
     * @return $this
     */
    public function setTotalTransitDistance(Distance $totalTransitDistance)
    {
        $this->values['TotalTransitDistance'] = $totalTransitDistance;
        return $this;
    }

    /**
     * Total distance package still has to travel. Returned for Custom Critical shipments.
     *
     * @param Distance $distanceToDestination
     * @return $this
     */
    public function setDistanceToDestination(Distance $distanceToDestination)
    {
        $this->values['DistanceToDestination'] = $distanceToDestination;
        return $this;
    }

    /**
     * The address this package is to be (or has been) delivered.
     *
     * @param Address $destinationAddress
     * @return $this
     */
    public function setDestinationAddress(Address $destinationAddress)
    {
        $this->values['DestinationAddress'] = $destinationAddress;
        return $this;
    }

    /**
     * The address of the FedEx delivery location/facility.
     *
     * @param Address $destinationLocationAddress
     * @return $this
     */
    public function setDestinationLocationAddress(Address $destinationLocationAddress)
    {
        $this->values['DestinationLocationAddress'] = $destinationLocationAddress;
        return $this;
    }

    /**
     * Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @param string $estimatedDeliveryTimestamp
     * @return $this
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
    {
        $this->values['EstimatedDeliveryTimestamp'] = $estimatedDeliveryTimestamp;
        return $this;
    }

    /**
     * The time the package was actually delivered.
     *
     * @param string $actualDeliveryTimestamp
     * @return $this
     */
    public function setActualDeliveryTimestamp($actualDeliveryTimestamp)
    {
        $this->values['ActualDeliveryTimestamp'] = $actualDeliveryTimestamp;
        return $this;
    }

    /**
     * Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     *
     * @param Address $actualDeliveryAddress
     * @return $this
     */
    public function setActualDeliveryAddress(Address $actualDeliveryAddress)
    {
        $this->values['ActualDeliveryAddress'] = $actualDeliveryAddress;
        return $this;
    }

    /**
     * Identifies the method of office order delivery.
     *
     * @param \FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType|string $officeOrderDeliveryMethod
     * @return $this
     */
    public function setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod)
    {
        $this->values['OfficeOrderDeliveryMethod'] = $officeOrderDeliveryMethod;
        return $this;
    }

    /**
     * Strict text indicating the delivery location at the delivered to address.
     *
     * @param \FedEx\TrackService\SimpleType\TrackDeliveryLocationType|string $deliveryLocationType
     * @return $this
     */
    public function setDeliveryLocationType($deliveryLocationType)
    {
        $this->values['DeliveryLocationType'] = $deliveryLocationType;
        return $this;
    }

    /**
     * User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     *
     * @param string $deliveryLocationDescription
     * @return $this
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription)
    {
        $this->values['DeliveryLocationDescription'] = $deliveryLocationDescription;
        return $this;
    }

    /**
     * This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     *
     * @param string $deliverySignatureName
     * @return $this
     */
    public function setDeliverySignatureName($deliverySignatureName)
    {
        $this->values['DeliverySignatureName'] = $deliverySignatureName;
        return $this;
    }

    /**
     * True if signed for by signature image is available.
     *
     * @param boolean $signatureProofOfDeliveryAvailable
     * @return $this
     */
    public function setSignatureProofOfDeliveryAvailable($signatureProofOfDeliveryAvailable)
    {
        $this->values['SignatureProofOfDeliveryAvailable'] = $signatureProofOfDeliveryAvailable;
        return $this;
    }

    /**
     * The types of email notifications that are available for the package.
     *
     * @param \FedEx\TrackService\SimpleType\EMailNotificationEventType[]|string[] $notificationEventsAvailable
     * @return $this
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable)
    {
        $this->values['NotificationEventsAvailable'] = $notificationEventsAvailable;
        return $this;
    }

    /**
     * Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @param TrackSplitShipmentPart[] $splitShipmentParts
     * @return $this
     */
    public function setSplitShipmentParts(array $splitShipmentParts)
    {
        $this->values['SplitShipmentParts'] = $splitShipmentParts;
        return $this;
    }

    /**
     * Indicates redirection eligibility as determined by tracking service, subject to refinement/override by redirect-to-hold service.
     *
     * @param \FedEx\TrackService\SimpleType\RedirectToHoldEligibilityType|string $redirectToHoldEligibility
     * @return $this
     */
    public function setRedirectToHoldEligibility($redirectToHoldEligibility)
    {
        $this->values['RedirectToHoldEligibility'] = $redirectToHoldEligibility;
        return $this;
    }

    /**
     * Event information for a tracking number.
     *
     * @param TrackEvent[] $events
     * @return $this
     */
    public function setEvents(array $events)
    {
        $this->values['Events'] = $events;
        return $this;
    }
}
