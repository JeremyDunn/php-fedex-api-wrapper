<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContentBarcoded
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\BarcodeSymbologyType|string $Symbology
 * @property DocTabZoneSpecification $Specification

 */
class DocTabContentBarcoded extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocTabContentBarcoded';

    /**
     * Set Symbology
     *
     * @param \FedEx\ShipService\SimpleType\BarcodeSymbologyType|string $symbology
     * @return $this
     */
    public function setSymbology($symbology)
    {
        $this->values['Symbology'] = $symbology;
        return $this;
    }

    /**
     * Set Specification
     *
     * @param DocTabZoneSpecification $specification
     * @return $this
     */
    public function setSpecification(DocTabZoneSpecification $specification)
    {
        $this->values['Specification'] = $specification;
        return $this;
    }
}
