<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class VersionId
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'VersionId';

    /**
     * Fixed value.
     *
     * @param string $serviceId
     * @return VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    
    /**
     * Returns Fixed value.
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    
    /**
     * Fixed value.
     *
     * @param int $major
     * @return VersionId
     */
    public function setMajor($major)
    {
        $this->Major = $major;
        return $this;
    }
    
    /**
     * Returns Fixed value.
     *
     * @return int
     */
    public function getMajor()
    {
        return $this->Major;
    }
    
    /**
     * Fixed value.
     *
     * @param int $intermediate
     * @return VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->Intermediate = $intermediate;
        return $this;
    }
    
    /**
     * Returns Fixed value.
     *
     * @return int
     */
    public function getIntermediate()
    {
        return $this->Intermediate;
    }
    
    /**
     * Fixed value.
     *
     * @param int $minor
     * @return VersionId
     */
    public function setMinor($minor)
    {
        $this->Minor = $minor;
        return $this;
    }
    
    /**
     * Returns Fixed value.
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->Minor;
    }
    

    
}