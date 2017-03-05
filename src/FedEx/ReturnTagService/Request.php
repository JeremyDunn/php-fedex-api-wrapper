<?php
namespace FedEx\ReturnTagService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
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
            $this->wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/ReturnTagService_v1.wsdl');
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
     * Sends the ExpressTagAvailabilityRequest and returns the response
     *
     * @param ComplexType\ExpressTagAvailabilityRequest $expressTagAvailabilityRequest
     * @return stdClass
     */
    public function getGetExpressTagAvailabilityReply(ComplexType\ExpressTagAvailabilityRequest $expressTagAvailabilityRequest)
    {
        return $this->soapClient->getExpressTagAvailability($expressTagAvailabilityRequest->toArray());
    }
}
