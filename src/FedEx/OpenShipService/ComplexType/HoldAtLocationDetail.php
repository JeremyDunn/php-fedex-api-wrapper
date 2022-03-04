<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * HoldAtLocationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $PhoneNumber
 * @property ContactAndAddress $LocationContactAndAddress
 * @property \FedEx\OpenShipService\SimpleType\FedExLocationType|string $LocationType
 * @property string $LocationId

 */
class HoldAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HoldAtLocationDetail';

    /**
     * Contact phone number for recipient of shipment.
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['PhoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Contact and address of FedEx facility at which shipment is to be held.
     *
     * @param ContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(ContactAndAddress $locationContactAndAddress)
    {
        $this->values['LocationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Type of facility at which package/shipment is to be held.
     *
     * @param \FedEx\OpenShipService\SimpleType\FedExLocationType|string $locationType
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $this->values['LocationType'] = $locationType;
        return $this;
    }

    /**
     * Location identification (for facilities identified by an alphanumeric location code).
     *
     * @param string $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->values['LocationId'] = $locationId;
        return $this;
    }
}
