<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this class groups together TrackingId instances that pertain to the same entity (e.g. package).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property TrackingId[] $TrackingIds

 */
class TrackingNumberUnit extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingNumberUnit';

    /**
     * Set TrackingIds
     *
     * @param TrackingId[] $trackingIds
     * @return $this
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->values['TrackingIds'] = $trackingIds;
        return $this;
    }
}
