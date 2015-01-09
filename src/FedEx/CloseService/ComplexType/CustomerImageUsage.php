<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerImageUsage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
     * @param \FedEx\CloseService\SimpleType\CustomerImageUsageType|string $type
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
     * @return \FedEx\CloseService\SimpleType\CustomerImageUsageType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Id
     *
     * @param \FedEx\CloseService\SimpleType\ImageId|string $id
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
     * @return \FedEx\CloseService\SimpleType\ImageId|string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Internal Id used by INET to identify customer provided images during documents generation. Ex COO etc ...
     *
     * @param string $internalId
     * @return CustomerImageUsage
     */
    public function setInternalId($internalId)
    {
        $this->InternalId = $internalId;
        return $this;
    }
    
    /**
     * Returns Internal Id used by INET to identify customer provided images during documents generation. Ex COO etc ...
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->InternalId;
    }
    
    /**
     * Internal image type used by INET to identify customer provided images during documents generation. Ex COO etc ..
     *
     * @param \FedEx\CloseService\SimpleType\InternalImageType|string $internalImageType
     * @return CustomerImageUsage
     */
    public function setInternalImageType($internalImageType)
    {
        $this->InternalImageType = $internalImageType;
        return $this;
    }
    
    /**
     * Returns Internal image type used by INET to identify customer provided images during documents generation. Ex COO etc ..
     *
     * @return \FedEx\CloseService\SimpleType\InternalImageType|string
     */
    public function getInternalImageType()
    {
        return $this->InternalImageType;
    }
    

    
}