<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedShipmentDetail';

    /**
     * Indicates whether or not this is a US Domestic shipment.
     *
     * @param boolean $usDomestic
     * return CompletedShipmentDetail
     */
    public function setUsDomestic($usDomestic)
    {
        $this->UsDomestic = $usDomestic;
        return $this;
    }
    
    /**
     * Indicates the carrier that will be used to deliver this shipment.
     *
     * @param \FedEx\ShipService\SimpleType\CarrierCodeType|string $carrierCode
     * return CompletedShipmentDetail
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * The master tracking number and form id of this multiple piece shipment. This information is to be provided for each subsequent of a multiple piece shipment.
     *
     * @param TrackingId $masterTrackingId
     * return CompletedShipmentDetail
     */
    public function setMasterTrackingId(TrackingId $masterTrackingId)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    
    /**
     * Description of the FedEx service used for this shipment. Currently not supported.
     *
     * @param string $serviceTypeDescription
     * return CompletedShipmentDetail
     */
    public function setServiceTypeDescription($serviceTypeDescription)
    {
        $this->ServiceTypeDescription = $serviceTypeDescription;
        return $this;
    }
    
    /**
     * Description of the packaging used for this shipment. Currently not supported.
     *
     * @param string $packagingDescription
     * return CompletedShipmentDetail
     */
    public function setPackagingDescription($packagingDescription)
    {
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    
    /**
     * Set OperationalDetail
     *
     * @param ShipmentOperationalDetail $operationalDetail
     * return CompletedShipmentDetail
     */
    public function setOperationalDetail(ShipmentOperationalDetail $operationalDetail)
    {
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    
    /**
     * Only used with pending shipments.
     *
     * @param PendingShipmentAccessDetail $accessDetail
     * return CompletedShipmentDetail
     */
    public function setAccessDetail(PendingShipmentAccessDetail $accessDetail)
    {
        $this->AccessDetail = $accessDetail;
        return $this;
    }
    
    /**
     * Only used in the reply to tag requests.
     *
     * @param CompletedTagDetail $tagDetail
     * return CompletedShipmentDetail
     */
    public function setTagDetail(CompletedTagDetail $tagDetail)
    {
        $this->TagDetail = $tagDetail;
        return $this;
    }
    
    /**
     * Provides reply information specific to SmartPost shipments.
     *
     * @param CompletedSmartPostDetail $smartPostDetail
     * return CompletedShipmentDetail
     */
    public function setSmartPostDetail(CompletedSmartPostDetail $smartPostDetail)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * Computed shipment level information about hazarous commodities.
     *
     * @param CompletedHazardousShipmentDetail $hazardousShipmentDetail
     * return CompletedShipmentDetail
     */
    public function setHazardousShipmentDetail(CompletedHazardousShipmentDetail $hazardousShipmentDetail)
    {
        $this->HazardousShipmentDetail = $hazardousShipmentDetail;
        return $this;
    }
    
    /**
     * All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @param ShipmentRating $shipmentRating
     * return CompletedShipmentDetail
     */
    public function setShipmentRating(ShipmentRating $shipmentRating)
    {
        $this->ShipmentRating = $shipmentRating;
        return $this;
    }
    
    /**
     * Returns the default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @param CompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     * return CompletedShipmentDetail
     */
    public function setCompletedHoldAtLocationDetail(CompletedHoldAtLocationDetail $completedHoldAtLocationDetail)
    {
        $this->CompletedHoldAtLocationDetail = $completedHoldAtLocationDetail;
        return $this;
    }
    
    /**
     * Returns any defaults or updates applied to RequestedShipment.exportDetail.exportComplianceStatement.
     *
     * @param string $exportComplianceStatement
     * return CompletedShipmentDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * Set CompletedEtdDetail
     *
     * @param CompletedEtdDetail $completedEtdDetail
     * return CompletedShipmentDetail
     */
    public function setCompletedEtdDetail(CompletedEtdDetail $completedEtdDetail)
    {
        $this->CompletedEtdDetail = $completedEtdDetail;
        return $this;
    }
    
    /**
     * All shipment-level shipping documents (other than labels and barcodes).
     *
     * @param ShippingDocument[] $shipmentDocuments
     * return CompletedShipmentDetail
     */
    public function setShipmentDocuments(array $shipmentDocuments)
    {
        $this->ShipmentDocuments = $shipmentDocuments;
        return $this;
    }
    
    /**
     * Set AssociatedShipments
     *
     * @param AssociatedShipmentDetail[] $associatedShipments
     * return CompletedShipmentDetail
     */
    public function setAssociatedShipments(array $associatedShipments)
    {
        $this->AssociatedShipments = $associatedShipments;
        return $this;
    }
    
    /**
     * Set CompletedCodDetail
     *
     * @param CompletedCodDetail $completedCodDetail
     * return CompletedShipmentDetail
     */
    public function setCompletedCodDetail(CompletedCodDetail $completedCodDetail)
    {
        $this->CompletedCodDetail = $completedCodDetail;
        return $this;
    }
    
    /**
     * Package level details about this package.
     *
     * @param CompletedPackageDetail[] $completedPackageDetails
     * return CompletedShipmentDetail
     */
    public function setCompletedPackageDetails(array $completedPackageDetails)
    {
        $this->CompletedPackageDetails = $completedPackageDetails;
        return $this;
    }
    

    
}