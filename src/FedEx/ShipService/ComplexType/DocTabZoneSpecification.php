<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabZoneSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property int $ZoneNumber
 * @property string $Header
 * @property string $DataField
 * @property string $LiteralValue
 * @property \FedEx\ShipService\SimpleType\DocTabZoneJustificationType|string $Justification

 */
class DocTabZoneSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocTabZoneSpecification';

    /**
     * Zone number can be between 1 and 12.
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
     * Header value on this zone.
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
     * Reference path to the element in the request/reply whose value should be printed on this zone.
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
     * Free form-text to be printed in this zone.
     *
     * @param string $literalValue
     * @return $this
     */
    public function setLiteralValue($literalValue)
    {
        $this->values['LiteralValue'] = $literalValue;
        return $this;
    }

    /**
     * Justification for the text printed on this zone.
     *
     * @param \FedEx\ShipService\SimpleType\DocTabZoneJustificationType|string $justification
     * @return $this
     */
    public function setJustification($justification)
    {
        $this->values['Justification'] = $justification;
        return $this;
    }
}
