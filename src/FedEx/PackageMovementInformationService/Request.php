<?php
namespace FedEx\PackageMovementInformation;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
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
            $this->_wsdlPath = realpath(dirname(dirname(__FILE__)) . \DIRECTORY_SEPARATOR . '_wsdl' . \DIRECTORY_SEPARATOR . 'PackageMovementInformationService_v5.wsdl');
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
     * Sends SOAP Request and returns Service Availability Reply
     *
     * @param ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @return stdClass
     */
    public function getServiceAvailabilityReply(ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest)
    {
        return $this->_soapClient->serviceAvailability($serviceAvailabilityRequest->toArray());
    }

    /**
     * Sends SOAP Request and returns Postal Inquiry Reply
     *
     * @param PostalCodeInquiryRequest $postalCodeInquiryRequest
     * @return stdClass
     */
    public function getPostalCodeInquiryReply(ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest)
    {
        return $this->_soapClient->postalCodeInquiry($postalCodeInquiryRequest->toArray());
    }
}