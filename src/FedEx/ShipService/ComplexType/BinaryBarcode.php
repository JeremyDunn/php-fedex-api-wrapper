<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as binary data (i.e. not ASCII text).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class BinaryBarcode
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'BinaryBarcode';

    /**
     * The kind of barcode data in this instance.
     *
     * @param \FedEx\ShipService\SimpleType\BinaryBarcodeType|string $type
     * return BinaryBarcode
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The data content of this instance.
     *
     * @param base64Binary $value
     * return BinaryBarcode
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}