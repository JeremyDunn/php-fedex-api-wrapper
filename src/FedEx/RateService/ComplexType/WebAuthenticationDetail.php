<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used in authentication of the sender's identity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class WebAuthenticationDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'WebAuthenticationDetail';

    /**
     * Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @param WebAuthenticationCredential $userCredential
     * @return WebAuthenticationDetail
     */
    public function setUserCredential(WebAuthenticationCredential $userCredential)
    {
        $this->UserCredential = $userCredential;
        return $this;
    }
    
    /**
     * Returns Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @return WebAuthenticationCredential
     */
    public function getUserCredential()
    {
        return $this->UserCredential;
    }
    

    
}