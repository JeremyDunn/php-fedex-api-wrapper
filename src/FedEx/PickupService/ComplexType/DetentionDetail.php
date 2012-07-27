<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pup/set or vehicle delayed for loading or unloading.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class DetentionDetail
    extends AbstractComplexType
{
    protected $_name = 'DetentionDetail';

    /**
     * Amount of time involved in the detention.
     *
     * @param duration $Duration
     * return DetentionDetail
     */
    public function setDuration(duration $duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}