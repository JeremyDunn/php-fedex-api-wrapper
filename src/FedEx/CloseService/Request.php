<?php
namespace FedEx\CloseService;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
            $this->_wsdlPath = realpath(dirname(dirname(__FILE__)) . \DIRECTORY_SEPARATOR . '_wsdl' . \DIRECTORY_SEPARATOR . 'CloseService_v2.wsdl');
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
     * Sends request and returns Smart Post Close Reply
     * 
     * @param SmartPostCloseRequest $smartPostCloseRequest
     * @return stdClass
     */
    public function getSmartPostCloseReply(ComplexType\SmartPostCloseRequest $smartPostCloseRequest)
    {
        return $this->getSoapClient()->smartPostClose($smartPostCloseRequest->toArray());
    }

    /**
     * Sends request and returns Ground Close Reply
     *
     * @param GroundCloseRequest $groundCloseRequest
     * @return stdClass
     */
    public function getGroundCloseReply(ComplexType\GroundCloseRequest $groundCloseRequest)
    {
        return $this->getSoapClient()->groundClose($groundCloseRequest->toArray());
    }

    /**
     * Sends request and returns Ground Close Reports Reprint Reply
     *
     * @param GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest
     * @return stdClass
     */
    public function getGroundCloseReportsReprintReply(ComplexType\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest)
    {
        return $this->getSoapClient()->groundCloseReportsReprint($groundCloseReportsReprintRequest->toArray());
    }

    /**
     * Sends request and returns Ground Close Documents Reply
     * 
     * @param GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest
     * @return stdClass
     */
    public function getGroundCloseDocumentsReply(ComplexType\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest)
    {
        return $this->getSoapClient()->groundCloseWithDocuments($groundCloseWithDocumentsRequest->toArray());
    }

    /**
     * Sends request and returns Reprint Ground Close Documents Reply
     *
     * @param ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest
     * @return stdClass
     */
    public function getReprintGroundCloseDocumentsReply(ComplexType\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest)
    {
        return $this->getSoapClient()->reprintGroundCloseDocuments($reprintGroundCloseDocumentsRequest->toArray());
    }

    
}