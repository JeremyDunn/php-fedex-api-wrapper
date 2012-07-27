<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DocTabContentBarcoded
    extends AbstractComplexType
{
    protected $_name = 'DocTabContentBarcoded';

    /**
     * 
     *
     * @param BarcodeSymbologyType $Symbology
     * return DocTabContentBarcoded
     */
    public function setSymbology(\FedEx\ShipService\SimpleType\BarcodeSymbologyType $symbology)
    {
        $this->Symbology = $symbology;
        return $this;
    }
    
    /**
     * 
     *
     * @param DocTabZoneSpecification $Specification
     * return DocTabContentBarcoded
     */
    public function setSpecification(DocTabZoneSpecification $specification)
    {
        $this->Specification = $specification;
        return $this;
    }
    

    
}