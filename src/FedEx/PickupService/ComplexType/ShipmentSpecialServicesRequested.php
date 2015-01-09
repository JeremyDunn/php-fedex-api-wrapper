<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentSpecialServicesRequested
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @param ShipmentSpecialServiceType[] $specialServiceTypes
     * @return ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * Returns The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @return ShipmentSpecialServiceType[]
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    
    /**
     * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. This element is required when SpecialServiceType.COD is present in the SpecialServiceTypes collection.
     *
     * @param CodDetail $codDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCodDetail(CodDetail $codDetail)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. This element is required when SpecialServiceType.COD is present in the SpecialServiceTypes collection.
     *
     * @return CodDetail
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    
    /**
     * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION is present in the SpecialServiceTypes collection.
     *
     * @param HoldAtLocationDetail $holdAtLocationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(HoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION is present in the SpecialServiceTypes collection.
     *
     * @return HoldAtLocationDetail
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }
    
    /**
     * Descriptive data required for FedEx to provide email notification to the customer regarding the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is present in the SpecialServiceTypes collection.
     *
     * @param EMailNotificationDetail $eMailNotificationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail(EMailNotificationDetail $eMailNotificationDetail)
    {
        $this->EMailNotificationDetail = $eMailNotificationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data required for FedEx to provide email notification to the customer regarding the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is present in the SpecialServiceTypes collection.
     *
     * @return EMailNotificationDetail
     */
    public function getEMailNotificationDetail()
    {
        return $this->EMailNotificationDetail;
    }
    
    /**
     * The descriptive data required for FedEx Printed Return Label. This element is required when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection
     *
     * @param ReturnShipmentDetail $returnShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(ReturnShipmentDetail $returnShipmentDetail)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data required for FedEx Printed Return Label. This element is required when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection
     *
     * @return ReturnShipmentDetail
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }
    
    /**
     * This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @param PendingShipmentDetail $pendingShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(PendingShipmentDetail $pendingShipmentDetail)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    
    /**
     * Returns This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @return PendingShipmentDetail
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }
    
    /**
     * Set InternationalControlledExportDetail
     *
     * @param InternationalControlledExportDetail $internationalControlledExportDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(InternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    
    /**
     * Returns Set InternationalControlledExportDetail
     *
     * @return InternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->InternationalControlledExportDetail;
    }
    
    /**
     * Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
     *
     * @param ShipmentDryIceDetail $shipmentDryIceDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(ShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    
    /**
     * Returns Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
     *
     * @return ShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    
    /**
     * The descriptive data required for FedEx Home Delivery options. This element is required when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes collection
     *
     * @param HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data required for FedEx Home Delivery options. This element is required when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes collection
     *
     * @return HomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }
    
    /**
     * Identifies the delivery guarantee information.
     *
     * @param FlatbedTrailerDetail $flatbedTrailerDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFlatbedTrailerDetail(FlatbedTrailerDetail $flatbedTrailerDetail)
    {
        $this->FlatbedTrailerDetail = $flatbedTrailerDetail;
        return $this;
    }
    
    /**
     * Returns Identifies the delivery guarantee information.
     *
     * @return FlatbedTrailerDetail
     */
    public function getFlatbedTrailerDetail()
    {
        return $this->FlatbedTrailerDetail;
    }
    
    /**
     * Identifies the delivery guarantee information.
     *
     * @param FreightGuaranteeDetail $freightGuaranteeDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(FreightGuaranteeDetail $freightGuaranteeDetail)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    
    /**
     * Returns Identifies the delivery guarantee information.
     *
     * @return FreightGuaranteeDetail
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }
    
    /**
     * Electronic Trade document references.
     *
     * @param EtdDetail $etdDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(EtdDetail $etdDetail)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    
    /**
     * Returns Electronic Trade document references.
     *
     * @return EtdDetail
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }
    
    /**
     * Specification for labor to be performed with the shipment.
     *
     * @param ExtraLaborDetail $extraLaborDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setExtraLaborDetail(ExtraLaborDetail $extraLaborDetail)
    {
        $this->ExtraLaborDetail = $extraLaborDetail;
        return $this;
    }
    
    /**
     * Returns Specification for labor to be performed with the shipment.
     *
     * @return ExtraLaborDetail
     */
    public function getExtraLaborDetail()
    {
        return $this->ExtraLaborDetail;
    }
    
    /**
     * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
     *
     * @param PalletShrinkwrapDetail $palletShrinkwrapDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPalletShrinkwrapDetail(PalletShrinkwrapDetail $palletShrinkwrapDetail)
    {
        $this->PalletShrinkwrapDetail = $palletShrinkwrapDetail;
        return $this;
    }
    
    /**
     * Returns Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
     *
     * @return PalletShrinkwrapDetail
     */
    public function getPalletShrinkwrapDetail()
    {
        return $this->PalletShrinkwrapDetail;
    }
    
    /**
     * Specifications for pallets to be provided on Freight shipment.
     *
     * @param PalletsProvidedDetail $palletsProvidedDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPalletsProvidedDetail(PalletsProvidedDetail $palletsProvidedDetail)
    {
        $this->PalletsProvidedDetail = $palletsProvidedDetail;
        return $this;
    }
    
    /**
     * Returns Specifications for pallets to be provided on Freight shipment.
     *
     * @return PalletsProvidedDetail
     */
    public function getPalletsProvidedDetail()
    {
        return $this->PalletsProvidedDetail;
    }
    
    /**
     * Specifications for pup/set or vehicle delayed for loading or unloading.
     *
     * @param DetentionDetail $detentionDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setDetentionDetail(DetentionDetail $detentionDetail)
    {
        $this->DetentionDetail = $detentionDetail;
        return $this;
    }
    
    /**
     * Returns Specifications for pup/set or vehicle delayed for loading or unloading.
     *
     * @return DetentionDetail
     */
    public function getDetentionDetail()
    {
        return $this->DetentionDetail;
    }
    
    /**
     * Specification for marking or tagging of pieces in shipment.
     *
     * @param MarkingOrTaggingDetail $markingOrTaggingDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setMarkingOrTaggingDetail(MarkingOrTaggingDetail $markingOrTaggingDetail)
    {
        $this->MarkingOrTaggingDetail = $markingOrTaggingDetail;
        return $this;
    }
    
    /**
     * Returns Specification for marking or tagging of pieces in shipment.
     *
     * @return MarkingOrTaggingDetail
     */
    public function getMarkingOrTaggingDetail()
    {
        return $this->MarkingOrTaggingDetail;
    }
    
    /**
     * Specification for services performed during non-business hours and/or days.
     *
     * @param NonBusinessTimeDetail $nonBusinessTimeDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setNonBusinessTimeDetail(NonBusinessTimeDetail $nonBusinessTimeDetail)
    {
        $this->NonBusinessTimeDetail = $nonBusinessTimeDetail;
        return $this;
    }
    
    /**
     * Returns Specification for services performed during non-business hours and/or days.
     *
     * @return NonBusinessTimeDetail
     */
    public function getNonBusinessTimeDetail()
    {
        return $this->NonBusinessTimeDetail;
    }
    
    /**
     * Specification for assembly performed on shipment.
     *
     * @param ShipmentAssemblyDetail $shipmentAssemblyDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setShipmentAssemblyDetail(ShipmentAssemblyDetail $shipmentAssemblyDetail)
    {
        $this->ShipmentAssemblyDetail = $shipmentAssemblyDetail;
        return $this;
    }
    
    /**
     * Returns Specification for assembly performed on shipment.
     *
     * @return ShipmentAssemblyDetail
     */
    public function getShipmentAssemblyDetail()
    {
        return $this->ShipmentAssemblyDetail;
    }
    
    /**
     * Specification for sorting and/or segregating performed on shipment.
     *
     * @param SortAndSegregateDetail $sortAndSegregateDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setSortAndSegregateDetail(SortAndSegregateDetail $sortAndSegregateDetail)
    {
        $this->SortAndSegregateDetail = $sortAndSegregateDetail;
        return $this;
    }
    
    /**
     * Returns Specification for sorting and/or segregating performed on shipment.
     *
     * @return SortAndSegregateDetail
     */
    public function getSortAndSegregateDetail()
    {
        return $this->SortAndSegregateDetail;
    }
    
    /**
     * Specification for special equipment used in loading/unloading shipment.
     *
     * @param SpecialEquipmentDetail $specialEquipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setSpecialEquipmentDetail(SpecialEquipmentDetail $specialEquipmentDetail)
    {
        $this->SpecialEquipmentDetail = $specialEquipmentDetail;
        return $this;
    }
    
    /**
     * Returns Specification for special equipment used in loading/unloading shipment.
     *
     * @return SpecialEquipmentDetail
     */
    public function getSpecialEquipmentDetail()
    {
        return $this->SpecialEquipmentDetail;
    }
    
    /**
     * Specification for storage provided for shipment.
     *
     * @param StorageDetail $storageDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setStorageDetail(StorageDetail $storageDetail)
    {
        $this->StorageDetail = $storageDetail;
        return $this;
    }
    
    /**
     * Returns Specification for storage provided for shipment.
     *
     * @return StorageDetail
     */
    public function getStorageDetail()
    {
        return $this->StorageDetail;
    }
    
    /**
     * Specification for weighing services provided for shipment.
     *
     * @param WeighingDetail $weighingDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setWeighingDetail(WeighingDetail $weighingDetail)
    {
        $this->WeighingDetail = $weighingDetail;
        return $this;
    }
    
    /**
     * Returns Specification for weighing services provided for shipment.
     *
     * @return WeighingDetail
     */
    public function getWeighingDetail()
    {
        return $this->WeighingDetail;
    }
    
    /**
     * Specification for date or range of dates on which delivery is to be attempted.
     *
     * @param CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(CustomDeliveryWindowDetail $customDeliveryWindowDetail)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    
    /**
     * Returns Specification for date or range of dates on which delivery is to be attempted.
     *
     * @return CustomDeliveryWindowDetail
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }
    

    
}