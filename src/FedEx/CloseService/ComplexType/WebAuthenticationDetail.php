<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property WebAuthenticationCredential $UserCredential

 */
class WebAuthenticationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'WebAuthenticationDetail';

    /**
     * Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @param WebAuthenticationCredential $userCredential
     * @return $this
     */
    public function setUserCredential(WebAuthenticationCredential $userCredential)
    {
        $this->values['UserCredential'] = $userCredential;
        return $this;
    }
}
