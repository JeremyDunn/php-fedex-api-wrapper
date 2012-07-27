<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
    public function setType(\FedEx\RateService\SimpleType\CustomerImageUsageType $type)
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
    public function setId(\FedEx\RateService\SimpleType\ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    

    
}