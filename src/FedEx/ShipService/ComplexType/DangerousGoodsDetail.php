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
     * @return DangerousGoodsDetail
     */
    public function setAccessibility($accessibility)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Returns Identifies whether or not the products being shipped are required to be accessible during delivery.
     *
     * @return \FedEx\ShipService\SimpleType\DangerousGoodsAccessibilityType|string
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
     * @return DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Returns Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }
    
    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param HazardousCommodityOptionType[] $options
     * @return DangerousGoodsDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Indicates which kinds of hazardous content are in the current package.
     *
     * @return HazardousCommodityOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    
    /**
     * Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     *
     * @param \FedEx\ShipService\SimpleType\DangerousGoodsPackingOptionType|string $packingOption
     * @return DangerousGoodsDetail
     */
    public function setPackingOption($packingOption)
    {
        $this->PackingOption = $packingOption;
        return $this;
    }
    
    /**
     * Returns Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     *
     * @return \FedEx\ShipService\SimpleType\DangerousGoodsPackingOptionType|string
     */
    public function getPackingOption()
    {
        return $this->PackingOption;
    }
    
    /**
     * Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     *
     * @param string $referenceId
     * @return DangerousGoodsDetail
     */
    public function setReferenceId($referenceId)
    {
        $this->ReferenceId = $referenceId;
        return $this;
    }
    
    /**
     * Returns Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    
    /**
     * Indicates one or more containers used to pack dangerous goods commodities.
     *
     * @param DangerousGoodsContainer[] $containers
     * @return DangerousGoodsDetail
     */
    public function setContainers(array $containers)
    {
        $this->Containers = $containers;
        return $this;
    }
    
    /**
     * Returns Indicates one or more containers used to pack dangerous goods commodities.
     *
     * @return DangerousGoodsContainer[]
     */
    public function getContainers()
    {
        return $this->Containers;
    }
    
    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $packaging
     * @return DangerousGoodsDetail
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @return HazardousCommodityPackagingDetail
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    
    /**
     * Name, title and place of the signatory for this shipment.
     *
     * @param DangerousGoodsSignatory $signatory
     * @return DangerousGoodsDetail
     */
    public function setSignatory(DangerousGoodsSignatory $signatory)
    {
        $this->Signatory = $signatory;
        return $this;
    }
    
    /**
     * Returns Name, title and place of the signatory for this shipment.
     *
     * @return DangerousGoodsSignatory
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }
    
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $emergencyContactNumber
     * @return DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    
    /**
     * Returns Telephone number to use for contact in the event of an emergency.
     *
     * @return string
     */
    public function getEmergencyContactNumber()
    {
        return $this->EmergencyContactNumber;
    }
    
    /**
     * Offeror's name or contract number, per DOT regulation.
     *
     * @param string $offeror
     * @return DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->Offeror = $offeror;
        return $this;
    }
    
    /**
     * Returns Offeror's name or contract number, per DOT regulation.
     *
     * @return string
     */
    public function getOfferor()
    {
        return $this->Offeror;
    }
    
    /**
     * Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
     *
     * @param Contact $infectiousSubstanceResponsibleContact
     * @return DangerousGoodsDetail
     */
    public function setInfectiousSubstanceResponsibleContact(Contact $infectiousSubstanceResponsibleContact)
    {
        $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
        return $this;
    }
    
    /**
     * Returns Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
     *
     * @return Contact
     */
    public function getInfectiousSubstanceResponsibleContact()
    {
        return $this->InfectiousSubstanceResponsibleContact;
    }
    
    /**
     * Specifies additional handling information for the current package.
     *
     * @param string $additionalHandling
     * @return DangerousGoodsDetail
     */
    public function setAdditionalHandling($additionalHandling)
    {
        $this->AdditionalHandling = $additionalHandling;
        return $this;
    }
    
    /**
     * Returns Specifies additional handling information for the current package.
     *
     * @return string
     */
    public function getAdditionalHandling()
    {
        return $this->AdditionalHandling;
    }
    
    /**
     * Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     *
     * @param RadioactivityDetail $radioactivityDetail
     * @return DangerousGoodsDetail
     */
    public function setRadioactivityDetail(RadioactivityDetail $radioactivityDetail)
    {
        $this->RadioactivityDetail = $radioactivityDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     *
     * @return RadioactivityDetail
     */
    public function getRadioactivityDetail()
    {
        return $this->RadioactivityDetail;
    }
    

    
}