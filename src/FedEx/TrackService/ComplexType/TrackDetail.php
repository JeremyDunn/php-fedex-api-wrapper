<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Detailed tracking information about a particular package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackDetail';

    /**
     * To report soft error on an individual track detail.
     *
     * @param Notification $notification
     * @return TrackDetail
     */
    public function setNotification(Notification $notification)
    {
        $this->Notification = $notification;
        return $this;
    }
    
    /**
     * Returns To report soft error on an individual track detail.
     *
     * @return Notification
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    
    /**
     * The FedEx package identifier.
     *
     * @param string $trackingNumber
     * @return TrackDetail
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns The FedEx package identifier.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Set Barcode
     *
     * @param StringBarcode $barcode
     * @return TrackDetail
     */
    public function setBarcode(StringBarcode $barcode)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    
    /**
     * Returns Set Barcode
     *
     * @return StringBarcode
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    
    /**
     * When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * Returns When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @return string
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    
    /**
     * A code that identifies this type of status. This is the most recent status.
     *
     * @param string $statusCode
     * @return TrackDetail
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * Returns A code that identifies this type of status. This is the most recent status.
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    
    /**
     * A human-readable description of this status.
     *
     * @param string $statusDescription
     * @return TrackDetail
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    
    /**
     * Returns A human-readable description of this status.
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    
    /**
     * Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     *
     * @param TrackReconciliation $reconciliation
     * @return TrackDetail
     */
    public function setReconciliation(TrackReconciliation $reconciliation)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    
    /**
     * Returns Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     *
     * @return TrackReconciliation
     */
    public function getReconciliation()
    {
        return $this->Reconciliation;
    }
    
    /**
     * Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been cancelled
     *
     * @param string $serviceCommitMessage
     * @return TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage)
    {
        $this->ServiceCommitMessage = $serviceCommitMessage;
        return $this;
    }
    
    /**
     * Returns Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been cancelled
     *
     * @return string
     */
    public function getServiceCommitMessage()
    {
        return $this->ServiceCommitMessage;
    }
    
    /**
     * Identifies a FedEx operating company (transportation).
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * @return TrackDetail
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Identifies a FedEx operating company (transportation).
     *
     * @return \FedEx\TrackService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * Identifies operating transportation company that is the specific to the carrier code.
     *
     * @param \FedEx\TrackService\SimpleType\OperatingCompanyType|string $operatingCompany
     * @return TrackDetail
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    
    /**
     * Returns Identifies operating transportation company that is the specific to the carrier code.
     *
     * @return \FedEx\TrackService\SimpleType\OperatingCompanyType|string
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    
    /**
     * Specifies the FXO production centre contact and address.
     *
     * @param ContactAndAddress $productionLocationContactAndAddress
     * @return TrackDetail
     */
    public function setProductionLocationContactAndAddress(ContactAndAddress $productionLocationContactAndAddress)
    {
        $this->ProductionLocationContactAndAddress = $productionLocationContactAndAddress;
        return $this;
    }
    
    /**
     * Returns Specifies the FXO production centre contact and address.
     *
     * @return ContactAndAddress
     */
    public function getProductionLocationContactAndAddress()
    {
        return $this->ProductionLocationContactAndAddress;
    }
    
    /**
     * Other related identifiers for this package such as reference numbers.
     *
     * @param TrackPackageIdentifier[] $otherIdentifiers
     * @return TrackDetail
     */
    public function setOtherIdentifiers(array $otherIdentifiers)
    {
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    
    /**
     * Returns Other related identifiers for this package such as reference numbers.
     *
     * @return TrackPackageIdentifier[]
     */
    public function getOtherIdentifiers()
    {
        return $this->OtherIdentifiers;
    }
    
    /**
     * Retained for legacy compatibility only. User/screen friendly description of the Service type (e.g. Priority Overnight).
     *
     * @param string $serviceInfo
     * @return TrackDetail
     */
    public function setServiceInfo($serviceInfo)
    {
        $this->ServiceInfo = $serviceInfo;
        return $this;
    }
    
    /**
     * Returns Retained for legacy compatibility only. User/screen friendly description of the Service type (e.g. Priority Overnight).
     *
     * @return string
     */
    public function getServiceInfo()
    {
        return $this->ServiceInfo;
    }
    
    /**
     * Strict representation of the Service type (e.g. PRIORITY_OVERNIGHT).
     *
     * @param \FedEx\TrackService\SimpleType\ServiceType|string $serviceType
     * @return TrackDetail
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Returns Strict representation of the Service type (e.g. PRIORITY_OVERNIGHT).
     *
     * @return \FedEx\TrackService\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * The weight of this package.
     *
     * @param Weight $packageWeight
     * @return TrackDetail
     */
    public function setPackageWeight(Weight $packageWeight)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    
    /**
     * Returns The weight of this package.
     *
     * @return Weight
     */
    public function getPackageWeight()
    {
        return $this->PackageWeight;
    }
    
    /**
     * Physical dimensions of the package.
     *
     * @param Dimensions $packageDimensions
     * @return TrackDetail
     */
    public function setPackageDimensions(Dimensions $packageDimensions)
    {
        $this->PackageDimensions = $packageDimensions;
        return $this;
    }
    
    /**
     * Returns Physical dimensions of the package.
     *
     * @return Dimensions
     */
    public function getPackageDimensions()
    {
        return $this->PackageDimensions;
    }
    
    /**
     * The dimensional weight of the package.
     *
     * @param Weight $packageDimensionalWeight
     * @return TrackDetail
     */
    public function setPackageDimensionalWeight(Weight $packageDimensionalWeight)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    
    /**
     * Returns The dimensional weight of the package.
     *
     * @return Weight
     */
    public function getPackageDimensionalWeight()
    {
        return $this->PackageDimensionalWeight;
    }
    
    /**
     * The weight of the entire shipment.
     *
     * @param Weight $shipmentWeight
     * @return TrackDetail
     */
    public function setShipmentWeight(Weight $shipmentWeight)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    
    /**
     * Returns The weight of the entire shipment.
     *
     * @return Weight
     */
    public function getShipmentWeight()
    {
        return $this->ShipmentWeight;
    }
    
    /**
     * Retained for legacy compatibility only.
     *
     * @param string $packaging
     * @return TrackDetail
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Retained for legacy compatibility only.
     *
     * @return string
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    
    /**
     * Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     *
     * @param \FedEx\TrackService\SimpleType\PackagingType|string $packagingType
     * @return TrackDetail
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Returns Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     *
     * @return \FedEx\TrackService\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     *
     * @param nonNegativeInteger $packageSequenceNumber
     * @return TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        $this->PackageSequenceNumber = $packageSequenceNumber;
        return $this;
    }
    
    /**
     * Returns The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     *
     * @return nonNegativeInteger
     */
    public function getPackageSequenceNumber()
    {
        return $this->PackageSequenceNumber;
    }
    
    /**
     * The number of packages in this shipment.
     *
     * @param nonNegativeInteger $packageCount
     * @return TrackDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Returns The number of packages in this shipment.
     *
     * @return nonNegativeInteger
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    
    /**
     * Set TrackReturnLabelType
     *
     * @param \FedEx\TrackService\SimpleType\TrackReturnLabelType|string $trackReturnLabelType
     * @return TrackDetail
     */
    public function setTrackReturnLabelType($trackReturnLabelType)
    {
        $this->TrackReturnLabelType = $trackReturnLabelType;
        return $this;
    }
    
    /**
     * Returns Set TrackReturnLabelType
     *
     * @return \FedEx\TrackService\SimpleType\TrackReturnLabelType|string
     */
    public function getTrackReturnLabelType()
    {
        return $this->TrackReturnLabelType;
    }
    
    /**
     * Set TrackReturnDescription
     *
     * @param string $trackReturnDescription
     * @return TrackDetail
     */
    public function setTrackReturnDescription($trackReturnDescription)
    {
        $this->TrackReturnDescription = $trackReturnDescription;
        return $this;
    }
    
    /**
     * Returns Set TrackReturnDescription
     *
     * @return string
     */
    public function getTrackReturnDescription()
    {
        return $this->TrackReturnDescription;
    }
    
    /**
     * The address information for the shipper.
     *
     * @param Address $shipperAddress
     * @return TrackDetail
     */
    public function setShipperAddress(Address $shipperAddress)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    
    /**
     * Returns The address information for the shipper.
     *
     * @return Address
     */
    public function getShipperAddress()
    {
        return $this->ShipperAddress;
    }
    
    /**
     * The address of the FedEx pickup location/facility.
     *
     * @param Address $originLocationAddress
     * @return TrackDetail
     */
    public function setOriginLocationAddress(Address $originLocationAddress)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    
    /**
     * Returns The address of the FedEx pickup location/facility.
     *
     * @return Address
     */
    public function getOriginLocationAddress()
    {
        return $this->OriginLocationAddress;
    }
    
    /**
     * Estimated package pickup time for shipments that haven't been picked up.
     *
     * @param dateTime $estimatedPickupTimestamp
     * @return TrackDetail
     */
    public function setEstimatedPickupTimestamp($estimatedPickupTimestamp)
    {
        $this->EstimatedPickupTimestamp = $estimatedPickupTimestamp;
        return $this;
    }
    
    /**
     * Returns Estimated package pickup time for shipments that haven't been picked up.
     *
     * @return dateTime
     */
    public function getEstimatedPickupTimestamp()
    {
        return $this->EstimatedPickupTimestamp;
    }
    
    /**
     * Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     *
     * @param dateTime $shipTimestamp
     * @return TrackDetail
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Returns Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     *
     * @return dateTime
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    
    /**
     * The distance from the origin to the destination. Returned for Custom Critical shipments.
     *
     * @param Distance $totalTransitDistance
     * @return TrackDetail
     */
    public function setTotalTransitDistance(Distance $totalTransitDistance)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    
    /**
     * Returns The distance from the origin to the destination. Returned for Custom Critical shipments.
     *
     * @return Distance
     */
    public function getTotalTransitDistance()
    {
        return $this->TotalTransitDistance;
    }
    
    /**
     * Total distance package still has to travel. Returned for Custom Critical shipments.
     *
     * @param Distance $distanceToDestination
     * @return TrackDetail
     */
    public function setDistanceToDestination(Distance $distanceToDestination)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    
    /**
     * Returns Total distance package still has to travel. Returned for Custom Critical shipments.
     *
     * @return Distance
     */
    public function getDistanceToDestination()
    {
        return $this->DistanceToDestination;
    }
    
    /**
     * The address this package is to be (or has been) delivered.
     *
     * @param Address $destinationAddress
     * @return TrackDetail
     */
    public function setDestinationAddress(Address $destinationAddress)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    
    /**
     * Returns The address this package is to be (or has been) delivered.
     *
     * @return Address
     */
    public function getDestinationAddress()
    {
        return $this->DestinationAddress;
    }
    
    /**
     * The address of the FedEx delivery location/facility.
     *
     * @param Address $destinationLocationAddress
     * @return TrackDetail
     */
    public function setDestinationLocationAddress(Address $destinationLocationAddress)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    
    /**
     * Returns The address of the FedEx delivery location/facility.
     *
     * @return Address
     */
    public function getDestinationLocationAddress()
    {
        return $this->DestinationLocationAddress;
    }
    
    /**
     * Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @param dateTime $estimatedDeliveryTimestamp
     * @return TrackDetail
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
    {
        $this->EstimatedDeliveryTimestamp = $estimatedDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @return dateTime
     */
    public function getEstimatedDeliveryTimestamp()
    {
        return $this->EstimatedDeliveryTimestamp;
    }
    
    /**
     * The time the package was actually delivered.
     *
     * @param dateTime $actualDeliveryTimestamp
     * @return TrackDetail
     */
    public function setActualDeliveryTimestamp($actualDeliveryTimestamp)
    {
        $this->ActualDeliveryTimestamp = $actualDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns The time the package was actually delivered.
     *
     * @return dateTime
     */
    public function getActualDeliveryTimestamp()
    {
        return $this->ActualDeliveryTimestamp;
    }
    
    /**
     * Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     *
     * @param Address $actualDeliveryAddress
     * @return TrackDetail
     */
    public function setActualDeliveryAddress(Address $actualDeliveryAddress)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    
    /**
     * Returns Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     *
     * @return Address
     */
    public function getActualDeliveryAddress()
    {
        return $this->ActualDeliveryAddress;
    }
    
    /**
     * Identifies the method of office order delivery.
     *
     * @param \FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType|string $officeOrderDeliveryMethod
     * @return TrackDetail
     */
    public function setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod)
    {
        $this->OfficeOrderDeliveryMethod = $officeOrderDeliveryMethod;
        return $this;
    }
    
    /**
     * Returns Identifies the method of office order delivery.
     *
     * @return \FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType|string
     */
    public function getOfficeOrderDeliveryMethod()
    {
        return $this->OfficeOrderDeliveryMethod;
    }
    
    /**
     * Strict text indicating the delivery location at the delivered to address.
     *
     * @param \FedEx\TrackService\SimpleType\TrackDeliveryLocationType|string $deliveryLocationType
     * @return TrackDetail
     */
    public function setDeliveryLocationType($deliveryLocationType)
    {
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    
    /**
     * Returns Strict text indicating the delivery location at the delivered to address.
     *
     * @return \FedEx\TrackService\SimpleType\TrackDeliveryLocationType|string
     */
    public function getDeliveryLocationType()
    {
        return $this->DeliveryLocationType;
    }
    
    /**
     * User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     *
     * @param string $deliveryLocationDescription
     * @return TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription)
    {
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    
    /**
     * Returns User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     *
     * @return string
     */
    public function getDeliveryLocationDescription()
    {
        return $this->DeliveryLocationDescription;
    }
    
    /**
     * This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     *
     * @param string $deliverySignatureName
     * @return TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName)
    {
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    
    /**
     * Returns This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     *
     * @return string
     */
    public function getDeliverySignatureName()
    {
        return $this->DeliverySignatureName;
    }
    
    /**
     * True if signed for by signature image is available.
     *
     * @param boolean $signatureProofOfDeliveryAvailable
     * @return TrackDetail
     */
    public function setSignatureProofOfDeliveryAvailable($signatureProofOfDeliveryAvailable)
    {
        $this->SignatureProofOfDeliveryAvailable = $signatureProofOfDeliveryAvailable;
        return $this;
    }
    
    /**
     * Returns True if signed for by signature image is available.
     *
     * @return boolean
     */
    public function getSignatureProofOfDeliveryAvailable()
    {
        return $this->SignatureProofOfDeliveryAvailable;
    }
    
    /**
     * The types of email notifications that are available for the package.
     *
     * @param EMailNotificationEventType[] $notificationEventsAvailable
     * @return TrackDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable)
    {
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    
    /**
     * Returns The types of email notifications that are available for the package.
     *
     * @return EMailNotificationEventType[]
     */
    public function getNotificationEventsAvailable()
    {
        return $this->NotificationEventsAvailable;
    }
    
    /**
     * Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @param TrackSplitShipmentPart[] $splitShipmentParts
     * @return TrackDetail
     */
    public function setSplitShipmentParts(array $splitShipmentParts)
    {
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    
    /**
     * Returns Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @return TrackSplitShipmentPart[]
     */
    public function getSplitShipmentParts()
    {
        return $this->SplitShipmentParts;
    }
    
    /**
     * Indicates redirection eligibility as determined by tracking service, subject to refinement/override by redirect-to-hold service.
     *
     * @param \FedEx\TrackService\SimpleType\RedirectToHoldEligibilityType|string $redirectToHoldEligibility
     * @return TrackDetail
     */
    public function setRedirectToHoldEligibility($redirectToHoldEligibility)
    {
        $this->RedirectToHoldEligibility = $redirectToHoldEligibility;
        return $this;
    }
    
    /**
     * Returns Indicates redirection eligibility as determined by tracking service, subject to refinement/override by redirect-to-hold service.
     *
     * @return \FedEx\TrackService\SimpleType\RedirectToHoldEligibilityType|string
     */
    public function getRedirectToHoldEligibility()
    {
        return $this->RedirectToHoldEligibility;
    }
    
    /**
     * Event information for a tracking number.
     *
     * @param TrackEvent[] $events
     * @return TrackDetail
     */
    public function setEvents(array $events)
    {
        $this->Events = $events;
        return $this;
    }
    
    /**
     * Returns Event information for a tracking number.
     *
     * @return TrackEvent[]
     */
    public function getEvents()
    {
        return $this->Events;
    }
    

    
}