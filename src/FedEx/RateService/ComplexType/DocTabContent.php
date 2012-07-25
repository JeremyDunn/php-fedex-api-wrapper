<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class DocTabContent
    extends AbstractComplexType
{
    protected $_name = 'DocTabContent';

    /**
     * The DocTabContentType options available.
     *
     * @param DocTabContentType $DocTabContentType
     * return DocTabContent
     */
    public function setDocTabContentType(\FedEx\RateService\SimpleType\DocTabContentType $docTabContentType)
    {
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    
    /**
     * The DocTabContentType should be set to ZONE001 to specify additional Zone details.
     *
     * @param DocTabContentZone001 $Zone001
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
     * @param DocTabContentBarcoded $Barcoded
     * return DocTabContent
     */
    public function setBarcoded(DocTabContentBarcoded $barcoded)
    {
        $this->Barcoded = $barcoded;
        return $this;
    }
    

    
}