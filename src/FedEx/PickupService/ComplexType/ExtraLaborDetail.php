<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specification for labor time spent handling shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ExtraLaborDetail
    extends AbstractComplexType
{
    protected $_name = 'ExtraLaborDetail';

    /**
     * Total labor time.
     *
     * @param duration $Duration
     * return ExtraLaborDetail
     */
    public function setDuration(duration $duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}