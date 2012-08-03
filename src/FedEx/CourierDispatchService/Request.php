<?php
namespace FedEx\CourierDispatchService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class Request extends AbstractRequest
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
            $this->_wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/CourierDispatchService_v3.wsdl');
        }

        $this->_soapClient = new \SoapClient($this->_wsdlPath, array('trace' => true));
    }

    /**
     * Returns the SoapClient instance
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->_soapClient;
    }

    /**
     * Sends the CourierDispatchRequest and returns the response
     *
     * @param ComplexType\CourierDispatchRequest $courierDispatchRequest 
     * @return stdClass
     */
    public function getCreateCourierDispatchReply(ComplexType\CourierDispatchRequest $courierDispatchRequest)
    {
        return $this->_soapClient->createCourierDispatch($courierDispatchRequest->toArray());
    }
       /**
     * Sends the CancelCourierDispatchRequest and returns the response
     *
     * @param ComplexType\CancelCourierDispatchRequest $cancelCourierDispatchRequest 
     * @return stdClass
     */
    public function getCancelCourierDispatchReply(ComplexType\CancelCourierDispatchRequest $cancelCourierDispatchRequest)
    {
        return $this->_soapClient->cancelCourierDispatch($cancelCourierDispatchRequest->toArray());
    }
       /**
     * Sends the PickupAvailabilityRequest and returns the response
     *
     * @param ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest 
     * @return stdClass
     */
    public function getGetPickupAvailabilityReply(ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        return $this->_soapClient->getPickupAvailability($pickupAvailabilityRequest->toArray());
    }
   

}

   