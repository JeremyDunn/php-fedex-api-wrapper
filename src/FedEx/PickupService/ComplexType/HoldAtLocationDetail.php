<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class HoldAtLocationDetail
    extends AbstractComplexType
{
    protected $_name = 'HoldAtLocationDetail';

    /**
     * Contact phone number for recipient of shipment.
     *
     * @param string $PhoneNumber
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
     * @param ContactAndAddress $LocationContactAndAddress
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
     * @param FedExLocationType $LocationType
     * return HoldAtLocationDetail
     */
    public function setLocationType(\FedEx\PickupService\SimpleType\FedExLocationType $locationType)
    {
        $this->LocationType = $locationType;
        return $this;
    }
    
    /**
     * Location identification (for facilities identified by an alphanumeric location code).
     *
     * @param string $LocationId
     * return HoldAtLocationDetail
     */
    public function setLocationId($locationId)
    {
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * Location identification (for facilities identified by an numeric location code).
     *
     * @param int $LocationNumber
     * return HoldAtLocationDetail
     */
    public function setLocationNumber($locationNumber)
    {
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    

    
}