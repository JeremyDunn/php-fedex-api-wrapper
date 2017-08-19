<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabZoneSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property int $ZoneNumber
 * @property string $Header
 * @property string $DataField
 * @property string $LiteralValue
 * @property \FedEx\OpenShipService\SimpleType\DocTabZoneJustificationType|string $Justification

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
     * Set ZoneNumber
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
     * Set Header
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
     * Set DataField
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
     * Set LiteralValue
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
     * Set Justification
     *
     * @param \FedEx\OpenShipService\SimpleType\DocTabZoneJustificationType|string $justification
     * @return $this
     */
    public function setJustification($justification)
    {
        $this->values['Justification'] = $justification;
        return $this;
    }
}
