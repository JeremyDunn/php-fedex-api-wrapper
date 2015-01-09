<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadioactivityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RadioactivityDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RadioactivityDetail';

    /**
     * Set TransportIndex
     *
     * @param decimal $transportIndex
     * @return RadioactivityDetail
     */
    public function setTransportIndex($transportIndex)
    {
        $this->TransportIndex = $transportIndex;
        return $this;
    }
    
    /**
     * Returns Set TransportIndex
     *
     * @return decimal
     */
    public function getTransportIndex()
    {
        return $this->TransportIndex;
    }
    
    /**
     * Set SurfaceReading
     *
     * @param decimal $surfaceReading
     * @return RadioactivityDetail
     */
    public function setSurfaceReading($surfaceReading)
    {
        $this->SurfaceReading = $surfaceReading;
        return $this;
    }
    
    /**
     * Returns Set SurfaceReading
     *
     * @return decimal
     */
    public function getSurfaceReading()
    {
        return $this->SurfaceReading;
    }
    
    /**
     * Set CriticalitySafetyIndex
     *
     * @param decimal $criticalitySafetyIndex
     * @return RadioactivityDetail
     */
    public function setCriticalitySafetyIndex($criticalitySafetyIndex)
    {
        $this->CriticalitySafetyIndex = $criticalitySafetyIndex;
        return $this;
    }
    
    /**
     * Returns Set CriticalitySafetyIndex
     *
     * @return decimal
     */
    public function getCriticalitySafetyIndex()
    {
        return $this->CriticalitySafetyIndex;
    }
    
    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return RadioactivityDetail
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns Set Dimensions
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    

    
}