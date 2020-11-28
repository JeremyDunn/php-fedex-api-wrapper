<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class is a rename of the previous VerifyCreditFraudDetail; the name change reflects the fact that it is no longer tied to a "verify" usage.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $IpAddress
 * @property boolean $ClientCookiesEnabled

 */
class CreditFraudDetectionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreditFraudDetectionDetail';

    /**
     * Set IpAddress
     *
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->values['IpAddress'] = $ipAddress;
        return $this;
    }

    /**
     * Set ClientCookiesEnabled
     *
     * @param boolean $clientCookiesEnabled
     * @return $this
     */
    public function setClientCookiesEnabled($clientCookiesEnabled)
    {
        $this->values['ClientCookiesEnabled'] = $clientCookiesEnabled;
        return $this;
    }
}
