<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DangerousGoodsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $UploadedTrackingNumber
 * @property \FedEx\ShipService\SimpleType\HazardousCommodityRegulationType|string $Regulation
 * @property \FedEx\ShipService\SimpleType\DangerousGoodsAccessibilityType|string $Accessibility
 * @property boolean $CargoAircraftOnly
 * @property \FedEx\ShipService\SimpleType\HazardousCommodityOptionType|string[] $Options
 * @property \FedEx\ShipService\SimpleType\DangerousGoodsPackingOptionType|string $PackingOption
 * @property string $ReferenceId
 * @property DangerousGoodsContainer[] $Containers
 * @property HazardousCommodityPackagingDetail $Packaging
 * @property DangerousGoodsSignatory $Signatory
 * @property string $EmergencyContactNumber
 * @property string $Offeror
 * @property Contact $InfectiousSubstanceResponsibleContact
 * @property string $AdditionalHandling
 * @property RadioactivityDetail $RadioactivityDetail

 */
class DangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsDetail';

    /**
     * This field is used to identify an instance of an uploaded dangerous goods handling unit.
     *
     * @param string $uploadedTrackingNumber
     * @return $this
     */
    public function setUploadedTrackingNumber($uploadedTrackingNumber)
    {
        $this->values['UploadedTrackingNumber'] = $uploadedTrackingNumber;
        return $this;
    }

    /**
     * Set Regulation
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityRegulationType|string $regulation
     * @return $this
     */
    public function setRegulation($regulation)
    {
        $this->values['Regulation'] = $regulation;
        return $this;
    }

    /**
     * Set Accessibility
     *
     * @param \FedEx\ShipService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['Accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
     * @return $this
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->values['CargoAircraftOnly'] = $cargoAircraftOnly;
        return $this;
    }

    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     *
     * @param \FedEx\ShipService\SimpleType\DangerousGoodsPackingOptionType|string $packingOption
     * @return $this
     */
    public function setPackingOption($packingOption)
    {
        $this->values['PackingOption'] = $packingOption;
        return $this;
    }

    /**
     * Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     *
     * @param string $referenceId
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->values['ReferenceId'] = $referenceId;
        return $this;
    }

    /**
     * Indicates one or more containers used to pack dangerous goods commodities.
     *
     * @param DangerousGoodsContainer[] $containers
     * @return $this
     */
    public function setContainers(array $containers)
    {
        $this->values['Containers'] = $containers;
        return $this;
    }

    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $packaging
     * @return $this
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging)
    {
        $this->values['Packaging'] = $packaging;
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
     * Offeror's name or contract number, per DOT regulation.
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
     * Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
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
     * Specifies additional handling information for the current package.
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
     * Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     *
     * @param RadioactivityDetail $radioactivityDetail
     * @return $this
     */
    public function setRadioactivityDetail(RadioactivityDetail $radioactivityDetail)
    {
        $this->values['RadioactivityDetail'] = $radioactivityDetail;
        return $this;
    }
}
