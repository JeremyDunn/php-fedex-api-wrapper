<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for storage provided for shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property duration $Duration

 */
class StorageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'StorageDetail';

    /**
     * Total time shipment is held by carrier.
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
