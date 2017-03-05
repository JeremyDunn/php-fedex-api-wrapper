<?php
namespace FedEx\Pickup;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Request extends AbstractRequest
{
    /**
     * WSDL Path
     *
     * @var string
     */
    protected $wsdlPath;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * Constructor
     *
     * @param string $wsdlPath
     */
    public function __construct($wsdlPath = null)
    {
        if (null != $wsdlPath) {
            $this->wsdlPath = $wsdlPath;
        } else {
            $this->wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/PickupService_v3.wsdl');
        }

        $this->soapClient = new \SoapClient($this->wsdlPath, array('trace' => true));
    }

    /**
     * Returns the SoapClient instance
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }

    /**
     * Sends the PickupAvailabilityRequest and returns the response
     *
     * @param ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest
     * @return stdClass
     */
    public function getGetPickupAvailabilityReply(ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        return $this->soapClient->getPickupAvailability($pickupAvailabilityRequest->toArray());
    }    /**
     * Sends the CreatePickupRequest and returns the response
     *
     * @param ComplexType\CreatePickupRequest $createPickupRequest
     * @return stdClass
     */
    public function getCreatePickupReply(ComplexType\CreatePickupRequest $createPickupRequest)
    {
        return $this->soapClient->createPickup($createPickupRequest->toArray());
    }    /**
     * Sends the CancelPickupRequest and returns the response
     *
     * @param ComplexType\CancelPickupRequest $cancelPickupRequest
     * @return stdClass
     */
    public function getCancelPickupReply(ComplexType\CancelPickupRequest $cancelPickupRequest)
    {
        return $this->soapClient->cancelPickup($cancelPickupRequest->toArray());
    }
}
