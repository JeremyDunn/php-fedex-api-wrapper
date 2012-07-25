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