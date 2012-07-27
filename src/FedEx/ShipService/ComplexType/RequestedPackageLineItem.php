<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces. The way in which it is uses within a RequestedShipment depends on the RequestedPackageDetailType value specified for that shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RequestedPackageLineItem
    extends AbstractComplexType
{
    protected $_name = 'RequestedPackageLineItem';

    /**
     * Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     *
     * @param positiveInteger $SequenceNumber
     * return RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     *
     * @param nonNegativeInteger $GroupNumber
     * return RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     *
     * @param nonNegativeInteger $GroupPackageCount
     * return RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->GroupPackageCount = $groupPackageCount;
        return $this;
    }
    
    /**
     * 
     *
     * @param VariableHandlingChargeDetail $VariableHandlingChargeDetail
     * return RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    
    /**
     * Used for INDIVIDUAL_PACKAGES, PACKAGE_GROUPS and PACKAGE_SUMMARY.
     *
     * @param Money $InsuredValue
     * return RequestedPackageLineItem
     */
    public function setInsuredValue(Money $insuredValue)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    
    /**
     * Used for INDIVIDUAL_PACKAGES, PACKAGE_GROUPS and PACKAGE_SUMMARY.
     *
     * @param Weight $Weight
     * return RequestedPackageLineItem
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * 
     *
     * @param Dimensions $Dimensions
     * return RequestedPackageLineItem
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     *
     * @param PhysicalPackagingType $PhysicalPackaging
     * return RequestedPackageLineItem
     */
    public function setPhysicalPackaging(\FedEx\ShipService\SimpleType\PhysicalPackagingType $physicalPackaging)
    {
        $this->PhysicalPackaging = $physicalPackaging;
        return $this;
    }
    
    /**
     * Human-readable text describing the package.
     *
     * @param string $ItemDescription
     * return RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->ItemDescription = $itemDescription;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomerReference] $CustomerReferences
     * return RequestedPackageLineItem
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    
    /**
     * 
     *
     * @param PackageSpecialServicesRequested $SpecialServicesRequested
     * return RequestedPackageLineItem
     */
    public function setSpecialServicesRequested(PackageSpecialServicesRequested $specialServicesRequested)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     *
     * @param array[ContentRecord] $ContentRecords
     * return RequestedPackageLineItem
     */
    public function setContentRecords(array $contentRecords)
    {
        $this->ContentRecords = $contentRecords;
        return $this;
    }
    

    
}