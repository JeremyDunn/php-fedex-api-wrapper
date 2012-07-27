<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Detailed tracking information about a particular package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackDetail
    extends AbstractComplexType
{
    protected $_name = 'TrackDetail';

    /**
     * To report soft error on an individual track detail.
     *
     * @param Notification $Notification
     * return TrackDetail
     */
    public function setNotification(Notification $notification)
    {
        $this->Notification = $notification;
        return $this;
    }
    
    /**
     * The FedEx package identifier.
     *
     * @param string $TrackingNumber
     * return TrackDetail
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param StringBarcode $Barcode
     * return TrackDetail
     */
    public function setBarcode(StringBarcode $barcode)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    
    /**
     * When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @param string $TrackingNumberUniqueIdentifier
     * return TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * A code that identifies this type of status. This is the most recent status.
     *
     * @param string $StatusCode
     * return TrackDetail
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * A human-readable description of this status.
     *
     * @param string $StatusDescription
     * return TrackDetail
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    
    /**
     * Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     *
     * @param TrackReconciliation $Reconciliation
     * return TrackDetail
     */
    public function setReconciliation(TrackReconciliation $reconciliation)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    
    /**
     * Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been cancelled
     *
     * @param string $ServiceCommitMessage
     * return TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage)
    {
        $this->ServiceCommitMessage = $serviceCommitMessage;
        return $this;
    }
    
    /**
     * Identifies a FedEx operating company (transportation).
     *
     * @param CarrierCodeType $CarrierCode
     * return TrackDetail
     */
    public function setCarrierCode(\FedEx\TrackService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies operating transportation company that is the specific to the carrier code.
     *
     * @param OperatingCompanyType $OperatingCompany
     * return TrackDetail
     */
    public function setOperatingCompany(\FedEx\TrackService\SimpleType\OperatingCompanyType $operatingCompany)
    {
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    
    /**
     * Specifies the FXO production centre contact and address.
     *
     * @param ContactAndAddress $ProductionLocationContactAndAddress
     * return TrackDetail
     */
    public function setProductionLocationContactAndAddress(ContactAndAddress $productionLocationContactAndAddress)
    {
        $this->ProductionLocationContactAndAddress = $productionLocationContactAndAddress;
        return $this;
    }
    
    /**
     * Other related identifiers for this package such as reference numbers.
     *
     * @param array[TrackPackageIdentifier] $OtherIdentifiers
     * return TrackDetail
     */
    public function setOtherIdentifiers(array $otherIdentifiers)
    {
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    
    /**
     * Retained for legacy compatibility only. User/screen friendly description of the Service type (e.g. Priority Overnight).
     *
     * @param string $ServiceInfo
     * return TrackDetail
     */
    public function setServiceInfo($serviceInfo)
    {
        $this->ServiceInfo = $serviceInfo;
        return $this;
    }
    
    /**
     * Strict representation of the Service type (e.g. PRIORITY_OVERNIGHT).
     *
     * @param ServiceType $ServiceType
     * return TrackDetail
     */
    public function setServiceType(\FedEx\TrackService\SimpleType\ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * The weight of this package.
     *
     * @param Weight $PackageWeight
     * return TrackDetail
     */
    public function setPackageWeight(Weight $packageWeight)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    
    /**
     * Physical dimensions of the package.
     *
     * @param Dimensions $PackageDimensions
     * return TrackDetail
     */
    public function setPackageDimensions(Dimensions $packageDimensions)
    {
        $this->PackageDimensions = $packageDimensions;
        return $this;
    }
    
    /**
     * The dimensional weight of the package.
     *
     * @param Weight $PackageDimensionalWeight
     * return TrackDetail
     */
    public function setPackageDimensionalWeight(Weight $packageDimensionalWeight)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    
    /**
     * The weight of the entire shipment.
     *
     * @param Weight $ShipmentWeight
     * return TrackDetail
     */
    public function setShipmentWeight(Weight $shipmentWeight)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    
    /**
     * Retained for legacy compatibility only.
     *
     * @param string $Packaging
     * return TrackDetail
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     *
     * @param PackagingType $PackagingType
     * return TrackDetail
     */
    public function setPackagingType(\FedEx\TrackService\SimpleType\PackagingType $packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     *
     * @param nonNegativeInteger $PackageSequenceNumber
     * return TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        $this->PackageSequenceNumber = $packageSequenceNumber;
        return $this;
    }
    
    /**
     * The number of packages in this shipment.
     *
     * @param nonNegativeInteger $PackageCount
     * return TrackDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * 
     *
     * @param TrackReturnLabelType $TrackReturnLabelType
     * return TrackDetail
     */
    public function setTrackReturnLabelType(\FedEx\TrackService\SimpleType\TrackReturnLabelType $trackReturnLabelType)
    {
        $this->TrackReturnLabelType = $trackReturnLabelType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackReturnDescription
     * return TrackDetail
     */
    public function setTrackReturnDescription($trackReturnDescription)
    {
        $this->TrackReturnDescription = $trackReturnDescription;
        return $this;
    }
    
    /**
     * The address information for the shipper.
     *
     * @param Address $ShipperAddress
     * return TrackDetail
     */
    public function setShipperAddress(Address $shipperAddress)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    
    /**
     * The address of the FedEx pickup location/facility.
     *
     * @param Address $OriginLocationAddress
     * return TrackDetail
     */
    public function setOriginLocationAddress(Address $originLocationAddress)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    
    /**
     * Estimated package pickup time for shipments that haven't been picked up.
     *
     * @param dateTime $EstimatedPickupTimestamp
     * return TrackDetail
     */
    public function setEstimatedPickupTimestamp($estimatedPickupTimestamp)
    {
        $this->EstimatedPickupTimestamp = $estimatedPickupTimestamp;
        return $this;
    }
    
    /**
     * Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     *
     * @param dateTime $ShipTimestamp
     * return TrackDetail
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * The distance from the origin to the destination. Returned for Custom Critical shipments.
     *
     * @param Distance $TotalTransitDistance
     * return TrackDetail
     */
    public function setTotalTransitDistance(Distance $totalTransitDistance)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    
    /**
     * Total distance package still has to travel. Returned for Custom Critical shipments.
     *
     * @param Distance $DistanceToDestination
     * return TrackDetail
     */
    public function setDistanceToDestination(Distance $distanceToDestination)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    
    /**
     * The address this package is to be (or has been) delivered.
     *
     * @param Address $DestinationAddress
     * return TrackDetail
     */
    public function setDestinationAddress(Address $destinationAddress)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    
    /**
     * The address of the FedEx delivery location/facility.
     *
     * @param Address $DestinationLocationAddress
     * return TrackDetail
     */
    public function setDestinationLocationAddress(Address $destinationLocationAddress)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    
    /**
     * Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @param dateTime $EstimatedDeliveryTimestamp
     * return TrackDetail
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
    {
        $this->EstimatedDeliveryTimestamp = $estimatedDeliveryTimestamp;
        return $this;
    }
    
    /**
     * The time the package was actually delivered.
     *
     * @param dateTime $ActualDeliveryTimestamp
     * return TrackDetail
     */
    public function setActualDeliveryTimestamp($actualDeliveryTimestamp)
    {
        $this->ActualDeliveryTimestamp = $actualDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     *
     * @param Address $ActualDeliveryAddress
     * return TrackDetail
     */
    public function setActualDeliveryAddress(Address $actualDeliveryAddress)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    
    /**
     * Identifies the method of office order delivery.
     *
     * @param OfficeOrderDeliveryMethodType $OfficeOrderDeliveryMethod
     * return TrackDetail
     */
    public function setOfficeOrderDeliveryMethod(\FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType $officeOrderDeliveryMethod)
    {
        $this->OfficeOrderDeliveryMethod = $officeOrderDeliveryMethod;
        return $this;
    }
    
    /**
     * Strict text indicating the delivery location at the delivered to address.
     *
     * @param TrackDeliveryLocationType $DeliveryLocationType
     * return TrackDetail
     */
    public function setDeliveryLocationType(\FedEx\TrackService\SimpleType\TrackDeliveryLocationType $deliveryLocationType)
    {
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    
    /**
     * User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     *
     * @param string $DeliveryLocationDescription
     * return TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription)
    {
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    
    /**
     * This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     *
     * @param string $DeliverySignatureName
     * return TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName)
    {
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    
    /**
     * True if signed for by signature image is available.
     *
     * @param boolean $SignatureProofOfDeliveryAvailable
     * return TrackDetail
     */
    public function setSignatureProofOfDeliveryAvailable($signatureProofOfDeliveryAvailable)
    {
        $this->SignatureProofOfDeliveryAvailable = $signatureProofOfDeliveryAvailable;
        return $this;
    }
    
    /**
     * The types of email notifications that are available for the package.
     *
     * @param array[EMailNotificationEventType] $NotificationEventsAvailable
     * return TrackDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable)
    {
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    
    /**
     * Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @param array[TrackSplitShipmentPart] $SplitShipmentParts
     * return TrackDetail
     */
    public function setSplitShipmentParts(array $splitShipmentParts)
    {
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    
    /**
     * Indicates redirection eligibility as determined by tracking service, subject to refinement/override by redirect-to-hold service.
     *
     * @param RedirectToHoldEligibilityType $RedirectToHoldEligibility
     * return TrackDetail
     */
    public function setRedirectToHoldEligibility(\FedEx\TrackService\SimpleType\RedirectToHoldEligibilityType $redirectToHoldEligibility)
    {
        $this->RedirectToHoldEligibility = $redirectToHoldEligibility;
        return $this;
    }
    
    /**
     * Event information for a tracking number.
     *
     * @param array[TrackEvent] $Events
     * return TrackDetail
     */
    public function setEvents(array $events)
    {
        $this->Events = $events;
        return $this;
    }
    

    
}