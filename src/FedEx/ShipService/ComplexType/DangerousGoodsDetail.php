<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required for a FedEx shipment containing dangerous goods (hazardous materials).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DangerousGoodsDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DangerousGoodsDetail';

    /**
     * Identifies whether or not the products being shipped are required to be accessible during delivery.
     *
     * @param \FedEx\ShipService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * return DangerousGoodsDetail
     */
    public function setAccessibility($accessibility)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
     * return DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param HazardousCommodityOptionType[] $options
     * return DangerousGoodsDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     *
     * @param \FedEx\ShipService\SimpleType\DangerousGoodsPackingOptionType|string $packingOption
     * return DangerousGoodsDetail
     */
    public function setPackingOption($packingOption)
    {
        $this->PackingOption = $packingOption;
        return $this;
    }
    
    /**
     * Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     *
     * @param string $referenceId
     * return DangerousGoodsDetail
     */
    public function setReferenceId($referenceId)
    {
        $this->ReferenceId = $referenceId;
        return $this;
    }
    
    /**
     * Indicates one or more containers used to pack dangerous goods commodities.
     *
     * @param DangerousGoodsContainer[] $containers
     * return DangerousGoodsDetail
     */
    public function setContainers(array $containers)
    {
        $this->Containers = $containers;
        return $this;
    }
    
    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $packaging
     * return DangerousGoodsDetail
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Name, title and place of the signatory for this shipment.
     *
     * @param DangerousGoodsSignatory $signatory
     * return DangerousGoodsDetail
     */
    public function setSignatory(DangerousGoodsSignatory $signatory)
    {
        $this->Signatory = $signatory;
        return $this;
    }
    
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $emergencyContactNumber
     * return DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    
    /**
     * Offeror's name or contract number, per DOT regulation.
     *
     * @param string $offeror
     * return DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->Offeror = $offeror;
        return $this;
    }
    
    /**
     * Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
     *
     * @param Contact $infectiousSubstanceResponsibleContact
     * return DangerousGoodsDetail
     */
    public function setInfectiousSubstanceResponsibleContact(Contact $infectiousSubstanceResponsibleContact)
    {
        $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
        return $this;
    }
    
    /**
     * Specifies additional handling information for the current package.
     *
     * @param string $additionalHandling
     * return DangerousGoodsDetail
     */
    public function setAdditionalHandling($additionalHandling)
    {
        $this->AdditionalHandling = $additionalHandling;
        return $this;
    }
    
    /**
     * Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     *
     * @param RadioactivityDetail $radioactivityDetail
     * return DangerousGoodsDetail
     */
    public function setRadioactivityDetail(RadioactivityDetail $radioactivityDetail)
    {
        $this->RadioactivityDetail = $radioactivityDetail;
        return $this;
    }
    

    
}