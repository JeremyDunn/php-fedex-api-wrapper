<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerImageUsage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomerImageUsage
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerImageUsage';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\CustomerImageUsageType  $type
     * return CustomerImageUsage
     */
    public function setType(\FedEx\ShipService\SimpleType\CustomerImageUsageType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Set Id
     *
     * @param \FedEx\ShipService\SimpleType\ImageId  $id
     * return CustomerImageUsage
     */
    public function setId(\FedEx\ShipService\SimpleType\ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    

    
}