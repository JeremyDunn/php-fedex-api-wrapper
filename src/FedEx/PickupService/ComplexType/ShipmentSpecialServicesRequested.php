<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\ShipmentSpecialServiceType|string[] $SpecialServiceTypes
 * @property CodDetail $CodDetail
 * @property HoldAtLocationDetail $HoldAtLocationDetail
 * @property EMailNotificationDetail $EMailNotificationDetail
 * @property ReturnShipmentDetail $ReturnShipmentDetail
 * @property PendingShipmentDetail $PendingShipmentDetail
 * @property InternationalControlledExportDetail $InternationalControlledExportDetail
 * @property ShipmentDryIceDetail $ShipmentDryIceDetail
 * @property HomeDeliveryPremiumDetail $HomeDeliveryPremiumDetail
 * @property FlatbedTrailerDetail $FlatbedTrailerDetail
 * @property FreightGuaranteeDetail $FreightGuaranteeDetail
 * @property EtdDetail $EtdDetail
 * @property ExtraLaborDetail $ExtraLaborDetail
 * @property PalletShrinkwrapDetail $PalletShrinkwrapDetail
 * @property PalletsProvidedDetail $PalletsProvidedDetail
 * @property DetentionDetail $DetentionDetail
 * @property MarkingOrTaggingDetail $MarkingOrTaggingDetail
 * @property NonBusinessTimeDetail $NonBusinessTimeDetail
 * @property ShipmentAssemblyDetail $ShipmentAssemblyDetail
 * @property SortAndSegregateDetail $SortAndSegregateDetail
 * @property SpecialEquipmentDetail $SpecialEquipmentDetail
 * @property StorageDetail $StorageDetail
 * @property WeighingDetail $WeighingDetail
 * @property CustomDeliveryWindowDetail $CustomDeliveryWindowDetail

 */
class ShipmentSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @param \FedEx\PickupService\SimpleType\ShipmentSpecialServiceType[]|string[] $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['SpecialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. This element is required when SpecialServiceType.COD is present in the SpecialServiceTypes collection.
     *
     * @param CodDetail $codDetail
     * @return $this
     */
    public function setCodDetail(CodDetail $codDetail)
    {
        $this->values['CodDetail'] = $codDetail;
        return $this;
    }

    /**
     * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION is present in the SpecialServiceTypes collection.
     *
     * @param HoldAtLocationDetail $holdAtLocationDetail
     * @return $this
     */
    public function setHoldAtLocationDetail(HoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->values['HoldAtLocationDetail'] = $holdAtLocationDetail;
        return $this;
    }

    /**
     * Descriptive data required for FedEx to provide email notification to the customer regarding the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is present in the SpecialServiceTypes collection.
     *
     * @param EMailNotificationDetail $eMailNotificationDetail
     * @return $this
     */
    public function setEMailNotificationDetail(EMailNotificationDetail $eMailNotificationDetail)
    {
        $this->values['EMailNotificationDetail'] = $eMailNotificationDetail;
        return $this;
    }

    /**
     * The descriptive data required for FedEx Printed Return Label. This element is required when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection
     *
     * @param ReturnShipmentDetail $returnShipmentDetail
     * @return $this
     */
    public function setReturnShipmentDetail(ReturnShipmentDetail $returnShipmentDetail)
    {
        $this->values['ReturnShipmentDetail'] = $returnShipmentDetail;
        return $this;
    }

    /**
     * This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @param PendingShipmentDetail $pendingShipmentDetail
     * @return $this
     */
    public function setPendingShipmentDetail(PendingShipmentDetail $pendingShipmentDetail)
    {
        $this->values['PendingShipmentDetail'] = $pendingShipmentDetail;
        return $this;
    }

    /**
     * Set InternationalControlledExportDetail
     *
     * @param InternationalControlledExportDetail $internationalControlledExportDetail
     * @return $this
     */
    public function setInternationalControlledExportDetail(InternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->values['InternationalControlledExportDetail'] = $internationalControlledExportDetail;
        return $this;
    }

    /**
     * Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
     *
     * @param ShipmentDryIceDetail $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail(ShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->values['ShipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * The descriptive data required for FedEx Home Delivery options. This element is required when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes collection
     *
     * @param HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return $this
     */
    public function setHomeDeliveryPremiumDetail(HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->values['HomeDeliveryPremiumDetail'] = $homeDeliveryPremiumDetail;
        return $this;
    }

    /**
     * Identifies the delivery guarantee information.
     *
     * @param FlatbedTrailerDetail $flatbedTrailerDetail
     * @return $this
     */
    public function setFlatbedTrailerDetail(FlatbedTrailerDetail $flatbedTrailerDetail)
    {
        $this->values['FlatbedTrailerDetail'] = $flatbedTrailerDetail;
        return $this;
    }

    /**
     * Identifies the delivery guarantee information.
     *
     * @param FreightGuaranteeDetail $freightGuaranteeDetail
     * @return $this
     */
    public function setFreightGuaranteeDetail(FreightGuaranteeDetail $freightGuaranteeDetail)
    {
        $this->values['FreightGuaranteeDetail'] = $freightGuaranteeDetail;
        return $this;
    }

    /**
     * Electronic Trade document references.
     *
     * @param EtdDetail $etdDetail
     * @return $this
     */
    public function setEtdDetail(EtdDetail $etdDetail)
    {
        $this->values['EtdDetail'] = $etdDetail;
        return $this;
    }

    /**
     * Specification for labor to be performed with the shipment.
     *
     * @param ExtraLaborDetail $extraLaborDetail
     * @return $this
     */
    public function setExtraLaborDetail(ExtraLaborDetail $extraLaborDetail)
    {
        $this->values['ExtraLaborDetail'] = $extraLaborDetail;
        return $this;
    }

    /**
     * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
     *
     * @param PalletShrinkwrapDetail $palletShrinkwrapDetail
     * @return $this
     */
    public function setPalletShrinkwrapDetail(PalletShrinkwrapDetail $palletShrinkwrapDetail)
    {
        $this->values['PalletShrinkwrapDetail'] = $palletShrinkwrapDetail;
        return $this;
    }

    /**
     * Specifications for pallets to be provided on Freight shipment.
     *
     * @param PalletsProvidedDetail $palletsProvidedDetail
     * @return $this
     */
    public function setPalletsProvidedDetail(PalletsProvidedDetail $palletsProvidedDetail)
    {
        $this->values['PalletsProvidedDetail'] = $palletsProvidedDetail;
        return $this;
    }

    /**
     * Specifications for pup/set or vehicle delayed for loading or unloading.
     *
     * @param DetentionDetail $detentionDetail
     * @return $this
     */
    public function setDetentionDetail(DetentionDetail $detentionDetail)
    {
        $this->values['DetentionDetail'] = $detentionDetail;
        return $this;
    }

    /**
     * Specification for marking or tagging of pieces in shipment.
     *
     * @param MarkingOrTaggingDetail $markingOrTaggingDetail
     * @return $this
     */
    public function setMarkingOrTaggingDetail(MarkingOrTaggingDetail $markingOrTaggingDetail)
    {
        $this->values['MarkingOrTaggingDetail'] = $markingOrTaggingDetail;
        return $this;
    }

    /**
     * Specification for services performed during non-business hours and/or days.
     *
     * @param NonBusinessTimeDetail $nonBusinessTimeDetail
     * @return $this
     */
    public function setNonBusinessTimeDetail(NonBusinessTimeDetail $nonBusinessTimeDetail)
    {
        $this->values['NonBusinessTimeDetail'] = $nonBusinessTimeDetail;
        return $this;
    }

    /**
     * Specification for assembly performed on shipment.
     *
     * @param ShipmentAssemblyDetail $shipmentAssemblyDetail
     * @return $this
     */
    public function setShipmentAssemblyDetail(ShipmentAssemblyDetail $shipmentAssemblyDetail)
    {
        $this->values['ShipmentAssemblyDetail'] = $shipmentAssemblyDetail;
        return $this;
    }

    /**
     * Specification for sorting and/or segregating performed on shipment.
     *
     * @param SortAndSegregateDetail $sortAndSegregateDetail
     * @return $this
     */
    public function setSortAndSegregateDetail(SortAndSegregateDetail $sortAndSegregateDetail)
    {
        $this->values['SortAndSegregateDetail'] = $sortAndSegregateDetail;
        return $this;
    }

    /**
     * Specification for special equipment used in loading/unloading shipment.
     *
     * @param SpecialEquipmentDetail $specialEquipmentDetail
     * @return $this
     */
    public function setSpecialEquipmentDetail(SpecialEquipmentDetail $specialEquipmentDetail)
    {
        $this->values['SpecialEquipmentDetail'] = $specialEquipmentDetail;
        return $this;
    }

    /**
     * Specification for storage provided for shipment.
     *
     * @param StorageDetail $storageDetail
     * @return $this
     */
    public function setStorageDetail(StorageDetail $storageDetail)
    {
        $this->values['StorageDetail'] = $storageDetail;
        return $this;
    }

    /**
     * Specification for weighing services provided for shipment.
     *
     * @param WeighingDetail $weighingDetail
     * @return $this
     */
    public function setWeighingDetail(WeighingDetail $weighingDetail)
    {
        $this->values['WeighingDetail'] = $weighingDetail;
        return $this;
    }

    /**
     * Specification for date or range of dates on which delivery is to be attempted.
     *
     * @param CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return $this
     */
    public function setCustomDeliveryWindowDetail(CustomDeliveryWindowDetail $customDeliveryWindowDetail)
    {
        $this->values['CustomDeliveryWindowDetail'] = $customDeliveryWindowDetail;
        return $this;
    }

    
}
