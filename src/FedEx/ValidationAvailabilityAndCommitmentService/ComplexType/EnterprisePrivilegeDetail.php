<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EnterprisePrivilegeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Id
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EnterprisePermissionType|string $Permission
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property DateRange $EffectiveDateRange

 */
class EnterprisePrivilegeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EnterprisePrivilegeDetail';

    /**
     * Set Id
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Set Permission
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EnterprisePermissionType|string $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->values['Permission'] = $permission;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set EffectiveDateRange
     *
     * @param DateRange $effectiveDateRange
     * @return $this
     */
    public function setEffectiveDateRange(DateRange $effectiveDateRange)
    {
        $this->values['EffectiveDateRange'] = $effectiveDateRange;
        return $this;
    }
}
