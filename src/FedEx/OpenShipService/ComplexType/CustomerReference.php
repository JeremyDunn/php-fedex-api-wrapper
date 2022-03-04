<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerReference
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\CustomerReferenceType|string $CustomerReferenceType
 * @property string $Value

 */
class CustomerReference extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerReference';

    /**
     * Set CustomerReferenceType
     *
     * @param \FedEx\OpenShipService\SimpleType\CustomerReferenceType|string $customerReferenceType
     * @return $this
     */
    public function setCustomerReferenceType($customerReferenceType)
    {
        $this->values['CustomerReferenceType'] = $customerReferenceType;
        return $this;
    }

    /**
     * Set Value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
