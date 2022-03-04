<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomLabelDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\CustomLabelCoordinateUnits|string $CoordinateUnits
 * @property CustomLabelTextEntry[] $TextEntries
 * @property CustomLabelGraphicEntry[] $GraphicEntries
 * @property CustomLabelBoxEntry[] $BoxEntries
 * @property CustomLabelTextBoxEntry[] $TextBoxEntries
 * @property CustomLabelBarcodeEntry[] $BarcodeEntries

 */
class CustomLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomLabelDetail';

    /**
     * Set CoordinateUnits
     *
     * @param \FedEx\ShipService\SimpleType\CustomLabelCoordinateUnits|string $coordinateUnits
     * @return $this
     */
    public function setCoordinateUnits($coordinateUnits)
    {
        $this->values['CoordinateUnits'] = $coordinateUnits;
        return $this;
    }

    /**
     * Set TextEntries
     *
     * @param CustomLabelTextEntry[] $textEntries
     * @return $this
     */
    public function setTextEntries(array $textEntries)
    {
        $this->values['TextEntries'] = $textEntries;
        return $this;
    }

    /**
     * Set GraphicEntries
     *
     * @param CustomLabelGraphicEntry[] $graphicEntries
     * @return $this
     */
    public function setGraphicEntries(array $graphicEntries)
    {
        $this->values['GraphicEntries'] = $graphicEntries;
        return $this;
    }

    /**
     * Set BoxEntries
     *
     * @param CustomLabelBoxEntry[] $boxEntries
     * @return $this
     */
    public function setBoxEntries(array $boxEntries)
    {
        $this->values['BoxEntries'] = $boxEntries;
        return $this;
    }

    /**
     * Set TextBoxEntries
     *
     * @param CustomLabelTextBoxEntry[] $textBoxEntries
     * @return $this
     */
    public function setTextBoxEntries(array $textBoxEntries)
    {
        $this->values['TextBoxEntries'] = $textBoxEntries;
        return $this;
    }

    /**
     * Set BarcodeEntries
     *
     * @param CustomLabelBarcodeEntry[] $barcodeEntries
     * @return $this
     */
    public function setBarcodeEntries(array $barcodeEntries)
    {
        $this->values['BarcodeEntries'] = $barcodeEntries;
        return $this;
    }
}
