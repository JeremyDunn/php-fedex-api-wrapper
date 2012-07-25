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
class DocTabContentZone001
    extends AbstractComplexType
{
    protected $_name = 'DocTabContentZone001';

    /**
     * 
     *
     * @param array[DocTabZoneSpecification] $DocTabZoneSpecifications
     * return DocTabContentZone001
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications)
    {
        $this->DocTabZoneSpecifications = $docTabZoneSpecifications;
        return $this;
    }
    

    
}