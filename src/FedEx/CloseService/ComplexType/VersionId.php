<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property string $ServiceId
 * @property int $Major
 * @property int $Intermediate
 * @property int $Minor

 */
class VersionId extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'VersionId';

    /**
     * Set ServiceId
     *
     * @param string $serviceId
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->values['ServiceId'] = $serviceId;
        return $this;
    }

    /**
     * Service business level.
     *
     * @param int $major
     * @return $this
     */
    public function setMajor($major)
    {
        $this->values['Major'] = $major;
        return $this;
    }

    /**
     * Service interface level.
     *
     * @param int $intermediate
     * @return $this
     */
    public function setIntermediate($intermediate)
    {
        $this->values['Intermediate'] = $intermediate;
        return $this;
    }

    /**
     * Service code level.
     *
     * @param int $minor
     * @return $this
     */
    public function setMinor($minor)
    {
        $this->values['Minor'] = $minor;
        return $this;
    }
}
