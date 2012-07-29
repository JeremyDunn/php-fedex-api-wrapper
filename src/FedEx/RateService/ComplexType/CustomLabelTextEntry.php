<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * return CustomLabelTextEntry
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
     * return CustomLabelTextEntry
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
     * return CustomLabelTextEntry
     */
    public function setDataFields(array $dataFields)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    
    /**
     * Printer-specific font name for use with thermal printer labels.
     *
     * @param string $thermalFontId
     * return CustomLabelTextEntry
     */
    public function setThermalFontId($thermalFontId)
    {
        $this->ThermalFontId = $thermalFontId;
        return $this;
    }
    
    /**
     * Generic font name for use with plain paper labels.
     *
     * @param string $fontName
     * return CustomLabelTextEntry
     */
    public function setFontName($fontName)
    {
        $this->FontName = $fontName;
        return $this;
    }
    
    /**
     * Generic font size for use with plain paper labels.
     *
     * @param positiveInteger $fontSize
     * return CustomLabelTextEntry
     */
    public function setFontSize($fontSize)
    {
        $this->FontSize = $fontSize;
        return $this;
    }
    

    
}