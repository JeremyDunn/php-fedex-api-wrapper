<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelTextEntry
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelTextEntry';

    /**
     * Set Position
     *
     * @param CustomLabelPosition $position
     * @return CustomLabelTextEntry
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
     * @return CustomLabelTextEntry
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
     * @return CustomLabelTextEntry
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
     * Printer-specific font name for use with thermal printer labels.
     *
     * @param string $thermalFontId
     * @return CustomLabelTextEntry
     */
    public function setThermalFontId($thermalFontId)
    {
        $this->ThermalFontId = $thermalFontId;
        return $this;
    }
    
    /**
     * Returns Printer-specific font name for use with thermal printer labels.
     *
     * @return string
     */
    public function getThermalFontId()
    {
        return $this->ThermalFontId;
    }
    
    /**
     * Generic font name for use with plain paper labels.
     *
     * @param string $fontName
     * @return CustomLabelTextEntry
     */
    public function setFontName($fontName)
    {
        $this->FontName = $fontName;
        return $this;
    }
    
    /**
     * Returns Generic font name for use with plain paper labels.
     *
     * @return string
     */
    public function getFontName()
    {
        return $this->FontName;
    }
    
    /**
     * Generic font size for use with plain paper labels.
     *
     * @param positiveInteger $fontSize
     * @return CustomLabelTextEntry
     */
    public function setFontSize($fontSize)
    {
        $this->FontSize = $fontSize;
        return $this;
    }
    
    /**
     * Returns Generic font size for use with plain paper labels.
     *
     * @return positiveInteger
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }
    

    
}