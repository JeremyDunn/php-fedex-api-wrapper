<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as binary data (i.e. not ASCII text).
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class BinaryBarcode
    extends AbstractComplexType
{
    protected $_name = 'BinaryBarcode';

    /**
     * The kind of barcode data in this instance.
     *
     * @param BinaryBarcodeType $Type
     * return BinaryBarcode
     */
    public function setType(\FedEx\ShipService\SimpleType\BinaryBarcodeType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The data content of this instance.
     *
     * @param base64Binary $Value
     * return BinaryBarcode
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}