<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PackageSpecialServiceDescription
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ServiceTypesByCarrierCodeDetail[] $CarrierCodesAndServices
 * @property string $SubSpecialServiceId
 * @property ProductName[] $SubNames
 * @property string $SpecialServiceId
 * @property ProductName[] $Names
 * @property string $SpecialServiceType
 * @property string $SpecialServiceSubType
 * @property string $Code
 * @property string $Description
 * @property string $AstraDescription
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerIntegrationModeType|string $CustomerIntegrationMode

 */
class PackageSpecialServiceDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageSpecialServiceDescription';

    /**
     * Specifies the carrier codes and service types that the special service is valid for.
     *
     * @param ServiceTypesByCarrierCodeDetail[] $carrierCodesAndServices
     * @return $this
     */
    public function setCarrierCodesAndServices(array $carrierCodesAndServices)
    {
        $this->values['CarrierCodesAndServices'] = $carrierCodesAndServices;
        return $this;
    }

    /**
     * This field specifies the sub-special service offering ID.
     *
     * @param string $subSpecialServiceId
     * @return $this
     */
    public function setSubSpecialServiceId($subSpecialServiceId)
    {
        $this->values['SubSpecialServiceId'] = $subSpecialServiceId;
        return $this;
    }

    /**
     * Set SubNames
     *
     * @param ProductName[] $subNames
     * @return $this
     */
    public function setSubNames(array $subNames)
    {
        $this->values['SubNames'] = $subNames;
        return $this;
    }

    /**
     * This field specifies the package special service offering ID.
     *
     * @param string $specialServiceId
     * @return $this
     */
    public function setSpecialServiceId($specialServiceId)
    {
        $this->values['SpecialServiceId'] = $specialServiceId;
        return $this;
    }

    /**
     * Set Names
     *
     * @param ProductName[] $names
     * @return $this
     */
    public function setNames(array $names)
    {
        $this->values['Names'] = $names;
        return $this;
    }

    /**
     * Set SpecialServiceType
     *
     * @param string $specialServiceType
     * @return $this
     */
    public function setSpecialServiceType($specialServiceType)
    {
        $this->values['SpecialServiceType'] = $specialServiceType;
        return $this;
    }

    /**
     * Specific subtype of service with multiple exclusive variations: such as DANGEROUS_GOODS and SIGNATURE_OPTION.
     *
     * @param string $specialServiceSubType
     * @return $this
     */
    public function setSpecialServiceSubType($specialServiceSubType)
    {
        $this->values['SpecialServiceSubType'] = $specialServiceSubType;
        return $this;
    }

    /**
     * Set Code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set AstraDescription
     *
     * @param string $astraDescription
     * @return $this
     */
    public function setAstraDescription($astraDescription)
    {
        $this->values['AstraDescription'] = $astraDescription;
        return $this;
    }

    /**
     * Indicates what kind of integration is required to support the special service.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerIntegrationModeType|string $customerIntegrationMode
     * @return $this
     */
    public function setCustomerIntegrationMode($customerIntegrationMode)
    {
        $this->values['CustomerIntegrationMode'] = $customerIntegrationMode;
        return $this;
    }
}
