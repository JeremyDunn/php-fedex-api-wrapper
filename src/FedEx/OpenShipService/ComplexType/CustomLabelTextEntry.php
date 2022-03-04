<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property CustomLabelPosition $Position
 * @property string $Format
 * @property string[] $DataFields
 * @property string $ThermalFontId
 * @property string $FontName
 * @property int $FontSize
 * @property \FedEx\OpenShipService\SimpleType\RotationType|string $Rotation

 */
class CustomLabelTextEntry extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomLabelTextEntry';

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
     * Printer-specific font name for use with thermal printer labels.
     *
     * @param string $thermalFontId
     * @return $this
     */
    public function setThermalFontId($thermalFontId)
    {
        $this->values['ThermalFontId'] = $thermalFontId;
        return $this;
    }

    /**
     * Generic font name for use with plain paper labels.
     *
     * @param string $fontName
     * @return $this
     */
    public function setFontName($fontName)
    {
        $this->values['FontName'] = $fontName;
        return $this;
    }

    /**
     * Generic font size for use with plain paper labels.
     *
     * @param int $fontSize
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->values['FontSize'] = $fontSize;
        return $this;
    }

    /**
     * Set Rotation
     *
     * @param \FedEx\OpenShipService\SimpleType\RotationType|string $rotation
     * @return $this
     */
    public function setRotation($rotation)
    {
        $this->values['Rotation'] = $rotation;
        return $this;
    }
}
