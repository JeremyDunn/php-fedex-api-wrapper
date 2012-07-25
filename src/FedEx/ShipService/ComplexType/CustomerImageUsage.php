<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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