<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadioactiveDangerousGoodsHandlingUnitDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property float $TransportIndex
 * @property float $SurfaceReading
 * @property float $CriticalitySafetyIndex
 * @property \FedEx\DGDSService\SimpleType\RadioactiveLabelType|string $LabelType

 */
class RadioactiveDangerousGoodsHandlingUnitDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RadioactiveDangerousGoodsHandlingUnitDetail';

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
     * Specifies the radioactive label type for this handling unit or package.
     *
     * @param \FedEx\DGDSService\SimpleType\RadioactiveLabelType|string $labelType
     * @return $this
     */
    public function setLabelType($labelType)
    {
        $this->values['LabelType'] = $labelType;
        return $this;
    }
}
