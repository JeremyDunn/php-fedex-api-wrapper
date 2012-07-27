<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for labor time spent handling shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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