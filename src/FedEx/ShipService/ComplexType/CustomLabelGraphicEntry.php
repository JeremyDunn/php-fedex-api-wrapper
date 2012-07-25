<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Image to be included from printer's memory, or from a local file for offline clients.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelGraphicEntry
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelGraphicEntry';

    /**
     * 
     *
     * @param CustomLabelPosition $Position
     * return CustomLabelGraphicEntry
     */
    public function setPosition(CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * Printer-specific index of graphic image to be printed.
     *
     * @param string $PrinterGraphicId
     * return CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId)
    {
        $this->PrinterGraphicId = $printerGraphicId;
        return $this;
    }
    
    /**
     * Fully-qualified path and file name for graphic image to be printed.
     *
     * @param string $FileGraphicFullName
     * return CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($fileGraphicFullName)
    {
        $this->FileGraphicFullName = $fileGraphicFullName;
        return $this;
    }
    

    
}