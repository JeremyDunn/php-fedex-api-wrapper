<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomLabelDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelDetail';

    /**
     * Set CoordinateUnits
     *
     * @param \FedEx\ShipService\SimpleType\CustomLabelCoordinateUnits|string $coordinateUnits
     * return CustomLabelDetail
     */
    public function setCoordinateUnits($coordinateUnits)
    {
        $this->CoordinateUnits = $coordinateUnits;
        return $this;
    }
    
    /**
     * Set TextEntries
     *
     * @param CustomLabelTextEntry[] $textEntries
     * return CustomLabelDetail
     */
    public function setTextEntries(array $textEntries)
    {
        $this->TextEntries = $textEntries;
        return $this;
    }
    
    /**
     * Set GraphicEntries
     *
     * @param CustomLabelGraphicEntry[] $graphicEntries
     * return CustomLabelDetail
     */
    public function setGraphicEntries(array $graphicEntries)
    {
        $this->GraphicEntries = $graphicEntries;
        return $this;
    }
    
    /**
     * Set BoxEntries
     *
     * @param CustomLabelBoxEntry[] $boxEntries
     * return CustomLabelDetail
     */
    public function setBoxEntries(array $boxEntries)
    {
        $this->BoxEntries = $boxEntries;
        return $this;
    }
    
    /**
     * Set BarcodeEntries
     *
     * @param CustomLabelBarcodeEntry[] $barcodeEntries
     * return CustomLabelDetail
     */
    public function setBarcodeEntries(array $barcodeEntries)
    {
        $this->BarcodeEntries = $barcodeEntries;
        return $this;
    }
    

    
}