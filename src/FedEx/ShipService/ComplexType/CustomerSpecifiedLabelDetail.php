<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Allows customer-specified control of label content.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomerSpecifiedLabelDetail
    extends AbstractComplexType
{
    protected $_name = 'CustomerSpecifiedLabelDetail';

    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $DocTabContent
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
     * @param CustomLabelDetail $CustomContent
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
     * @param array[ConfigurableLabelReferenceEntry] $ConfigurableReferenceEntries
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
     * @param array[LabelMaskableDataType] $MaskedData
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
     * @param SecondaryBarcodeType $SecondaryBarcode
     * return CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode(\FedEx\ShipService\SimpleType\SecondaryBarcodeType $secondaryBarcode)
    {
        $this->SecondaryBarcode = $secondaryBarcode;
        return $this;
    }
    
    /**
     * 
     *
     * @param Localization $TermsAndConditionsLocalization
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
     * @param array[AdditionalLabelsDetail] $AdditionalLabels
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
     * @param nonNegativeInteger $AirWaybillSuppressionCount
     * return CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount)
    {
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
        return $this;
    }
    

    
}