<?php
namespace FedEx\RateService\ComplexType;

/**
 * Used in authentication of the sender's identity.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class WebAuthenticationDetail
    extends AbstractComplexType
{
    protected $_name = 'WebAuthenticationDetail';

    /**
     * Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @param WebAuthenticationCredential $UserCredential
     * return WebAuthenticationDetail
     */
    public function setUserCredential(WebAuthenticationCredential $userCredential)
    {
        $this->UserCredential = $userCredential;
        return $this;
    }
    

    
}