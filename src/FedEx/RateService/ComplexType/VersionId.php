<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class VersionId
    extends AbstractComplexType
{
    protected $_name = 'VersionId';

    /**
     * Identifies a system or sub-system which performs an operation.
     *
     * @param string $ServiceId
     * return VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    
    /**
     * Identifies the service business level.
     *
     * @param int $Major
     * return VersionId
     */
    public function setMajor($major)
    {
        $this->Major = $major;
        return $this;
    }
    
    /**
     * Identifies the service interface level.
     *
     * @param int $Intermediate
     * return VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->Intermediate = $intermediate;
        return $this;
    }
    
    /**
     * Identifies the service code level.
     *
     * @param int $Minor
     * return VersionId
     */
    public function setMinor($minor)
    {
        $this->Minor = $minor;
        return $this;
    }
    

    
}