<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * BankDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $BankName
 * @property Address $BankAddress

 */
class BankDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'BankDetail';

    /**
     * Set BankName
     *
     * @param string $bankName
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->values['BankName'] = $bankName;
        return $this;
    }

    /**
     * Set BankAddress
     *
     * @param Address $bankAddress
     * @return $this
     */
    public function setBankAddress(Address $bankAddress)
    {
        $this->values['BankAddress'] = $bankAddress;
        return $this;
    }
}
