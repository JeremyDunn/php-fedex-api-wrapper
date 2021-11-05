<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the credit status for a particular profile.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Status
 * @property string $BankruptcyDate
 * @property string $CreditReasonCode
 * @property string $CashReasonCode
 * @property string $CreditRatingCode

 */
class ProfileCreditStatusDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ProfileCreditStatusDetail';

    /**
     * Specifies the credit status of the account such as CASH, CREDIT_CARD.
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
     * Set BankruptcyDate
     *
     * @param string $bankruptcyDate
     * @return $this
     */
    public function setBankruptcyDate($bankruptcyDate)
    {
        $this->values['BankruptcyDate'] = $bankruptcyDate;
        return $this;
    }

    /**
     * Specifies the credit reason code for the status specified.
     *
     * @param string $creditReasonCode
     * @return $this
     */
    public function setCreditReasonCode($creditReasonCode)
    {
        $this->values['CreditReasonCode'] = $creditReasonCode;
        return $this;
    }

    /**
     * Specifies the cash reason code for the status specified.
     *
     * @param string $cashReasonCode
     * @return $this
     */
    public function setCashReasonCode($cashReasonCode)
    {
        $this->values['CashReasonCode'] = $cashReasonCode;
        return $this;
    }

    /**
     * Set CreditRatingCode
     *
     * @param string $creditRatingCode
     * @return $this
     */
    public function setCreditRatingCode($creditRatingCode)
    {
        $this->values['CreditRatingCode'] = $creditRatingCode;
        return $this;
    }
}
