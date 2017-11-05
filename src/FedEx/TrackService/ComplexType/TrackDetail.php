<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property Notification $Notification
 * @property string $TrackingNumber
 * @property StringBarcode $Barcode
 * @property string $TrackingNumberUniqueIdentifier
 * @property TrackStatusDetail $StatusDetail
 * @property TrackInformationNoteDetail[] $InformationNotes
 * @property CustomerExceptionRequestDetail[] $CustomerExceptionRequests
 * @property TrackReconciliation $Reconciliation
 * @property string $ServiceCommitMessage
 * @property string $DestinationServiceArea
 * @property string $DestinationServiceAreaDescription
 * @property \FedEx\TrackService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\TrackService\SimpleType\OperatingCompanyType|string $OperatingCompany
 * @property string $OperatingCompanyOrCarrierDescription
 * @property string $CartageAgentCompanyName
 * @property ContactAndAddress $ProductionLocationContactAndAddress
 * @property TrackOtherIdentifierDetail[] $OtherIdentifiers
 * @property string $FormId
 * @property TrackServiceDescriptionDetail $Service
 * @property Weight $PackageWeight
 * @property Dimensions $PackageDimensions
 * @property Weight $PackageDimensionalWeight
 * @property Weight $ShipmentWeight
 * @property string $Packaging
 * @property \FedEx\TrackService\SimpleType\PackagingType|string $PackagingType
 * @property \FedEx\TrackService\SimpleType\PhysicalPackagingType|string $PhysicalPackagingType
 * @property int $PackageSequenceNumber
 * @property int $PackageCount
 * @property string $CreatorSoftwareId
 * @property TrackChargeDetail[] $Charges
 * @property string $NickName
 * @property string $Notes
 * @property \FedEx\TrackService\SimpleType\TrackDetailAttributeType|string[] $Attributes
 * @property ContentRecord[] $ShipmentContents
 * @property string[] $PackageContents
 * @property string $ClearanceLocationCode
 * @property Commodity[] $Commodities
 * @property TrackReturnDetail $ReturnDetail
 * @property CustomsOptionDetail[] $CustomsOptionDetails
 * @property TrackAdvanceNotificationDetail $AdvanceNotificationDetail
 * @property TrackSpecialHandling[] $SpecialHandlings
 * @property TrackPayment[] $Payments
 * @property Contact $Shipper
 * @property \FedEx\TrackService\SimpleType\TrackPossessionStatusType|string $PossessionStatus
 * @property Address $ShipperAddress
 * @property Address $OriginLocationAddress
 * @property string $OriginStationId
 * @property TrackingDateOrTimestamp[] $DatesOrTimes
 * @property Distance $TotalTransitDistance
 * @property Distance $DistanceToDestination
 * @property TrackSpecialInstruction[] $SpecialInstructions
 * @property Contact $Recipient
 * @property Address $LastUpdatedDestinationAddress
 * @property Address $DestinationAddress
 * @property Contact $HoldAtLocationContact
 * @property Address $HoldAtLocationAddress
 * @property string $DestinationStationId
 * @property Address $DestinationLocationAddress
 * @property \FedEx\TrackService\SimpleType\FedExLocationType|string $DestinationLocationType
 * @property string $DestinationLocationTimeZoneOffset
 * @property Address $ActualDeliveryAddress
 * @property \FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType|string $OfficeOrderDeliveryMethod
 * @property \FedEx\TrackService\SimpleType\TrackDeliveryLocationType|string $DeliveryLocationType
 * @property string $DeliveryLocationDescription
 * @property int $DeliveryAttempts
 * @property string $DeliverySignatureName
 * @property PieceCountVerificationDetail[] $PieceCountVerificationDetails
 * @property int $TotalUniqueAddressCountInConsolidation
 * @property AvailableImagesDetail[] $AvailableImages
 * @property SignatureImageDetail $Signature
 * @property \FedEx\TrackService\SimpleType\NotificationEventType|string[] $NotificationEventsAvailable
 * @property TrackSplitShipmentPart[] $SplitShipmentParts
 * @property DeliveryOptionEligibilityDetail[] $DeliveryOptionEligibilityDetails
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
     * Specifies details about the status of the shipment being tracked.
     *
     * @param TrackStatusDetail $statusDetail
     * @return $this
     */
    public function setStatusDetail(TrackStatusDetail $statusDetail)
    {
        $this->values['StatusDetail'] = $statusDetail;
        return $this;
    }

    /**
     * Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
     *
     * @param TrackInformationNoteDetail[] $informationNotes
     * @return $this
     */
    public function setInformationNotes(array $informationNotes)
    {
        $this->values['InformationNotes'] = $informationNotes;
        return $this;
    }

    /**
     * Set CustomerExceptionRequests
     *
     * @param CustomerExceptionRequestDetail[] $customerExceptionRequests
     * @return $this
     */
    public function setCustomerExceptionRequests(array $customerExceptionRequests)
    {
        $this->values['CustomerExceptionRequests'] = $customerExceptionRequests;
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
     * Set DestinationServiceArea
     *
     * @param string $destinationServiceArea
     * @return $this
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->values['DestinationServiceArea'] = $destinationServiceArea;
        return $this;
    }

    /**
     * Set DestinationServiceAreaDescription
     *
     * @param string $destinationServiceAreaDescription
     * @return $this
     */
    public function setDestinationServiceAreaDescription($destinationServiceAreaDescription)
    {
        $this->values['DestinationServiceAreaDescription'] = $destinationServiceAreaDescription;
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
     * Specifies a detailed description about the carrier or the operating company.
     *
     * @param string $operatingCompanyOrCarrierDescription
     * @return $this
     */
    public function setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription)
    {
        $this->values['OperatingCompanyOrCarrierDescription'] = $operatingCompanyOrCarrierDescription;
        return $this;
    }

    /**
     * If the package was interlined to a cartage agent, this is the name of the cartage agent. (Returned for CSR SL only.)
     *
     * @param string $cartageAgentCompanyName
     * @return $this
     */
    public function setCartageAgentCompanyName($cartageAgentCompanyName)
    {
        $this->values['CartageAgentCompanyName'] = $cartageAgentCompanyName;
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
     * Set OtherIdentifiers
     *
     * @param TrackOtherIdentifierDetail[] $otherIdentifiers
     * @return $this
     */
    public function setOtherIdentifiers(array $otherIdentifiers)
    {
        $this->values['OtherIdentifiers'] = $otherIdentifiers;
        return $this;
    }

    /**
     * (Returned for CSR SL only.)
     *
     * @param string $formId
     * @return $this
     */
    public function setFormId($formId)
    {
        $this->values['FormId'] = $formId;
        return $this;
    }

    /**
     * Specifies details about service such as service description and type.
     *
     * @param TrackServiceDescriptionDetail $service
     * @return $this
     */
    public function setService(TrackServiceDescriptionDetail $service)
    {
        $this->values['Service'] = $service;
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
     * Set PhysicalPackagingType
     *
     * @param \FedEx\TrackService\SimpleType\PhysicalPackagingType|string $physicalPackagingType
     * @return $this
     */
    public function setPhysicalPackagingType($physicalPackagingType)
    {
        $this->values['PhysicalPackagingType'] = $physicalPackagingType;
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
     * FOR FEDEX INTERNAL USE ONLY: Specifies the software id of the device that was used to create this tracked shipment.
     *
     * @param string $creatorSoftwareId
     * @return $this
     */
    public function setCreatorSoftwareId($creatorSoftwareId)
    {
        $this->values['CreatorSoftwareId'] = $creatorSoftwareId;
        return $this;
    }

    /**
     * Specifies the details about the SPOC details.
     *
     * @param TrackChargeDetail[] $charges
     * @return $this
     */
    public function setCharges(array $charges)
    {
        $this->values['Charges'] = $charges;
        return $this;
    }

    /**
     * Set NickName
     *
     * @param string $nickName
     * @return $this
     */
    public function setNickName($nickName)
    {
        $this->values['NickName'] = $nickName;
        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->values['Notes'] = $notes;
        return $this;
    }

    /**
     * Set Attributes
     *
     * @param \FedEx\TrackService\SimpleType\TrackDetailAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Set ShipmentContents
     *
     * @param ContentRecord[] $shipmentContents
     * @return $this
     */
    public function setShipmentContents(array $shipmentContents)
    {
        $this->values['ShipmentContents'] = $shipmentContents;
        return $this;
    }

    /**
     * Set PackageContents
     *
     * @param string $packageContents
     * @return $this
     */
    public function setPackageContents($packageContents)
    {
        $this->values['PackageContents'] = $packageContents;
        return $this;
    }

    /**
     * Set ClearanceLocationCode
     *
     * @param string $clearanceLocationCode
     * @return $this
     */
    public function setClearanceLocationCode($clearanceLocationCode)
    {
        $this->values['ClearanceLocationCode'] = $clearanceLocationCode;
        return $this;
    }

    /**
     * Set Commodities
     *
     * @param Commodity[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['Commodities'] = $commodities;
        return $this;
    }

    /**
     * Set ReturnDetail
     *
     * @param TrackReturnDetail $returnDetail
     * @return $this
     */
    public function setReturnDetail(TrackReturnDetail $returnDetail)
    {
        $this->values['ReturnDetail'] = $returnDetail;
        return $this;
    }

    /**
     * Specifies the reason for return.
     *
     * @param CustomsOptionDetail[] $customsOptionDetails
     * @return $this
     */
    public function setCustomsOptionDetails(array $customsOptionDetails)
    {
        $this->values['CustomsOptionDetails'] = $customsOptionDetails;
        return $this;
    }

    /**
     * Set AdvanceNotificationDetail
     *
     * @param TrackAdvanceNotificationDetail $advanceNotificationDetail
     * @return $this
     */
    public function setAdvanceNotificationDetail(TrackAdvanceNotificationDetail $advanceNotificationDetail)
    {
        $this->values['AdvanceNotificationDetail'] = $advanceNotificationDetail;
        return $this;
    }

    /**
     * List of special handlings that applied to this package.
     *
     * @param TrackSpecialHandling[] $specialHandlings
     * @return $this
     */
    public function setSpecialHandlings(array $specialHandlings)
    {
        $this->values['SpecialHandlings'] = $specialHandlings;
        return $this;
    }

    /**
     * Specifies the details about the payments for the shipment being tracked.
     *
     * @param TrackPayment[] $payments
     * @return $this
     */
    public function setPayments(array $payments)
    {
        $this->values['Payments'] = $payments;
        return $this;
    }

    /**
     * (Returned for CSR SL only.)
     *
     * @param Contact $shipper
     * @return $this
     */
    public function setShipper(Contact $shipper)
    {
        $this->values['Shipper'] = $shipper;
        return $this;
    }

    /**
     * Indicates last-known possession of package (Returned for CSR SL only.)
     *
     * @param \FedEx\TrackService\SimpleType\TrackPossessionStatusType|string $possessionStatus
     * @return $this
     */
    public function setPossessionStatus($possessionStatus)
    {
        $this->values['PossessionStatus'] = $possessionStatus;
        return $this;
    }

    /**
     * Set ShipperAddress
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
     * (Returned for CSR SL only.)
     *
     * @param string $originStationId
     * @return $this
     */
    public function setOriginStationId($originStationId)
    {
        $this->values['OriginStationId'] = $originStationId;
        return $this;
    }

    /**
     * Set DatesOrTimes
     *
     * @param TrackingDateOrTimestamp[] $datesOrTimes
     * @return $this
     */
    public function setDatesOrTimes(array $datesOrTimes)
    {
        $this->values['DatesOrTimes'] = $datesOrTimes;
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
     * Provides additional details about package delivery.
     *
     * @param TrackSpecialInstruction[] $specialInstructions
     * @return $this
     */
    public function setSpecialInstructions(array $specialInstructions)
    {
        $this->values['SpecialInstructions'] = $specialInstructions;
        return $this;
    }

    /**
     * (Returned for CSR SL only.)
     *
     * @param Contact $recipient
     * @return $this
     */
    public function setRecipient(Contact $recipient)
    {
        $this->values['Recipient'] = $recipient;
        return $this;
    }

    /**
     * This is the latest updated destination address.
     *
     * @param Address $lastUpdatedDestinationAddress
     * @return $this
     */
    public function setLastUpdatedDestinationAddress(Address $lastUpdatedDestinationAddress)
    {
        $this->values['LastUpdatedDestinationAddress'] = $lastUpdatedDestinationAddress;
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
     * Set HoldAtLocationContact
     *
     * @param Contact $holdAtLocationContact
     * @return $this
     */
    public function setHoldAtLocationContact(Contact $holdAtLocationContact)
    {
        $this->values['HoldAtLocationContact'] = $holdAtLocationContact;
        return $this;
    }

    /**
     * The address this package is requested to placed on hold.
     *
     * @param Address $holdAtLocationAddress
     * @return $this
     */
    public function setHoldAtLocationAddress(Address $holdAtLocationAddress)
    {
        $this->values['HoldAtLocationAddress'] = $holdAtLocationAddress;
        return $this;
    }

    /**
     * (Returned for CSR SL only.)
     *
     * @param string $destinationStationId
     * @return $this
     */
    public function setDestinationStationId($destinationStationId)
    {
        $this->values['DestinationStationId'] = $destinationStationId;
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
     * Set DestinationLocationType
     *
     * @param \FedEx\TrackService\SimpleType\FedExLocationType|string $destinationLocationType
     * @return $this
     */
    public function setDestinationLocationType($destinationLocationType)
    {
        $this->values['DestinationLocationType'] = $destinationLocationType;
        return $this;
    }

    /**
     * Set DestinationLocationTimeZoneOffset
     *
     * @param string $destinationLocationTimeZoneOffset
     * @return $this
     */
    public function setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset)
    {
        $this->values['DestinationLocationTimeZoneOffset'] = $destinationLocationTimeZoneOffset;
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
     * Specifies the number of delivery attempts made to deliver the shipment.
     *
     * @param int $deliveryAttempts
     * @return $this
     */
    public function setDeliveryAttempts($deliveryAttempts)
    {
        $this->values['DeliveryAttempts'] = $deliveryAttempts;
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
     * Specifies the details about the count of the packages delivered at the delivery location and the count of the packages at the origin.
     *
     * @param PieceCountVerificationDetail[] $pieceCountVerificationDetails
     * @return $this
     */
    public function setPieceCountVerificationDetails(array $pieceCountVerificationDetails)
    {
        $this->values['PieceCountVerificationDetails'] = $pieceCountVerificationDetails;
        return $this;
    }

    /**
     * Specifies the total number of unique addresses on the CRNs in a consolidation.
     *
     * @param int $totalUniqueAddressCountInConsolidation
     * @return $this
     */
    public function setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation)
    {
        $this->values['TotalUniqueAddressCountInConsolidation'] = $totalUniqueAddressCountInConsolidation;
        return $this;
    }

    /**
     * Set AvailableImages
     *
     * @param AvailableImagesDetail[] $availableImages
     * @return $this
     */
    public function setAvailableImages(array $availableImages)
    {
        $this->values['AvailableImages'] = $availableImages;
        return $this;
    }

    /**
     * Set Signature
     *
     * @param SignatureImageDetail $signature
     * @return $this
     */
    public function setSignature(SignatureImageDetail $signature)
    {
        $this->values['Signature'] = $signature;
        return $this;
    }

    /**
     * Set NotificationEventsAvailable
     *
     * @param \FedEx\TrackService\SimpleType\NotificationEventType[]|string[] $notificationEventsAvailable
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
     * Specifies the details about the eligibility for different delivery options.
     *
     * @param DeliveryOptionEligibilityDetail[] $deliveryOptionEligibilityDetails
     * @return $this
     */
    public function setDeliveryOptionEligibilityDetails(array $deliveryOptionEligibilityDetails)
    {
        $this->values['DeliveryOptionEligibilityDetails'] = $deliveryOptionEligibilityDetails;
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
