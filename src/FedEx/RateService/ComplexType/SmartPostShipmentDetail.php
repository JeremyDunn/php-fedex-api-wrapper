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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SmartPostShipmentDetail';

    /**
     * Set Indicia
     *
     * @param \FedEx\RateService\SimpleType\SmartPostIndiciaType  $indicia
     * return SmartPostShipmentDetail
     */
    public function setIndicia(\FedEx\RateService\SimpleType\SmartPostIndiciaType $indicia)
    {
        $this->Indicia = $indicia;
        return $this;
    }
    
    /**
     * Set AncillaryEndorsement
     *
     * @param \FedEx\RateService\SimpleType\SmartPostAncillaryEndorsementType  $ancillaryEndorsement
     * return SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement(\FedEx\RateService\SimpleType\SmartPostAncillaryEndorsementType $ancillaryEndorsement)
    {
        $this->AncillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    
    /**
     * Set HubId
     *
     * @param string $hubId
     * return SmartPostShipmentDetail
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * return SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    

    
}