<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DirectDebitMandateDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Id
 * @property string $AuthenticationDate

 */
class DirectDebitMandateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DirectDebitMandateDetail';

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
     * Set AuthenticationDate
     *
     * @param string $authenticationDate
     * @return $this
     */
    public function setAuthenticationDate($authenticationDate)
    {
        $this->values['AuthenticationDate'] = $authenticationDate;
        return $this;
    }
}
