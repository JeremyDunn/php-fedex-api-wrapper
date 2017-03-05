<?php
namespace FedEx\PackageMovementInformationService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
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
            $this->wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/PackageMovementInformationService_v5.wsdl');
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
     * Sends the PostalCodeInquiryRequest and returns the response
     *
     * @param ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest
     * @return stdClass
     */
    public function getPostalCodeInquiryReply(ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest)
    {
        return $this->soapClient->postalCodeInquiry($postalCodeInquiryRequest->toArray());
    }    /**
     * Sends the ServiceAvailabilityRequest and returns the response
     *
     * @param ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @return stdClass
     */
    public function getServiceAvailabilityReply(ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest)
    {
        return $this->soapClient->serviceAvailability($serviceAvailabilityRequest->toArray());
    }
}
