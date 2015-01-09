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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreditFraudDetectionDetail';

    /**
     * Set IpAddress
     *
     * @param string $ipAddress
     * @return CreditFraudDetectionDetail
     */
    public function setIpAddress($ipAddress)
    {
        $this->IpAddress = $ipAddress;
        return $this;
    }
    
    /**
     * Returns Set IpAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->IpAddress;
    }
    
    /**
     * Set ClientCookiesEnabled
     *
     * @param boolean $clientCookiesEnabled
     * @return CreditFraudDetectionDetail
     */
    public function setClientCookiesEnabled($clientCookiesEnabled)
    {
        $this->ClientCookiesEnabled = $clientCookiesEnabled;
        return $this;
    }
    
    /**
     * Returns Set ClientCookiesEnabled
     *
     * @return boolean
     */
    public function getClientCookiesEnabled()
    {
        return $this->ClientCookiesEnabled;
    }
    
    /**
     * Set DevicePrint
     *
     * @param string $devicePrint
     * @return CreditFraudDetectionDetail
     */
    public function setDevicePrint($devicePrint)
    {
        $this->DevicePrint = $devicePrint;
        return $this;
    }
    
    /**
     * Returns Set DevicePrint
     *
     * @return string
     */
    public function getDevicePrint()
    {
        return $this->DevicePrint;
    }
    

    
}