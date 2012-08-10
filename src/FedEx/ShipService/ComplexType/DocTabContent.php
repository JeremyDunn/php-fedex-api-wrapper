<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContent
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DocTabContent
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocTabContent';

    /**
     * The DocTabContentType options available.
     *
     * @param \FedEx\ShipService\SimpleType\DocTabContentType|string $docTabContentType
     * return DocTabContent
     */
    public function setDocTabContentType($docTabContentType)
    {
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    
    /**
     * The DocTabContentType should be set to ZONE001 to specify additional Zone details.
     *
     * @param DocTabContentZone001 $zone001
     * return DocTabContent
     */
    public function setZone001(DocTabContentZone001 $zone001)
    {
        $this->Zone001 = $zone001;
        return $this;
    }
    
    /**
     * The DocTabContentType should be set to BARCODED to specify additional BarCoded details.
     *
     * @param DocTabContentBarcoded $barcoded
     * return DocTabContent
     */
    public function setBarcoded(DocTabContentBarcoded $barcoded)
    {
        $this->Barcoded = $barcoded;
        return $this;
    }
    

    
}