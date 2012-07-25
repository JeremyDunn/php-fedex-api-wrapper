<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specifications for pup/set or vehicle delayed for loading or unloading.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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