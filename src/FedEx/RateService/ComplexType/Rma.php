<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * June 2011 ITG 121203 IR-RMA number has been removed from this structure and added as a new customer reference type. The structure remains because of the reason field below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Reason

 */
class Rma extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Rma';

    /**
     * Set Reason
     *
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->values['Reason'] = $reason;
        return $this;
    }
}
