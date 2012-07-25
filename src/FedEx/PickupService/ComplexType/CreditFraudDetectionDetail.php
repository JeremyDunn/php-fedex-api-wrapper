<?php
namespace FedEx\PickupService\ComplexType;

/**
 * This class is a rename of the previous VerifyCreditFraudDetail; the name change reflects the fact that it is no longer tied to a "verify" usage.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreditFraudDetectionDetail
    extends AbstractComplexType
{
    protected $_name = 'CreditFraudDetectionDetail';

    /**
     * 
     *
     * @param string $IpAddress
     * return CreditFraudDetectionDetail
     */
    public function setIpAddress($ipAddress)
    {
        $this->IpAddress = $ipAddress;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $ClientCookiesEnabled
     * return CreditFraudDetectionDetail
     */
    public function setClientCookiesEnabled($clientCookiesEnabled)
    {
        $this->ClientCookiesEnabled = $clientCookiesEnabled;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DevicePrint
     * return CreditFraudDetectionDetail
     */
    public function setDevicePrint($devicePrint)
    {
        $this->DevicePrint = $devicePrint;
        return $this;
    }
    

    
}