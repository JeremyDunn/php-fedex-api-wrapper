<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelDetail
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelDetail';

    /**
     * 
     *
     * @param CustomLabelCoordinateUnits $CoordinateUnits
     * return CustomLabelDetail
     */
    public function setCoordinateUnits(\FedEx\ShipService\SimpleType\CustomLabelCoordinateUnits $coordinateUnits)
    {
        $this->CoordinateUnits = $coordinateUnits;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelTextEntry] $TextEntries
     * return CustomLabelDetail
     */
    public function setTextEntries(array $textEntries)
    {
        $this->TextEntries = $textEntries;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelGraphicEntry] $GraphicEntries
     * return CustomLabelDetail
     */
    public function setGraphicEntries(array $graphicEntries)
    {
        $this->GraphicEntries = $graphicEntries;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelBoxEntry] $BoxEntries
     * return CustomLabelDetail
     */
    public function setBoxEntries(array $boxEntries)
    {
        $this->BoxEntries = $boxEntries;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelBarcodeEntry] $BarcodeEntries
     * return CustomLabelDetail
     */
    public function setBarcodeEntries(array $barcodeEntries)
    {
        $this->BarcodeEntries = $barcodeEntries;
        return $this;
    }
    

    
}