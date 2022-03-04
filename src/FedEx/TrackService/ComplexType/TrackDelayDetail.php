<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackDelayDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackDelayType|string $DelayType
 * @property \FedEx\TrackService\SimpleType\TrackSubDelayType|string $SubDelayType
 * @property \FedEx\TrackService\SimpleType\ServiceDelayType|string $ServiceDelayStatus

 */
class TrackDelayDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackDelayDetail';

    /**
     * Set DelayType
     *
     * @param \FedEx\TrackService\SimpleType\TrackDelayType|string $delayType
     * @return $this
     */
    public function setDelayType($delayType)
    {
        $this->values['DelayType'] = $delayType;
        return $this;
    }

    /**
     * Set SubDelayType
     *
     * @param \FedEx\TrackService\SimpleType\TrackSubDelayType|string $subDelayType
     * @return $this
     */
    public function setSubDelayType($subDelayType)
    {
        $this->values['SubDelayType'] = $subDelayType;
        return $this;
    }

    /**
     * Set ServiceDelayStatus
     *
     * @param \FedEx\TrackService\SimpleType\ServiceDelayType|string $serviceDelayStatus
     * @return $this
     */
    public function setServiceDelayStatus($serviceDelayStatus)
    {
        $this->values['ServiceDelayStatus'] = $serviceDelayStatus;
        return $this;
    }
}
