<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class is a rename of the previous VerifyCreditFraudDetail; the name change reflects the fact that it is no longer tied to a "verify" usage.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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