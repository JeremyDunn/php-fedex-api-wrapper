<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContentBarcoded
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * @param \FedEx\RateService\SimpleType\BarcodeSymbologyType|string $symbology
     * return DocTabContentBarcoded
     */
    public function setSymbology($symbology)
    {
        $this->Symbology = $symbology;
        return $this;
    }
    
    /**
     * Set Specification
     *
     * @param DocTabZoneSpecification $specification
     * return DocTabContentBarcoded
     */
    public function setSpecification(DocTabZoneSpecification $specification)
    {
        $this->Specification = $specification;
        return $this;
    }
    

    
}