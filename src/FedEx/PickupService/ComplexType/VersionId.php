<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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