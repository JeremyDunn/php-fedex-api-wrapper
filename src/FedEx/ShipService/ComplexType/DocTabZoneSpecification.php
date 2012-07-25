<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DocTabZoneSpecification
    extends AbstractComplexType
{
    protected $_name = 'DocTabZoneSpecification';

    /**
     * Zone number can be between 1 and 12.
     *
     * @param positiveInteger $ZoneNumber
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
     * @param string $Header
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
     * @param string $DataField
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
     * @param string $LiteralValue
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
     * @param DocTabZoneJustificationType $Justification
     * return DocTabZoneSpecification
     */
    public function setJustification(\FedEx\ShipService\SimpleType\DocTabZoneJustificationType $justification)
    {
        $this->Justification = $justification;
        return $this;
    }
    

    
}