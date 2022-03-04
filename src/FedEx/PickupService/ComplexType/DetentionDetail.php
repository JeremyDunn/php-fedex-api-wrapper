<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pup/set or vehicle delayed for loading or unloading.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Duration

 */
class DetentionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DetentionDetail';

    /**
     * Amount of time involved in the detention.
     *
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->values['Duration'] = $duration;
        return $this;
    }
}
