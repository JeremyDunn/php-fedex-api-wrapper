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