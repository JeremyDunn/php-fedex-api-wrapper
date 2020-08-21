<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies custom transit time to be applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Key

 */
class CustomTransitTimeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomTransitTimeDetail';

    /**
     * Identifies options to be applied.
     *
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->values['Key'] = $key;
        return $this;
    }
}
