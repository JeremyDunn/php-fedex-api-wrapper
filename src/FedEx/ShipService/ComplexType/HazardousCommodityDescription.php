<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies and describes an individual hazardous commodity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityDescription
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $id
     * return HazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @param nonNegativeInteger $sequenceNumber
     * return HazardousCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Set PackingGroup
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * return HazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup)
    {
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    
    /**
     * Set PackingDetails
     *
     * @param HazardousCommodityPackingDetail $packingDetails
     * return HazardousCommodityDescription
     */
    public function setPackingDetails(HazardousCommodityPackingDetail $packingDetails)
    {
        $this->PackingDetails = $packingDetails;
        return $this;
    }
    
    /**
     * Set ReportableQuantity
     *
     * @param boolean $reportableQuantity
     * return HazardousCommodityDescription
     */
    public function setReportableQuantity($reportableQuantity)
    {
        $this->ReportableQuantity = $reportableQuantity;
        return $this;
    }
    
    /**
     * Set ProperShippingName
     *
     * @param string $properShippingName
     * return HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    
    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * return HazardousCommodityDescription
     */
    public function setTechnicalName($technicalName)
    {
        $this->TechnicalName = $technicalName;
        return $this;
    }
    
    /**
     * Set Percentage
     *
     * @param decimal $percentage
     * return HazardousCommodityDescription
     */
    public function setPercentage($percentage)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    
    /**
     * Set HazardClass
     *
     * @param string $hazardClass
     * return HazardousCommodityDescription
     */
    public function setHazardClass($hazardClass)
    {
        $this->HazardClass = $hazardClass;
        return $this;
    }
    
    /**
     * Set SubsidiaryClasses
     *
     * @param string[] $subsidiaryClasses
     * return HazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    
    /**
     * Set LabelText
     *
     * @param string $labelText
     * return HazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    
    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     *
     * @param HazardousCommodityDescriptionProcessingOptionType[] $processingOptions
     * return HazardousCommodityDescription
     */
    public function setProcessingOptions(array $processingOptions)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @param string $authorization
     * return HazardousCommodityDescription
     */
    public function setAuthorization($authorization)
    {
        $this->Authorization = $authorization;
        return $this;
    }
    

    
}