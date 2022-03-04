<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for labor time spent handling shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Duration

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
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->values['Duration'] = $duration;
        return $this;
    }
}
