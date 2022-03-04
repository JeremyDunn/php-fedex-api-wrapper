<?php
namespace FedEx\ReturnTagService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used in authentication of the sender's identity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
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
