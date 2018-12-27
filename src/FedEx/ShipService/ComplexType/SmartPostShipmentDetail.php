<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property SmartPostShipmentProcessingOptionsRequested $ProcessingOptionsRequested
 * @property \FedEx\ShipService\SimpleType\SmartPostIndiciaType|string $Indicia
 * @property \FedEx\ShipService\SimpleType\SmartPostAncillaryEndorsementType|string $AncillaryEndorsement
 * @property string $HubId
 * @property string $CustomerManifestId

 */
class SmartPostShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SmartPostShipmentDetail';

    /**
     * Set ProcessingOptionsRequested
     *
     * @param SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested
     * @return $this
     */
    public function setProcessingOptionsRequested(SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested)
    {
        $this->values['ProcessingOptionsRequested'] = $processingOptionsRequested;
        return $this;
    }

    /**
     * Set Indicia
     *
     * @param \FedEx\ShipService\SimpleType\SmartPostIndiciaType|string $indicia
     * @return $this
     */
    public function setIndicia($indicia)
    {
        $this->values['Indicia'] = $indicia;
        return $this;
    }

    /**
     * Set AncillaryEndorsement
     *
     * @param \FedEx\ShipService\SimpleType\SmartPostAncillaryEndorsementType|string $ancillaryEndorsement
     * @return $this
     */
    public function setAncillaryEndorsement($ancillaryEndorsement)
    {
        $this->values['AncillaryEndorsement'] = $ancillaryEndorsement;
        return $this;
    }

    /**
     * Set HubId
     *
     * @param string $hubId
     * @return $this
     */
    public function setHubId($hubId)
    {
        $this->values['HubId'] = $hubId;
        return $this;
    }

    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * @return $this
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->values['CustomerManifestId'] = $customerManifestId;
        return $this;
    }
}
