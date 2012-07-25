<?php
namespace FedEx\TrackService\ComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class StringBarcode
    extends AbstractComplexType
{
    protected $_name = 'StringBarcode';

    /**
     * The kind of barcode data in this instance.
     *
     * @param StringBarcodeType $Type
     * return StringBarcode
     */
    public function setType(\FedEx\TrackService\SimpleType\StringBarcodeType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The data content of this instance.
     *
     * @param string $Value
     * return StringBarcode
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}