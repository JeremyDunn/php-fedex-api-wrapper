<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the type and location id of a distribution location used to process a consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $Id
 * @property \FedEx\OpenShipService\SimpleType\FedExDistributionLocationType|string $Type
 * @property string $LocationId
 * @property int $LocationNumber
 * @property ContactAndAddress $LocationContactAndAddress
 * @property string $ClearanceNumber
 * @property ShipmentInclusionSpecification[] $InclusionSpecifications

 */
class RequestedDistributionLocation extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RequestedDistributionLocation';

    /**
     * This is a customer-specified or system-assigned identifier that uniquely identifies the specific distibution location within a collection of distribution locations. This is not the same as the FedEx locationId or locationNumber.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Identifies whether the distirbution location is a FedEx Express Station or a FedEx Ground Terminal.
     *
     * @param \FedEx\OpenShipService\SimpleType\FedExDistributionLocationType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set LocationId
     *
     * @param string $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->values['LocationId'] = $locationId;
        return $this;
    }

    /**
     * Set LocationNumber
     *
     * @param int $locationNumber
     * @return $this
     */
    public function setLocationNumber($locationNumber)
    {
        $this->values['LocationNumber'] = $locationNumber;
        return $this;
    }

    /**
     * Set LocationContactAndAddress
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
     * This specifies the clearance number (e.g.- PAPS number for US imports) associated with the distribution location.
     *
     * @param string $clearanceNumber
     * @return $this
     */
    public function setClearanceNumber($clearanceNumber)
    {
        $this->values['ClearanceNumber'] = $clearanceNumber;
        return $this;
    }

    /**
     * Specifies which kinds of shipments will be processed by this distribution location.
     *
     * @param ShipmentInclusionSpecification[] $inclusionSpecifications
     * @return $this
     */
    public function setInclusionSpecifications(array $inclusionSpecifications)
    {
        $this->values['InclusionSpecifications'] = $inclusionSpecifications;
        return $this;
    }
}
