<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Allows customer-specified control of label content.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property DocTabContent $DocTabContent
 * @property \FedEx\ShipService\SimpleType\RelativeVerticalPositionType|string $CustomContentPosition
 * @property CustomLabelDetail $CustomContent
 * @property ConfigurableLabelReferenceEntry[] $ConfigurableReferenceEntries
 * @property \FedEx\ShipService\SimpleType\LabelMaskableDataType|string[] $MaskedData
 * @property \FedEx\ShipService\SimpleType\SecondaryBarcodeType|string $SecondaryBarcode
 * @property Localization $TermsAndConditionsLocalization
 * @property RegulatoryLabelContentDetail[] $RegulatoryLabels
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
     * If omitted, no doc tab will be produced (i.e. default is former NONE type).
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
     * Controls the position of the customer specified content relative to the FedEx portion.
     *
     * @param \FedEx\ShipService\SimpleType\RelativeVerticalPositionType|string $customContentPosition
     * @return $this
     */
    public function setCustomContentPosition($customContentPosition)
    {
        $this->values['CustomContentPosition'] = $customContentPosition;
        return $this;
    }

    /**
     * Set CustomContent
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
     * Set ConfigurableReferenceEntries
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
     * @param \FedEx\ShipService\SimpleType\LabelMaskableDataType[]|string[] $maskedData
     * @return $this
     */
    public function setMaskedData(array $maskedData)
    {
        $this->values['MaskedData'] = $maskedData;
        return $this;
    }

    /**
     * For customers producing their own Ground labels, this field specifies which secondary barcode will be printed on the label; so that the primary barcode produced by FedEx has the correct SCNC.
     *
     * @param \FedEx\ShipService\SimpleType\SecondaryBarcodeType|string $secondaryBarcode
     * @return $this
     */
    public function setSecondaryBarcode($secondaryBarcode)
    {
        $this->values['SecondaryBarcode'] = $secondaryBarcode;
        return $this;
    }

    /**
     * Set TermsAndConditionsLocalization
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
     * Set RegulatoryLabels
     *
     * @param RegulatoryLabelContentDetail[] $regulatoryLabels
     * @return $this
     */
    public function setRegulatoryLabels(array $regulatoryLabels)
    {
        $this->values['RegulatoryLabels'] = $regulatoryLabels;
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
