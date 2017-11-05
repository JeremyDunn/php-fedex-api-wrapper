<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationContactAndAddress
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property Contact $Contact
 * @property Address $Address
 * @property AddressAncillaryDetail $AddressAncillaryDetail

 */
class LocationContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationContactAndAddress';

    /**
     * Set Contact
     *
     * @param Contact $contact
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->values['Contact'] = $contact;
        return $this;
    }

    /**
     * Set Address
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }

    /**
     * Set AddressAncillaryDetail
     *
     * @param AddressAncillaryDetail $addressAncillaryDetail
     * @return $this
     */
    public function setAddressAncillaryDetail(AddressAncillaryDetail $addressAncillaryDetail)
    {
        $this->values['AddressAncillaryDetail'] = $addressAncillaryDetail;
        return $this;
    }
}
