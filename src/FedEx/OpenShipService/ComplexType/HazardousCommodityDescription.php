<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies and describes an individual hazardous commodity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $Id
 * @property int $SequenceNumber
 * @property \FedEx\OpenShipService\SimpleType\HazardousCommodityPackingGroupType|string $PackingGroup
 * @property HazardousCommodityPackingDetail $PackingDetails
 * @property boolean $ReportableQuantity
 * @property string $ProperShippingName
 * @property string $TechnicalName
 * @property float $Percentage
 * @property string $HazardClass
 * @property string[] $SubsidiaryClasses
 * @property string $LabelText
 * @property \FedEx\OpenShipService\SimpleType\HazardousCommodityDescriptionProcessingOptionType|string[] $ProcessingOptions
 * @property string $Authorization

 */
class HazardousCommodityDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
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
     * Set PackingGroup
     *
     * @param \FedEx\OpenShipService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * @return $this
     */
    public function setPackingGroup($packingGroup)
    {
        $this->values['PackingGroup'] = $packingGroup;
        return $this;
    }

    /**
     * Set PackingDetails
     *
     * @param HazardousCommodityPackingDetail $packingDetails
     * @return $this
     */
    public function setPackingDetails(HazardousCommodityPackingDetail $packingDetails)
    {
        $this->values['PackingDetails'] = $packingDetails;
        return $this;
    }

    /**
     * Set ReportableQuantity
     *
     * @param boolean $reportableQuantity
     * @return $this
     */
    public function setReportableQuantity($reportableQuantity)
    {
        $this->values['ReportableQuantity'] = $reportableQuantity;
        return $this;
    }

    /**
     * Set ProperShippingName
     *
     * @param string $properShippingName
     * @return $this
     */
    public function setProperShippingName($properShippingName)
    {
        $this->values['ProperShippingName'] = $properShippingName;
        return $this;
    }

    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * @return $this
     */
    public function setTechnicalName($technicalName)
    {
        $this->values['TechnicalName'] = $technicalName;
        return $this;
    }

    /**
     * Set Percentage
     *
     * @param float $percentage
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->values['Percentage'] = $percentage;
        return $this;
    }

    /**
     * Set HazardClass
     *
     * @param string $hazardClass
     * @return $this
     */
    public function setHazardClass($hazardClass)
    {
        $this->values['HazardClass'] = $hazardClass;
        return $this;
    }

    /**
     * Set SubsidiaryClasses
     *
     * @param string $subsidiaryClasses
     * @return $this
     */
    public function setSubsidiaryClasses($subsidiaryClasses)
    {
        $this->values['SubsidiaryClasses'] = $subsidiaryClasses;
        return $this;
    }

    /**
     * Set LabelText
     *
     * @param string $labelText
     * @return $this
     */
    public function setLabelText($labelText)
    {
        $this->values['LabelText'] = $labelText;
        return $this;
    }

    /**
     * Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     *
     * @param \FedEx\OpenShipService\SimpleType\HazardousCommodityDescriptionProcessingOptionType[]|string[] $processingOptions
     * @return $this
     */
    public function setProcessingOptions(array $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     * @param string $authorization
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->values['Authorization'] = $authorization;
        return $this;
    }
}
