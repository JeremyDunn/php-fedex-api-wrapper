<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ConfigurableLabelReferenceEntry
    extends AbstractComplexType
{
    protected $_name = 'ConfigurableLabelReferenceEntry';

    /**
     * 1 of 12 possible zones to  position data.
     *
     * @param positiveInteger $ZoneNumber
     * return ConfigurableLabelReferenceEntry
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * The identifiying text for the data in this zone.
     *
     * @param string $Header
     * return ConfigurableLabelReferenceEntry
     */
    public function setHeader($header)
    {
        $this->Header = $header;
        return $this;
    }
    
    /**
     * A reference to a field in either the request or reply to print in this zone following the header.
     *
     * @param string $DataField
     * return ConfigurableLabelReferenceEntry
     */
    public function setDataField($dataField)
    {
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * A literal value to print after the header in this zone.
     *
     * @param string $LiteralValue
     * return ConfigurableLabelReferenceEntry
     */
    public function setLiteralValue($literalValue)
    {
        $this->LiteralValue = $literalValue;
        return $this;
    }
    

    
}