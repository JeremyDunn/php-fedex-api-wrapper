<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @param \FedEx\ShipService\SimpleType\SmartPostIndiciaType|string $indicia
     * return SmartPostShipmentDetail
     */
    public function setIndicia($indicia)
    {
        $this->Indicia = $indicia;
        return $this;
    }
    
    /**
     * Set AncillaryEndorsement
     *
     * @param \FedEx\ShipService\SimpleType\SmartPostAncillaryEndorsementType|string $ancillaryEndorsement
     * return SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement($ancillaryEndorsement)
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
     * 
                The CustomerManifestId is used to group Smart Post packages onto a manifest for each trailer that is being prepared. If you do not have multiple trailers this field can be omitted. If you have multiple trailers, you
                must assign the same Manifest Id to each SmartPost package as determined by its trailer.  In other words, all packages on a trailer must have the same Customer Manifest Id. The manifest Id must be unique to your account number for a minimum of 6 months
                and cannot exceed 8 characters in length. We recommend you use the day of year + the trailer id (this could simply be a sequential number for that trailer). So if you had 3 trailers that you started loading on Feb 10
                the 3 manifest ids would be 041001, 041002, 041003 (in this case we used leading zeros on the trailer numbers).
              
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