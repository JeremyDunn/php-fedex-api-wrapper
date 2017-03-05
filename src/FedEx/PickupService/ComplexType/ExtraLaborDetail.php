<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for labor time spent handling shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property duration $Duration

 */
class ExtraLaborDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExtraLaborDetail';

    /**
     * Total labor time.
     *
     * @param duration $duration
     * @return $this
     */
    public function setDuration(duration $duration)
    {
        $this->values['Duration'] = $duration;
        return $this;
    }

    
}
