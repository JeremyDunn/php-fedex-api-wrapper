<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelBarcodeEntry
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelBarcodeEntry';

    /**
     * Set Position
     *
     * @param CustomLabelPosition $position
     * return CustomLabelBarcodeEntry
     */
    public function setPosition(CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * Set Format
     *
     * @param string $format
     * return CustomLabelBarcodeEntry
     */
    public function setFormat($format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Set DataFields
     *
     * @param string[] $dataFields
     * return CustomLabelBarcodeEntry
     */
    public function setDataFields(array $dataFields)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    
    /**
     * Set BarHeight
     *
     * @param int $barHeight
     * return CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight)
    {
        $this->BarHeight = $barHeight;
        return $this;
    }
    
    /**
     * Width of thinnest bar/space element in the barcode.
     *
     * @param int $thinBarWidth
     * return CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth)
    {
        $this->ThinBarWidth = $thinBarWidth;
        return $this;
    }
    
    /**
     * Set BarcodeSymbology
     *
     * @param \FedEx\RateService\SimpleType\BarcodeSymbologyType|string $barcodeSymbology
     * return CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology($barcodeSymbology)
    {
        $this->BarcodeSymbology = $barcodeSymbology;
        return $this;
    }
    

    
}