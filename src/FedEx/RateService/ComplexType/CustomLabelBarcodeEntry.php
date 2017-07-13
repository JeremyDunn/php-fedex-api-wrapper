<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property CustomLabelPosition $Position
 * @property string $Format
 * @property string[] $DataFields
 * @property int $BarHeight
 * @property int $ThinBarWidth
 * @property \FedEx\RateService\SimpleType\BarcodeSymbologyType|string $BarcodeSymbology

 */
class CustomLabelBarcodeEntry extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomLabelBarcodeEntry';

    /**
     * Set Position
     *
     * @param CustomLabelPosition $position
     * @return $this
     */
    public function setPosition(CustomLabelPosition $position)
    {
        $this->values['Position'] = $position;
        return $this;
    }

    /**
     * Set Format
     *
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Set DataFields
     *
     * @param string $dataFields
     * @return $this
     */
    public function setDataFields($dataFields)
    {
        $this->values['DataFields'] = $dataFields;
        return $this;
    }

    /**
     * Set BarHeight
     *
     * @param int $barHeight
     * @return $this
     */
    public function setBarHeight($barHeight)
    {
        $this->values['BarHeight'] = $barHeight;
        return $this;
    }

    /**
     * Width of thinnest bar/space element in the barcode.
     *
     * @param int $thinBarWidth
     * @return $this
     */
    public function setThinBarWidth($thinBarWidth)
    {
        $this->values['ThinBarWidth'] = $thinBarWidth;
        return $this;
    }

    /**
     * Set BarcodeSymbology
     *
     * @param \FedEx\RateService\SimpleType\BarcodeSymbologyType|string $barcodeSymbology
     * @return $this
     */
    public function setBarcodeSymbology($barcodeSymbology)
    {
        $this->values['BarcodeSymbology'] = $barcodeSymbology;
        return $this;
    }
}
