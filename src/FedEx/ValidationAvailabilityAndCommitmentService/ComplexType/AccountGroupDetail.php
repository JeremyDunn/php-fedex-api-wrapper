<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AccountGroupDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $GroupCode
 * @property string $GroupId
 * @property AccountGroupMasterAccountDetail $MasterAccountDetail

 */
class AccountGroupDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AccountGroupDetail';

    /**
     * Specifies the group code for the account group that the account belongs to.
     *
     * @param string $groupCode
     * @return $this
     */
    public function setGroupCode($groupCode)
    {
        $this->values['GroupCode'] = $groupCode;
        return $this;
    }

    /**
     * Specifies the group id of the account group that the account belongs to.
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->values['GroupId'] = $groupId;
        return $this;
    }

    /**
     * Details about the master account associated with the account group.
     *
     * @param AccountGroupMasterAccountDetail $masterAccountDetail
     * @return $this
     */
    public function setMasterAccountDetail(AccountGroupMasterAccountDetail $masterAccountDetail)
    {
        $this->values['MasterAccountDetail'] = $masterAccountDetail;
        return $this;
    }
}
