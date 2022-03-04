<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadedDangerousGoodsShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\UploadedDangerousGoodsShipmentAttributeType|string[] $Attributes
 * @property Address $Origin
 * @property Address $Destination
 * @property \FedEx\DGDSService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\DGDSService\SimpleType\ServiceType|string $ServiceType
 * @property string $ShipDate
 * @property string $Offeror
 * @property DangerousGoodsSignatory $Signatory
 * @property Contact $InfectiousSubstanceResponsibleContact
 * @property string $EmergencyContactNumber
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsAircraftCategoryType|string $AircraftCategoryType
 * @property string $AdditionalHandling
 * @property TrackingId $MasterTrackingId

 */
class UploadedDangerousGoodsShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadedDangerousGoodsShipmentDetail';

    /**
     * Set Attributes
     *
     * @param \FedEx\DGDSService\SimpleType\UploadedDangerousGoodsShipmentAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Set Origin
     *
     * @param Address $origin
     * @return $this
     */
    public function setOrigin(Address $origin)
    {
        $this->values['Origin'] = $origin;
        return $this;
    }

    /**
     * Set Destination
     *
     * @param Address $destination
     * @return $this
     */
    public function setDestination(Address $destination)
    {
        $this->values['Destination'] = $destination;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\DGDSService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set ServiceType
     *
     * @param \FedEx\DGDSService\SimpleType\ServiceType|string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * Set ShipDate
     *
     * @param string $shipDate
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->values['ShipDate'] = $shipDate;
        return $this;
    }

    /**
     * Set Offeror
     *
     * @param string $offeror
     * @return $this
     */
    public function setOfferor($offeror)
    {
        $this->values['Offeror'] = $offeror;
        return $this;
    }

    /**
     * Name, title and place of the signatory for this shipment.
     *
     * @param DangerousGoodsSignatory $signatory
     * @return $this
     */
    public function setSignatory(DangerousGoodsSignatory $signatory)
    {
        $this->values['Signatory'] = $signatory;
        return $this;
    }

    /**
     * The contact information for infectious substances.
     *
     * @param Contact $infectiousSubstanceResponsibleContact
     * @return $this
     */
    public function setInfectiousSubstanceResponsibleContact(Contact $infectiousSubstanceResponsibleContact)
    {
        $this->values['InfectiousSubstanceResponsibleContact'] = $infectiousSubstanceResponsibleContact;
        return $this;
    }

    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $emergencyContactNumber
     * @return $this
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->values['EmergencyContactNumber'] = $emergencyContactNumber;
        return $this;
    }

    /**
     * Identifies the type of aircraft available for this shipment.
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsAircraftCategoryType|string $aircraftCategoryType
     * @return $this
     */
    public function setAircraftCategoryType($aircraftCategoryType)
    {
        $this->values['AircraftCategoryType'] = $aircraftCategoryType;
        return $this;
    }

    /**
     * Set AdditionalHandling
     *
     * @param string $additionalHandling
     * @return $this
     */
    public function setAdditionalHandling($additionalHandling)
    {
        $this->values['AdditionalHandling'] = $additionalHandling;
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
}
