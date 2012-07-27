<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SmartPostShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'SmartPostShipmentDetail';

    /**
     * 
     *
     * @param SmartPostIndiciaType $Indicia
     * return SmartPostShipmentDetail
     */
    public function setIndicia(\FedEx\RateService\SimpleType\SmartPostIndiciaType $indicia)
    {
        $this->Indicia = $indicia;
        return $this;
    }
    
    /**
     * 
     *
     * @param SmartPostAncillaryEndorsementType $AncillaryEndorsement
     * return SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement(\FedEx\RateService\SimpleType\SmartPostAncillaryEndorsementType $ancillaryEndorsement)
    {
        $this->AncillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $HubId
     * return SmartPostShipmentDetail
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CustomerManifestId
     * return SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    

    
}