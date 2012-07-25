<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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