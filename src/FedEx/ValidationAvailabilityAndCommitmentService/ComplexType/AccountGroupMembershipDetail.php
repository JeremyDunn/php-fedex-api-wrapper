<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the account group the account is a member of
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property AccountGroupDetail $AccountGroup
 * @property string $EffectiveDate
 * @property string $ExpirationDate

 */
class AccountGroupMembershipDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AccountGroupMembershipDetail';

    /**
     * Set AccountGroup
     *
     * @param AccountGroupDetail $accountGroup
     * @return $this
     */
    public function setAccountGroup(AccountGroupDetail $accountGroup)
    {
        $this->values['AccountGroup'] = $accountGroup;
        return $this;
    }

    /**
     * Date when the account group membership is effective.
     *
     * @param string $effectiveDate
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->values['EffectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
     * Date when the account group membership expires.
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }
}
