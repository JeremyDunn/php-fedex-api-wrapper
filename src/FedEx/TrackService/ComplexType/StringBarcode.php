<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\StringBarcodeType|string $Type
 * @property string $Value

 */
class StringBarcode extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'StringBarcode';

    /**
     * The kind of barcode data in this instance.
     *
     * @param \FedEx\TrackService\SimpleType\StringBarcodeType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * The data content of this instance.
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
