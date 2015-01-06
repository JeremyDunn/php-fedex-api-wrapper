<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabZoneSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * @return DocTabZoneSpecification
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * Returns Zone number can be between 1 and 12.
     *
     * @return positiveInteger
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }
    
    /**
     * Header value on this zone.
     *
     * @param string $header
     * @return DocTabZoneSpecification
     */
    public function setHeader($header)
    {
        $this->Header = $header;
        return $this;
    }
    
    /**
     * Returns Header value on this zone.
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->Header;
    }
    
    /**
     * Reference path to the element in the request/reply whose value should be printed on this zone.
     *
     * @param string $dataField
     * @return DocTabZoneSpecification
     */
    public function setDataField($dataField)
    {
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * Returns Reference path to the element in the request/reply whose value should be printed on this zone.
     *
     * @return string
     */
    public function getDataField()
    {
        return $this->DataField;
    }
    
    /**
     * Free form-text to be printed in this zone.
     *
     * @param string $literalValue
     * @return DocTabZoneSpecification
     */
    public function setLiteralValue($literalValue)
    {
        $this->LiteralValue = $literalValue;
        return $this;
    }
    
    /**
     * Returns Free form-text to be printed in this zone.
     *
     * @return string
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }
    
    /**
     * Justification for the text printed on this zone.
     *
     * @param \FedEx\RateService\SimpleType\DocTabZoneJustificationType|string $justification
     * @return DocTabZoneSpecification
     */
    public function setJustification($justification)
    {
        $this->Justification = $justification;
        return $this;
    }
    
    /**
     * Returns Justification for the text printed on this zone.
     *
     * @return \FedEx\RateService\SimpleType\DocTabZoneJustificationType|string
     */
    public function getJustification()
    {
        return $this->Justification;
    }
    

    
}