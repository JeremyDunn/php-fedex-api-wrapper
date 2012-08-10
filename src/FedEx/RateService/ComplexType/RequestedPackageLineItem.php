<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces. The way in which it is uses within a RequestedShipment depends on the RequestedPackageDetailType value specified for that shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RequestedPackageLineItem
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RequestedPackageLineItem';

    /**
     * Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     *
     * @param positiveInteger $sequenceNumber
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
     * @param nonNegativeInteger $groupNumber
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
     * @param nonNegativeInteger $groupPackageCount
     * return RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->GroupPackageCount = $groupPackageCount;
        return $this;
    }
    
    /**
     * Set VariableHandlingChargeDetail
     *
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * return RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue and packageCount on the shipment will be used to determine this value.
     *
     * @param Money $insuredValue
     * return RequestedPackageLineItem
     */
    public function setInsuredValue(Money $insuredValue)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalweight and packageCount on the shipment will be used to determine this value.
     *
     * @param Weight $weight
     * return RequestedPackageLineItem
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
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
     * @param \FedEx\RateService\SimpleType\PhysicalPackagingType|string $physicalPackaging
     * return RequestedPackageLineItem
     */
    public function setPhysicalPackaging($physicalPackaging)
    {
        $this->PhysicalPackaging = $physicalPackaging;
        return $this;
    }
    
    /**
     * Human-readable text describing the package.
     *
     * @param string $itemDescription
     * return RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->ItemDescription = $itemDescription;
        return $this;
    }
    
    /**
     * Set CustomerReferences
     *
     * @param CustomerReference[] $customerReferences
     * return RequestedPackageLineItem
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    
    /**
     * Set SpecialServicesRequested
     *
     * @param PackageSpecialServicesRequested $specialServicesRequested
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
     * @param ContentRecord[] $contentRecords
     * return RequestedPackageLineItem
     */
    public function setContentRecords(array $contentRecords)
    {
        $this->ContentRecords = $contentRecords;
        return $this;
    }
    

    
}