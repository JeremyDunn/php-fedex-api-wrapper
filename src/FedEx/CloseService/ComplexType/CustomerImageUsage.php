<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
    public function setType(\FedEx\CloseService\SimpleType\CustomerImageUsageType $type)
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
    public function setId(\FedEx\CloseService\SimpleType\ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Internal Id used by INET to identify customer provided images during documents generation. Ex COO etc ...
     *
     * @param string $InternalId
     * return CustomerImageUsage
     */
    public function setInternalId($internalId)
    {
        $this->InternalId = $internalId;
        return $this;
    }
    
    /**
     * Internal image type used by INET to identify customer provided images during documents generation. Ex COO etc ..
     *
     * @param InternalImageType $InternalImageType
     * return CustomerImageUsage
     */
    public function setInternalImageType(\FedEx\CloseService\SimpleType\InternalImageType $internalImageType)
    {
        $this->InternalImageType = $internalImageType;
        return $this;
    }
    

    
}