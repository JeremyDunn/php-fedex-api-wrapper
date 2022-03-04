<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used in authentication of the sender's identity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property WebAuthenticationCredential $ParentCredential
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
     * This was renamed from cspCredential.
     *
     * @param WebAuthenticationCredential $parentCredential
     * @return $this
     */
    public function setParentCredential(WebAuthenticationCredential $parentCredential)
    {
        $this->values['ParentCredential'] = $parentCredential;
        return $this;
    }

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
