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
     * Set ZoneNumber
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
     * Returns Set ZoneNumber
     *
     * @return positiveInteger
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }
    
    /**
     * Set Header
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
     * Returns Set Header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->Header;
    }
    
    /**
     * Set DataField
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
     * Returns Set DataField
     *
     * @return string
     */
    public function getDataField()
    {
        return $this->DataField;
    }
    
    /**
     * Set LiteralValue
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
     * Returns Set LiteralValue
     *
     * @return string
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }
    
    /**
     * Set Justification
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
     * Returns Set Justification
     *
     * @return \FedEx\RateService\SimpleType\DocTabZoneJustificationType|string
     */
    public function getJustification()
    {
        return $this->Justification;
    }
    

    
}