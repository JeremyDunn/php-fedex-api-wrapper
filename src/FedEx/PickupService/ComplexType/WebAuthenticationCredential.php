<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Two part authentication string used for the sender's identity
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class WebAuthenticationCredential
    extends AbstractComplexType
{
    protected $_name = 'WebAuthenticationCredential';

    /**
     * Identifying part of authentication credential. This value is provided by FedEx after registration
     *
     * @param string $Key
     * return WebAuthenticationCredential
     */
    public function setKey($key)
    {
        $this->Key = $key;
        return $this;
    }
    
    /**
     * Secret part of authentication key. This value is provided by FedEx after registration.
     *
     * @param string $Password
     * return WebAuthenticationCredential
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    

    
}