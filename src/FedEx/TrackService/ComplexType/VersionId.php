<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
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
     * Identifies a system or sub-system which performs an operation.
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
     * Returns Identifies a system or sub-system which performs an operation.
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    
    /**
     * Identifies the service business level.
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
     * Returns Identifies the service business level.
     *
     * @return int
     */
    public function getMajor()
    {
        return $this->Major;
    }
    
    /**
     * Identifies the service interface level.
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
     * Returns Identifies the service interface level.
     *
     * @return int
     */
    public function getIntermediate()
    {
        return $this->Intermediate;
    }
    
    /**
     * Identifies the service code level.
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
     * Returns Identifies the service code level.
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->Minor;
    }
    

    
}