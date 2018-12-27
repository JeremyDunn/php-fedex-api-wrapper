<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SpecialInstructionStatusDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\SpecialInstructionsStatusCode|string $Status
 * @property string $StatusCreateTime

 */
class SpecialInstructionStatusDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SpecialInstructionStatusDetail';

    /**
     * Specifies the status of the track special instructions requested.
     *
     * @param \FedEx\TrackService\SimpleType\SpecialInstructionsStatusCode|string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }

    /**
     * Time when the status was changed.
     *
     * @param string $statusCreateTime
     * @return $this
     */
    public function setStatusCreateTime($statusCreateTime)
    {
        $this->values['StatusCreateTime'] = $statusCreateTime;
        return $this;
    }
}
