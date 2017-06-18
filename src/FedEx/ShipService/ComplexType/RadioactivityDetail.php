<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadioactivityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property float $TransportIndex
 * @property float $SurfaceReading
 * @property float $CriticalitySafetyIndex
 * @property Dimensions $Dimensions

 */
class RadioactivityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RadioactivityDetail';

    /**
     * Set TransportIndex
     *
     * @param float $transportIndex
     * @return $this
     */
    public function setTransportIndex($transportIndex)
    {
        $this->values['TransportIndex'] = $transportIndex;
        return $this;
    }

    /**
     * Set SurfaceReading
     *
     * @param float $surfaceReading
     * @return $this
     */
    public function setSurfaceReading($surfaceReading)
    {
        $this->values['SurfaceReading'] = $surfaceReading;
        return $this;
    }

    /**
     * Set CriticalitySafetyIndex
     *
     * @param float $criticalitySafetyIndex
     * @return $this
     */
    public function setCriticalitySafetyIndex($criticalitySafetyIndex)
    {
        $this->values['CriticalitySafetyIndex'] = $criticalitySafetyIndex;
        return $this;
    }

    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }
}
