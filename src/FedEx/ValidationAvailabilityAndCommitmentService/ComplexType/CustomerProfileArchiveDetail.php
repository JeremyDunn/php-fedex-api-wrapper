<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerProfileArchiveDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Date
 * @property string $ReasonCode
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $RestorationPermission

 */
class CustomerProfileArchiveDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerProfileArchiveDetail';

    /**
     * Set Date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['Date'] = $date;
        return $this;
    }

    /**
     * Set ReasonCode
     *
     * @param string $reasonCode
     * @return $this
     */
    public function setReasonCode($reasonCode)
    {
        $this->values['ReasonCode'] = $reasonCode;
        return $this;
    }

    /**
     * Set RestorationPermission
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PermissionType|string $restorationPermission
     * @return $this
     */
    public function setRestorationPermission($restorationPermission)
    {
        $this->values['RestorationPermission'] = $restorationPermission;
        return $this;
    }
}
