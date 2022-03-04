<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property SmartPostShipmentProcessingOptionsRequested $ProcessingOptionsRequested
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostIndiciaType|string $Indicia
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostAncillaryEndorsementType|string $AncillaryEndorsement
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostShipmentSpecialServiceType|string[] $SpecialServices
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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostIndiciaType|string $indicia
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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostAncillaryEndorsementType|string $ancillaryEndorsement
     * @return $this
     */
    public function setAncillaryEndorsement($ancillaryEndorsement)
    {
        $this->values['AncillaryEndorsement'] = $ancillaryEndorsement;
        return $this;
    }

    /**
     * Set SpecialServices
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostShipmentSpecialServiceType[]|string[] $specialServices
     * @return $this
     */
    public function setSpecialServices(array $specialServices)
    {
        $this->values['SpecialServices'] = $specialServices;
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
