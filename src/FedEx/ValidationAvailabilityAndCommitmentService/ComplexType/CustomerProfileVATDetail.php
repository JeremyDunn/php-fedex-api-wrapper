<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how VAT (value added tax) is applied to the customer's account.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $ResponseCode

 */
class CustomerProfileVATDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerProfileVATDetail';

    /**
     * Specifies the VAT response code for the customer's account.The response code is applied only in LAC region. The valid values are integer values from 1 through 5.
     *
     * @param string $responseCode
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->values['ResponseCode'] = $responseCode;
        return $this;
    }
}
