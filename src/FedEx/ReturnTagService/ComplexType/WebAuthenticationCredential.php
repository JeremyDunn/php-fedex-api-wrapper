<?php
namespace FedEx\ReturnTagService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Two part authentication string used for the sender's identity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class WebAuthenticationCredential
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'WebAuthenticationCredential';

    /**
     * Identifying part of the authentication key. This value is provided by FedEx after registration.
     *
     * @param string $key
     * @return WebAuthenticationCredential
     */
    public function setKey($key)
    {
        $this->Key = $key;
        return $this;
    }
    
    /**
     * Returns Identifying part of the authentication key. This value is provided by FedEx after registration.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }
    
    /**
     * Secret part of authentication key used for authentication. This value is provided by FedEx after registration.
     *
     * @param string $password
     * @return WebAuthenticationCredential
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    
    /**
     * Returns Secret part of authentication key used for authentication. This value is provided by FedEx after registration.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }
    

    
}