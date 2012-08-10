<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HoldAtLocationDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HoldAtLocationDetail';

    /**
     * Contact phone number for recipient of shipment.
     *
     * @param string $phoneNumber
     * return HoldAtLocationDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Contact and address of FedEx facility at which shipment is to be held.
     *
     * @param ContactAndAddress $locationContactAndAddress
     * return HoldAtLocationDetail
     */
    public function setLocationContactAndAddress(ContactAndAddress $locationContactAndAddress)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    
    /**
     * Type of facility at which package/shipment is to be held.
     *
     * @param \FedEx\ShipService\SimpleType\FedExLocationType|string $locationType
     * return HoldAtLocationDetail
     */
    public function setLocationType($locationType)
    {
        $this->LocationType = $locationType;
        return $this;
    }
    

    
}