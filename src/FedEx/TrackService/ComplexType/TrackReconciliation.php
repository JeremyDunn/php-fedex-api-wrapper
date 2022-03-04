<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Status
 * @property string $Description

 */
class TrackReconciliation extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackReconciliation';

    /**
     * An identifier for this type of status.
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }

    /**
     * A human-readable description of this status.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }
}
