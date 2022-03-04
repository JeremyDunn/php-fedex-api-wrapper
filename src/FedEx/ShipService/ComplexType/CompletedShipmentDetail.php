<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property boolean $UsDomestic
 * @property \FedEx\ShipService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property TrackingId $MasterTrackingId
 * @property ServiceDescription $ServiceDescription
 * @property PackagingDescription $PackagingDescription
 * @property SpecialServiceDescription[] $SpecialServiceDescriptions
 * @property ShipmentOperationalDetail $OperationalDetail
 * @property PendingShipmentAccessDetail $AccessDetail
 * @property CompletedTagDetail $TagDetail
 * @property CompletedSmartPostDetail $SmartPostDetail
 * @property CompletedHazardousShipmentDetail $HazardousShipmentDetail
 * @property ShipmentRating $ShipmentRating
 * @property CompletedHoldAtLocationDetail $CompletedHoldAtLocationDetail
 * @property string $ExportComplianceStatement
 * @property DocumentRequirementsDetail $DocumentRequirements
 * @property CompletedEtdDetail $CompletedEtdDetail
 * @property ShippingDocument[] $ShipmentDocuments
 * @property AssociatedShipmentDetail[] $AssociatedShipments
 * @property CompletedCodDetail $CompletedCodDetail
 * @property CompletedPackageDetail[] $CompletedPackageDetails

 */
class CompletedShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedShipmentDetail';

    /**
     * Set UsDomestic
     *
     * @param boolean $usDomestic
     * @return $this
     */
    public function setUsDomestic($usDomestic)
    {
        $this->values['UsDomestic'] = $usDomestic;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\ShipService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set MasterTrackingId
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
     * Set ServiceDescription
     *
     * @param ServiceDescription $serviceDescription
     * @return $this
     */
    public function setServiceDescription(ServiceDescription $serviceDescription)
    {
        $this->values['ServiceDescription'] = $serviceDescription;
        return $this;
    }

    /**
     * Set PackagingDescription
     *
     * @param PackagingDescription $packagingDescription
     * @return $this
     */
    public function setPackagingDescription(PackagingDescription $packagingDescription)
    {
        $this->values['PackagingDescription'] = $packagingDescription;
        return $this;
    }

    /**
     * Set SpecialServiceDescriptions
     *
     * @param SpecialServiceDescription[] $specialServiceDescriptions
     * @return $this
     */
    public function setSpecialServiceDescriptions(array $specialServiceDescriptions)
    {
        $this->values['SpecialServiceDescriptions'] = $specialServiceDescriptions;
        return $this;
    }

    /**
     * Set OperationalDetail
     *
     * @param ShipmentOperationalDetail $operationalDetail
     * @return $this
     */
    public function setOperationalDetail(ShipmentOperationalDetail $operationalDetail)
    {
        $this->values['OperationalDetail'] = $operationalDetail;
        return $this;
    }

    /**
     * Only used with pending shipments.
     *
     * @param PendingShipmentAccessDetail $accessDetail
     * @return $this
     */
    public function setAccessDetail(PendingShipmentAccessDetail $accessDetail)
    {
        $this->values['AccessDetail'] = $accessDetail;
        return $this;
    }

    /**
     * Only used in the reply to tag requests.
     *
     * @param CompletedTagDetail $tagDetail
     * @return $this
     */
    public function setTagDetail(CompletedTagDetail $tagDetail)
    {
        $this->values['TagDetail'] = $tagDetail;
        return $this;
    }

    /**
     * Set SmartPostDetail
     *
     * @param CompletedSmartPostDetail $smartPostDetail
     * @return $this
     */
    public function setSmartPostDetail(CompletedSmartPostDetail $smartPostDetail)
    {
        $this->values['SmartPostDetail'] = $smartPostDetail;
        return $this;
    }

    /**
     * Computed shipment level information about hazarous commodities.
     *
     * @param CompletedHazardousShipmentDetail $hazardousShipmentDetail
     * @return $this
     */
    public function setHazardousShipmentDetail(CompletedHazardousShipmentDetail $hazardousShipmentDetail)
    {
        $this->values['HazardousShipmentDetail'] = $hazardousShipmentDetail;
        return $this;
    }

    /**
     * All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @param ShipmentRating $shipmentRating
     * @return $this
     */
    public function setShipmentRating(ShipmentRating $shipmentRating)
    {
        $this->values['ShipmentRating'] = $shipmentRating;
        return $this;
    }

    /**
     * Returns the default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @param CompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     * @return $this
     */
    public function setCompletedHoldAtLocationDetail(CompletedHoldAtLocationDetail $completedHoldAtLocationDetail)
    {
        $this->values['CompletedHoldAtLocationDetail'] = $completedHoldAtLocationDetail;
        return $this;
    }

    /**
     * Returns any defaults or updates applied to RequestedShipment.exportDetail.exportComplianceStatement.
     *
     * @param string $exportComplianceStatement
     * @return $this
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->values['ExportComplianceStatement'] = $exportComplianceStatement;
        return $this;
    }

    /**
     * This specifies what rules or requirements for documents are applicable for this shipment. This may identify required or prohibited documents.
     *
     * @param DocumentRequirementsDetail $documentRequirements
     * @return $this
     */
    public function setDocumentRequirements(DocumentRequirementsDetail $documentRequirements)
    {
        $this->values['DocumentRequirements'] = $documentRequirements;
        return $this;
    }

    /**
     * Set CompletedEtdDetail
     *
     * @param CompletedEtdDetail $completedEtdDetail
     * @return $this
     */
    public function setCompletedEtdDetail(CompletedEtdDetail $completedEtdDetail)
    {
        $this->values['CompletedEtdDetail'] = $completedEtdDetail;
        return $this;
    }

    /**
     * All shipment-level shipping documents (other than labels and barcodes).
     *
     * @param ShippingDocument[] $shipmentDocuments
     * @return $this
     */
    public function setShipmentDocuments(array $shipmentDocuments)
    {
        $this->values['ShipmentDocuments'] = $shipmentDocuments;
        return $this;
    }

    /**
     * Set AssociatedShipments
     *
     * @param AssociatedShipmentDetail[] $associatedShipments
     * @return $this
     */
    public function setAssociatedShipments(array $associatedShipments)
    {
        $this->values['AssociatedShipments'] = $associatedShipments;
        return $this;
    }

    /**
     * Set CompletedCodDetail
     *
     * @param CompletedCodDetail $completedCodDetail
     * @return $this
     */
    public function setCompletedCodDetail(CompletedCodDetail $completedCodDetail)
    {
        $this->values['CompletedCodDetail'] = $completedCodDetail;
        return $this;
    }

    /**
     * Set CompletedPackageDetails
     *
     * @param CompletedPackageDetail[] $completedPackageDetails
     * @return $this
     */
    public function setCompletedPackageDetails(array $completedPackageDetails)
    {
        $this->values['CompletedPackageDetails'] = $completedPackageDetails;
        return $this;
    }
}
