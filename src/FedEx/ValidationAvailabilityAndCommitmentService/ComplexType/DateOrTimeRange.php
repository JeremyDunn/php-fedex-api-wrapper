<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DateOrTimeRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Start
 * @property string $End

 */
class DateOrTimeRange extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DateOrTimeRange';

    /**
     * Set Start
     *
     * @param string $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->values['Start'] = $start;
        return $this;
    }

    /**
     * Set End
     *
     * @param string $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->values['End'] = $end;
        return $this;
    }
}
