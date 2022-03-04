<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for storage provided for shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Duration

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
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->values['Duration'] = $duration;
        return $this;
    }
}
