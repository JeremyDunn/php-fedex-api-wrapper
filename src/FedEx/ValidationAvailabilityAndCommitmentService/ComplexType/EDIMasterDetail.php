<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EDIMasterDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $EdiMasterAccountNumber

 */
class EDIMasterDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EDIMasterDetail';

    /**
     * Set EdiMasterAccountNumber
     *
     * @param string $ediMasterAccountNumber
     * @return $this
     */
    public function setEdiMasterAccountNumber($ediMasterAccountNumber)
    {
        $this->values['EdiMasterAccountNumber'] = $ediMasterAccountNumber;
        return $this;
    }
}
