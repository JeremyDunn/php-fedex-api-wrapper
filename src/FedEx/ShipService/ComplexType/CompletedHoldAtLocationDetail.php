<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedHoldAtLocationDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedHoldAtLocationDetail';

    /**
     * Identifies the branded location name, the hold at location phone number and the address of the location.
     *
     * @param ContactAndAddress $HoldingLocation
     * return CompletedHoldAtLocationDetail
     */
    public function setHoldingLocation(ContactAndAddress $holdingLocation)
    {
        $this->HoldingLocation = $holdingLocation;
        return $this;
    }
    
    /**
     * Identifies the type of FedEx location.
     *
     * @param FedExLocationType $HoldingLocationType
     * return CompletedHoldAtLocationDetail
     */
    public function setHoldingLocationType(\FedEx\ShipService\SimpleType\FedExLocationType $holdingLocationType)
    {
        $this->HoldingLocationType = $holdingLocationType;
        return $this;
    }
    

    
}