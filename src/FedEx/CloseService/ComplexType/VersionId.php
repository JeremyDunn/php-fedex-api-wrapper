<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
     * Set ServiceId
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
     * Returns Set ServiceId
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    
    /**
     * Service business level.
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
     * Returns Service business level.
     *
     * @return int
     */
    public function getMajor()
    {
        return $this->Major;
    }
    
    /**
     * Service interface level.
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
     * Returns Service interface level.
     *
     * @return int
     */
    public function getIntermediate()
    {
        return $this->Intermediate;
    }
    
    /**
     * Service code level.
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
     * Returns Service code level.
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->Minor;
    }
    

    
}