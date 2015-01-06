<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Image to be included from printer's memory, or from a local file for offline clients.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelGraphicEntry
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelGraphicEntry';

    /**
     * Set Position
     *
     * @param CustomLabelPosition $position
     * @return CustomLabelGraphicEntry
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
     * Printer-specific index of graphic image to be printed.
     *
     * @param string $printerGraphicId
     * @return CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId)
    {
        $this->PrinterGraphicId = $printerGraphicId;
        return $this;
    }
    
    /**
     * Returns Printer-specific index of graphic image to be printed.
     *
     * @return string
     */
    public function getPrinterGraphicId()
    {
        return $this->PrinterGraphicId;
    }
    
    /**
     * Fully-qualified path and file name for graphic image to be printed.
     *
     * @param string $fileGraphicFullName
     * @return CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($fileGraphicFullName)
    {
        $this->FileGraphicFullName = $fileGraphicFullName;
        return $this;
    }
    
    /**
     * Returns Fully-qualified path and file name for graphic image to be printed.
     *
     * @return string
     */
    public function getFileGraphicFullName()
    {
        return $this->FileGraphicFullName;
    }
    

    
}