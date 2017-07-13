<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property int $SequenceNumber
 * @property int $GroupNumber
 * @property int $GroupPackageCount
 * @property VariableHandlingChargeDetail $VariableHandlingChargeDetail
 * @property Money $InsuredValue
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 * @property \FedEx\ShipService\SimpleType\PhysicalPackagingType|string $PhysicalPackaging
 * @property string $ItemDescription
 * @property CustomerReference[] $CustomerReferences
 * @property PackageSpecialServicesRequested $SpecialServicesRequested
 * @property ContentRecord[] $ContentRecords

 */
class RequestedPackageLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RequestedPackageLineItem';

    /**
     * Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     *
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['SequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     *
     * @param int $groupNumber
     * @return $this
     */
    public function setGroupNumber($groupNumber)
    {
        $this->values['GroupNumber'] = $groupNumber;
        return $this;
    }

    /**
     * Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     *
     * @param int $groupPackageCount
     * @return $this
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->values['GroupPackageCount'] = $groupPackageCount;
        return $this;
    }

    /**
     * Set VariableHandlingChargeDetail
     *
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['VariableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue and packageCount on the shipment will be used to determine this value.
     *
     * @param Money $insuredValue
     * @return $this
     */
    public function setInsuredValue(Money $insuredValue)
    {
        $this->values['InsuredValue'] = $insuredValue;
        return $this;
    }

    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case total weight and packageCount on the shipment will be used to determine this value.
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }

    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     *
     * @param \FedEx\ShipService\SimpleType\PhysicalPackagingType|string $physicalPackaging
     * @return $this
     */
    public function setPhysicalPackaging($physicalPackaging)
    {
        $this->values['PhysicalPackaging'] = $physicalPackaging;
        return $this;
    }

    /**
     * Human-readable text describing the package.
     *
     * @param string $itemDescription
     * @return $this
     */
    public function setItemDescription($itemDescription)
    {
        $this->values['ItemDescription'] = $itemDescription;
        return $this;
    }

    /**
     * Set CustomerReferences
     *
     * @param CustomerReference[] $customerReferences
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->values['CustomerReferences'] = $customerReferences;
        return $this;
    }

    /**
     * Set SpecialServicesRequested
     *
     * @param PackageSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested(PackageSpecialServicesRequested $specialServicesRequested)
    {
        $this->values['SpecialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     *
     * @param ContentRecord[] $contentRecords
     * @return $this
     */
    public function setContentRecords(array $contentRecords)
    {
        $this->values['ContentRecords'] = $contentRecords;
        return $this;
    }
}
