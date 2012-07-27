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
class CustomerImageUsage
    extends AbstractComplexType
{
    protected $_name = 'CustomerImageUsage';

    /**
     * 
     *
     * @param CustomerImageUsageType $Type
     * return CustomerImageUsage
     */
    public function setType(\FedEx\ShipService\SimpleType\CustomerImageUsageType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param ImageId $Id
     * return CustomerImageUsage
     */
    public function setId(\FedEx\ShipService\SimpleType\ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    

    
}