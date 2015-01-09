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
     * @param \FedEx\ShipService\SimpleType\CustomerImageUsageType|string $type
     * @return CustomerImageUsage
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\ShipService\SimpleType\CustomerImageUsageType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Id
     *
     * @param \FedEx\ShipService\SimpleType\ImageId|string $id
     * @return CustomerImageUsage
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Set Id
     *
     * @return \FedEx\ShipService\SimpleType\ImageId|string
     */
    public function getId()
    {
        return $this->Id;
    }
    

    
}