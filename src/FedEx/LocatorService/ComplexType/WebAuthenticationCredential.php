<?php
namespace FedEx\LocatorService\ComplexType;

/**
 * Two part authentication string used for the sender's identity.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class WebAuthenticationCredential
    extends AbstractComplexType
{
    protected $_name = 'WebAuthenticationCredential';

    /**
     * Publicly known part of authentication key used for authentication. This value is provided by FedEx after registration.
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
     * Secret part of authentication key used for authentication. This value is provided by FedEx after registration.
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