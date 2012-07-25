<?php
namespace FedEx\PickupService;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class Request
{
    /**
     * WSDL Path
     *
     * @var string
     */
    protected $_wsdlPath;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    protected $_soapClient;

    /**
     * Constructor
     *
     * @param string $wsdlPath
     */
    public function __construct($wsdlPath = null)
    {
        if (null != $wsdlPath) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            $this->_wsdlPath = realpath(dirname(dirname(__FILE__)) . \DIRECTORY_SEPARATOR . '_wsdl' . \DIRECTORY_SEPARATOR . 'PickupService_v3.wsdl');
        }

        $this->_soapClient = new \SoapClient($this->_wsdlPath, array('trace' => true));
    }

    /**
     * Returns the SoapClient instance
     *
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->_soapClient;
    }
    
    /**
     * Sends request and returns Pickup Availability Reply
     *
     * @param FedEx\PickupService\ComplexType\PickupAvailabilityRequest $PickupAvailabilityRequest
     * @return stdClass
     */
    public function getPickupAvailability(FedEx\PickupService\ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        return $this->_soapClient->getPickupAvailability($pickupAvailabilityRequest->toArray());
    }
    
    
    /**
     * Sends request and returns Create Pickup reply
     * 
     * @param FedEx\PickupService\ComplexType\CreatePickupRequest $createPickupRequest
     * @return type 
     */
    public function createPickup(CreatePickupRequest $createPickupRequest)
    {
        return $this->_soapClient->createPickup($createPickupRequest->toArray());
    }
    
    /**
     * Sends request and returns Cancel Pickup reply
     * 
     * @param FedEx\PickupService\ComplexType\CancelPickupRequest $cancelPickupRequest
     * @return type 
     */
    public function cancelPickup(CancelPickupRequest $cancelPickupRequest)
    {
        return $this->_soapClient->cancelPickup($cancelPickupRequest->toArray());
    }
    

    
}