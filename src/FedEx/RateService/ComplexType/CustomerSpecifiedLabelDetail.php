<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Allows customer-specified control of label content.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerSpecifiedLabelDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerSpecifiedLabelDetail';

    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $docTabContent
     * return CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    
    /**
     * Defines any custom content to print on the label.
     *
     * @param CustomLabelDetail $customContent
     * return CustomerSpecifiedLabelDetail
     */
    public function setCustomContent(CustomLabelDetail $customContent)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    
    /**
     * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
     *
     * @param ConfigurableLabelReferenceEntry[] $configurableReferenceEntries
     * return CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(array $configurableReferenceEntries)
    {
        $this->ConfigurableReferenceEntries = $configurableReferenceEntries;
        return $this;
    }
    
    /**
     * Controls which data/sections will be suppressed.
     *
     * @param LabelMaskableDataType[] $maskedData
     * return CustomerSpecifiedLabelDetail
     */
    public function setMaskedData(array $maskedData)
    {
        $this->MaskedData = $maskedData;
        return $this;
    }
    
    /**
     * For customers producing their own Ground labels, this field specifies which secondary barcode will be printed on the label; so that the primary barcode produced by FedEx has the corect SCNC.
     *
     * @param \FedEx\RateService\SimpleType\SecondaryBarcodeType|string $secondaryBarcode
     * return CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode($secondaryBarcode)
    {
        $this->SecondaryBarcode = $secondaryBarcode;
        return $this;
    }
    
    /**
     * The language to use when printing the terms and conditions on the label.
     *
     * @param Localization $termsAndConditionsLocalization
     * return CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization(Localization $termsAndConditionsLocalization)
    {
        $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;
        return $this;
    }
    
    /**
     * Controls the number of additional copies of supplemental labels.
     *
     * @param AdditionalLabelsDetail[] $additionalLabels
     * return CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(array $additionalLabels)
    {
        $this->AdditionalLabels = $additionalLabels;
        return $this;
    }
    
    /**
     * This value reduces the default quantity of destination/consignee air waybill labels. A value of zero indicates no change to default. A minimum of one copy will always be produced.
     *
     * @param nonNegativeInteger $airWaybillSuppressionCount
     * return CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount)
    {
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
        return $this;
    }
    

    
}