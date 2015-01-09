<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContentBarcoded
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DocTabContentBarcoded
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocTabContentBarcoded';

    /**
     * Set Symbology
     *
     * @param \FedEx\ShipService\SimpleType\BarcodeSymbologyType|string $symbology
     * @return DocTabContentBarcoded
     */
    public function setSymbology($symbology)
    {
        $this->Symbology = $symbology;
        return $this;
    }
    
    /**
     * Returns Set Symbology
     *
     * @return \FedEx\ShipService\SimpleType\BarcodeSymbologyType|string
     */
    public function getSymbology()
    {
        return $this->Symbology;
    }
    
    /**
     * Set Specification
     *
     * @param DocTabZoneSpecification $specification
     * @return DocTabContentBarcoded
     */
    public function setSpecification(DocTabZoneSpecification $specification)
    {
        $this->Specification = $specification;
        return $this;
    }
    
    /**
     * Returns Set Specification
     *
     * @return DocTabZoneSpecification
     */
    public function getSpecification()
    {
        return $this->Specification;
    }
    

    
}