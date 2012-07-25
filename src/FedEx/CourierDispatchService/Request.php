<?php
namespace FedEx\CourierDispatchService;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
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
            $this->_wsdlPath = realpath(dirname(dirname(__FILE__)) . \DIRECTORY_SEPARATOR . '_wsdl' . \DIRECTORY_SEPARATOR . 'CourierDispatchService_v3.wsdl');
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
     * Sends request and returns Courier Dispatch Reply
     *
     * @param CourierDispatchRequest $courierDispatchRequest
     * @return stdClass
     */
    public function getCourierDispatchReply(ComplexType\CourierDispatchRequest $courierDispatchRequest)
    {
        return $this->getSoapClient()->createCourierDispatch($courierDispatchRequest->toArray());
    }

    /**
     * Sends request and returns Cancel Courier Dispatch Request
     *
     * @param CancelCourierDispatchRequest $cancelCourierDispatchRequest
     * @return stdClass
     */
    public function getCancelCourierDispatchReply(ComplexType\CancelCourierDispatchRequest $cancelCourierDispatchRequest)
    {
        return $this->getSoapClient()->cancelCourierDispatch($cancelCourierDispatchRequest->toArray());
    }

    /**
     * Sends request and returns Pickup Availability Request
     *
     * @param PickupAvailabilityRequest $pickupAvailabilityRequest
     * @return stdClass
     */
    public function getPickupAvailabilityReply(ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        return $this->getSoapClient()->getPickupAvailability($pickupAvaiabilityRequest->toArray());
    }
    
}