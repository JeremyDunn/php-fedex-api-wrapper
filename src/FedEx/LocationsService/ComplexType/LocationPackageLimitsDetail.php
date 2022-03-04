<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationPackageLimitsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property Weight $Weight
 * @property Dimensions $Dimensions

 */
class LocationPackageLimitsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationPackageLimitsDetail';

    /**
     * Set Weight
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
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
