<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Allows customer-specified control of label content.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property DocTabContent $DocTabContent
 * @property CustomLabelDetail $CustomContent
 * @property ConfigurableLabelReferenceEntry[] $ConfigurableReferenceEntries
 * @property \FedEx\RateService\SimpleType\LabelMaskableDataType|string[] $MaskedData
 * @property \FedEx\RateService\SimpleType\SecondaryBarcodeType|string $SecondaryBarcode
 * @property Localization $TermsAndConditionsLocalization
 * @property AdditionalLabelsDetail[] $AdditionalLabels
 * @property int $AirWaybillSuppressionCount

 */
class CustomerSpecifiedLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerSpecifiedLabelDetail';

    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $docTabContent
     * @return $this
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->values['DocTabContent'] = $docTabContent;
        return $this;
    }

    /**
     * Defines any custom content to print on the label.
     *
     * @param CustomLabelDetail $customContent
     * @return $this
     */
    public function setCustomContent(CustomLabelDetail $customContent)
    {
        $this->values['CustomContent'] = $customContent;
        return $this;
    }

    /**
     * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
     *
     * @param ConfigurableLabelReferenceEntry[] $configurableReferenceEntries
     * @return $this
     */
    public function setConfigurableReferenceEntries(array $configurableReferenceEntries)
    {
        $this->values['ConfigurableReferenceEntries'] = $configurableReferenceEntries;
        return $this;
    }

    /**
     * Controls which data/sections will be suppressed.
     *
     * @param \FedEx\RateService\SimpleType\LabelMaskableDataType[]|string[] $maskedData
     * @return $this
     */
    public function setMaskedData(array $maskedData)
    {
        $this->values['MaskedData'] = $maskedData;
        return $this;
    }

    /**
     * For customers producing their own Ground labels, this field specifies which secondary barcode will be printed on the label; so that the primary barcode produced by FedEx has the corect SCNC.
     *
     * @param \FedEx\RateService\SimpleType\SecondaryBarcodeType|string $secondaryBarcode
     * @return $this
     */
    public function setSecondaryBarcode($secondaryBarcode)
    {
        $this->values['SecondaryBarcode'] = $secondaryBarcode;
        return $this;
    }

    /**
     * The language to use when printing the terms and conditions on the label.
     *
     * @param Localization $termsAndConditionsLocalization
     * @return $this
     */
    public function setTermsAndConditionsLocalization(Localization $termsAndConditionsLocalization)
    {
        $this->values['TermsAndConditionsLocalization'] = $termsAndConditionsLocalization;
        return $this;
    }

    /**
     * Controls the number of additional copies of supplemental labels.
     *
     * @param AdditionalLabelsDetail[] $additionalLabels
     * @return $this
     */
    public function setAdditionalLabels(array $additionalLabels)
    {
        $this->values['AdditionalLabels'] = $additionalLabels;
        return $this;
    }

    /**
     * This value reduces the default quantity of destination/consignee air waybill labels. A value of zero indicates no change to default. A minimum of one copy will always be produced.
     *
     * @param int $airWaybillSuppressionCount
     * @return $this
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount)
    {
        $this->values['AirWaybillSuppressionCount'] = $airWaybillSuppressionCount;
        return $this;
    }
}
