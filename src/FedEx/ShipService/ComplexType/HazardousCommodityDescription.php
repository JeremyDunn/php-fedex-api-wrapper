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
     * @return HazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @param nonNegativeInteger $sequenceNumber
     * @return HazardousCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Returns In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @return nonNegativeInteger
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    
    /**
     * Set PackingGroup
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * @return HazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup)
    {
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    
    /**
     * Returns Set PackingGroup
     *
     * @return \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }
    
    /**
     * Set PackingDetails
     *
     * @param HazardousCommodityPackingDetail $packingDetails
     * @return HazardousCommodityDescription
     */
    public function setPackingDetails(HazardousCommodityPackingDetail $packingDetails)
    {
        $this->PackingDetails = $packingDetails;
        return $this;
    }
    
    /**
     * Returns Set PackingDetails
     *
     * @return HazardousCommodityPackingDetail
     */
    public function getPackingDetails()
    {
        return $this->PackingDetails;
    }
    
    /**
     * Set ReportableQuantity
     *
     * @param boolean $reportableQuantity
     * @return HazardousCommodityDescription
     */
    public function setReportableQuantity($reportableQuantity)
    {
        $this->ReportableQuantity = $reportableQuantity;
        return $this;
    }
    
    /**
     * Returns Set ReportableQuantity
     *
     * @return boolean
     */
    public function getReportableQuantity()
    {
        return $this->ReportableQuantity;
    }
    
    /**
     * Set ProperShippingName
     *
     * @param string $properShippingName
     * @return HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    
    /**
     * Returns Set ProperShippingName
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->ProperShippingName;
    }
    
    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * @return HazardousCommodityDescription
     */
    public function setTechnicalName($technicalName)
    {
        $this->TechnicalName = $technicalName;
        return $this;
    }
    
    /**
     * Returns Set TechnicalName
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->TechnicalName;
    }
    
    /**
     * Set Percentage
     *
     * @param decimal $percentage
     * @return HazardousCommodityDescription
     */
    public function setPercentage($percentage)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    
    /**
     * Returns Set Percentage
     *
     * @return decimal
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    
    /**
     * Set HazardClass
     *
     * @param string $hazardClass
     * @return HazardousCommodityDescription
     */
    public function setHazardClass($hazardClass)
    {
        $this->HazardClass = $hazardClass;
        return $this;
    }
    
    /**
     * Returns Set HazardClass
     *
     * @return string
     */
    public function getHazardClass()
    {
        return $this->HazardClass;
    }
    
    /**
     * Set SubsidiaryClasses
     *
     * @param string[] $subsidiaryClasses
     * @return HazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    
    /**
     * Returns Set SubsidiaryClasses
     *
     * @return string[]
     */
    public function getSubsidiaryClasses()
    {
        return $this->SubsidiaryClasses;
    }
    
    /**
     * Set LabelText
     *
     * @param string $labelText
     * @return HazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    
    /**
     * Returns Set LabelText
     *
     * @return string
     */
    public function getLabelText()
    {
        return $this->LabelText;
    }
    
    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     *
     * @param HazardousCommodityDescriptionProcessingOptionType[] $processingOptions
     * @return HazardousCommodityDescription
     */
    public function setProcessingOptions(array $processingOptions)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    
    /**
     * Returns Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     *
     * @return HazardousCommodityDescriptionProcessingOptionType[]
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    
    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @param string $authorization
     * @return HazardousCommodityDescription
     */
    public function setAuthorization($authorization)
    {
        $this->Authorization = $authorization;
        return $this;
    }
    
    /**
     * Returns Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @return string
     */
    public function getAuthorization()
    {
        return $this->Authorization;
    }
    

    
}