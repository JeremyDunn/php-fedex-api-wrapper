<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property int $ZoneNumber
 * @property string $Header
 * @property string $DataField
 * @property string $LiteralValue

 */
class ConfigurableLabelReferenceEntry extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConfigurableLabelReferenceEntry';

    /**
     * 1 of 12 possible zones to  position data.
     *
     * @param int $zoneNumber
     * @return $this
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->values['ZoneNumber'] = $zoneNumber;
        return $this;
    }

    /**
     * The identifiying text for the data in this zone.
     *
     * @param string $header
     * @return $this
     */
    public function setHeader($header)
    {
        $this->values['Header'] = $header;
        return $this;
    }

    /**
     * A reference to a field in either the request or reply to print in this zone following the header.
     *
     * @param string $dataField
     * @return $this
     */
    public function setDataField($dataField)
    {
        $this->values['DataField'] = $dataField;
        return $this;
    }

    /**
     * A literal value to print after the header in this zone.
     *
     * @param string $literalValue
     * @return $this
     */
    public function setLiteralValue($literalValue)
    {
        $this->values['LiteralValue'] = $literalValue;
        return $this;
    }
}
