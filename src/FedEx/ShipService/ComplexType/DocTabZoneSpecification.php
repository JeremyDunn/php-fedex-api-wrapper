<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabZoneSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DocTabZoneSpecification
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocTabZoneSpecification';

    /**
     * Zone number can be between 1 and 12.
     *
     * @param positiveInteger $zoneNumber
     * return DocTabZoneSpecification
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * Header value on this zone.
     *
     * @param string $header
     * return DocTabZoneSpecification
     */
    public function setHeader($header)
    {
        $this->Header = $header;
        return $this;
    }
    
    /**
     * Reference path to the element in the request/reply whose value should be printed on this zone.
     *
     * @param string $dataField
     * return DocTabZoneSpecification
     */
    public function setDataField($dataField)
    {
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * Free form-text to be printed in this zone.
     *
     * @param string $literalValue
     * return DocTabZoneSpecification
     */
    public function setLiteralValue($literalValue)
    {
        $this->LiteralValue = $literalValue;
        return $this;
    }
    
    /**
     * Justification for the text printed on this zone.
     *
     * @param \FedEx\ShipService\SimpleType\DocTabZoneJustificationType|string $justification
     * return DocTabZoneSpecification
     */
    public function setJustification($justification)
    {
        $this->Justification = $justification;
        return $this;
    }
    

    
}