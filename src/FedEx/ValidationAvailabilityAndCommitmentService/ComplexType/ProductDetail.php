<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ProductDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ServiceDescription $ServiceDescription
 * @property PackagingDescription $PackagingDescription
 * @property string $AstraServiceDescription
 * @property string $Scac
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceOptionType|string[] $AppliedOptions
 * @property ServiceSubOptionDetail $AppliedSubOptions
 * @property SignatureOptionDetail $DerivedShipmentSignatureOption
 * @property SignatureOptionDetail[] $DerivedPackageSignatureOptions
 * @property Weight[] $MaximumWeights
 * @property Dimensions[] $MaximumDimensions
 * @property LinearMeasure[] $MaximumLengthPlusGirths
 * @property Money $MaximumInsuredValue
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CompletedEtdType|string $DerivedEtdType

 */
class ProductDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ProductDetail';

    /**
     * Set ServiceDescription
     *
     * @param ServiceDescription $serviceDescription
     * @return $this
     */
    public function setServiceDescription(ServiceDescription $serviceDescription)
    {
        $this->values['ServiceDescription'] = $serviceDescription;
        return $this;
    }

    /**
     * Set PackagingDescription
     *
     * @param PackagingDescription $packagingDescription
     * @return $this
     */
    public function setPackagingDescription(PackagingDescription $packagingDescription)
    {
        $this->values['PackagingDescription'] = $packagingDescription;
        return $this;
    }

    /**
     * Set AstraServiceDescription
     *
     * @param string $astraServiceDescription
     * @return $this
     */
    public function setAstraServiceDescription($astraServiceDescription)
    {
        $this->values['AstraServiceDescription'] = $astraServiceDescription;
        return $this;
    }

    /**
     * Set Scac
     *
     * @param string $scac
     * @return $this
     */
    public function setScac($scac)
    {
        $this->values['Scac'] = $scac;
        return $this;
    }

    /**
     * Set AppliedOptions
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceOptionType[]|string[] $appliedOptions
     * @return $this
     */
    public function setAppliedOptions(array $appliedOptions)
    {
        $this->values['AppliedOptions'] = $appliedOptions;
        return $this;
    }

    /**
     * Supporting detail for applied options.
     *
     * @param ServiceSubOptionDetail $appliedSubOptions
     * @return $this
     */
    public function setAppliedSubOptions(ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->values['AppliedSubOptions'] = $appliedSubOptions;
        return $this;
    }

    /**
     * Set DerivedShipmentSignatureOption
     *
     * @param SignatureOptionDetail $derivedShipmentSignatureOption
     * @return $this
     */
    public function setDerivedShipmentSignatureOption(SignatureOptionDetail $derivedShipmentSignatureOption)
    {
        $this->values['DerivedShipmentSignatureOption'] = $derivedShipmentSignatureOption;
        return $this;
    }

    /**
     * Set DerivedPackageSignatureOptions
     *
     * @param SignatureOptionDetail[] $derivedPackageSignatureOptions
     * @return $this
     */
    public function setDerivedPackageSignatureOptions(array $derivedPackageSignatureOptions)
    {
        $this->values['DerivedPackageSignatureOptions'] = $derivedPackageSignatureOptions;
        return $this;
    }

    /**
     * Set MaximumWeights
     *
     * @param Weight[] $maximumWeights
     * @return $this
     */
    public function setMaximumWeights(array $maximumWeights)
    {
        $this->values['MaximumWeights'] = $maximumWeights;
        return $this;
    }

    /**
     * Set MaximumDimensions
     *
     * @param Dimensions[] $maximumDimensions
     * @return $this
     */
    public function setMaximumDimensions(array $maximumDimensions)
    {
        $this->values['MaximumDimensions'] = $maximumDimensions;
        return $this;
    }

    /**
     * Set MaximumLengthPlusGirths
     *
     * @param LinearMeasure[] $maximumLengthPlusGirths
     * @return $this
     */
    public function setMaximumLengthPlusGirths(array $maximumLengthPlusGirths)
    {
        $this->values['MaximumLengthPlusGirths'] = $maximumLengthPlusGirths;
        return $this;
    }

    /**
     * Set MaximumInsuredValue
     *
     * @param Money $maximumInsuredValue
     * @return $this
     */
    public function setMaximumInsuredValue(Money $maximumInsuredValue)
    {
        $this->values['MaximumInsuredValue'] = $maximumInsuredValue;
        return $this;
    }

    /**
     * Set DerivedEtdType
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CompletedEtdType|string $derivedEtdType
     * @return $this
     */
    public function setDerivedEtdType($derivedEtdType)
    {
        $this->values['DerivedEtdType'] = $derivedEtdType;
        return $this;
    }
}
