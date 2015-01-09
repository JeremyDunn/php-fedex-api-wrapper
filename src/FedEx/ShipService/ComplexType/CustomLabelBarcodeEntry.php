<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @return CustomLabelBarcodeEntry
     */
    public function setPosition(CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * Returns Set Position
     *
     * @return CustomLabelPosition
     */
    public function getPosition()
    {
        return $this->Position;
    }
    
    /**
     * Set Format
     *
     * @param string $format
     * @return CustomLabelBarcodeEntry
     */
    public function setFormat($format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Set Format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Set DataFields
     *
     * @param string[] $dataFields
     * @return CustomLabelBarcodeEntry
     */
    public function setDataFields(array $dataFields)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    
    /**
     * Returns Set DataFields
     *
     * @return string[]
     */
    public function getDataFields()
    {
        return $this->DataFields;
    }
    
    /**
     * Set BarHeight
     *
     * @param int $barHeight
     * @return CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight)
    {
        $this->BarHeight = $barHeight;
        return $this;
    }
    
    /**
     * Returns Set BarHeight
     *
     * @return int
     */
    public function getBarHeight()
    {
        return $this->BarHeight;
    }
    
    /**
     * Width of thinnest bar/space element in the barcode.
     *
     * @param int $thinBarWidth
     * @return CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth)
    {
        $this->ThinBarWidth = $thinBarWidth;
        return $this;
    }
    
    /**
     * Returns Width of thinnest bar/space element in the barcode.
     *
     * @return int
     */
    public function getThinBarWidth()
    {
        return $this->ThinBarWidth;
    }
    
    /**
     * Set BarcodeSymbology
     *
     * @param \FedEx\ShipService\SimpleType\BarcodeSymbologyType|string $barcodeSymbology
     * @return CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology($barcodeSymbology)
    {
        $this->BarcodeSymbology = $barcodeSymbology;
        return $this;
    }
    
    /**
     * Returns Set BarcodeSymbology
     *
     * @return \FedEx\ShipService\SimpleType\BarcodeSymbologyType|string
     */
    public function getBarcodeSymbology()
    {
        return $this->BarcodeSymbology;
    }
    

    
}