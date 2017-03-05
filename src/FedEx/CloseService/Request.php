<?php
namespace FedEx\CloseService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
            $this->wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/CloseService_v2.wsdl');
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
     * Sends the SmartPostCloseRequest and returns the response
     *
     * @param ComplexType\SmartPostCloseRequest $smartPostCloseRequest
     * @return stdClass
     */
    public function getSmartPostCloseReply(ComplexType\SmartPostCloseRequest $smartPostCloseRequest)
    {
        return $this->soapClient->smartPostClose($smartPostCloseRequest->toArray());
    }    /**
     * Sends the GroundCloseRequest and returns the response
     *
     * @param ComplexType\GroundCloseRequest $groundCloseRequest
     * @return stdClass
     */
    public function getGroundCloseReply(ComplexType\GroundCloseRequest $groundCloseRequest)
    {
        return $this->soapClient->groundClose($groundCloseRequest->toArray());
    }    /**
     * Sends the GroundCloseReportsReprintRequest and returns the response
     *
     * @param ComplexType\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest
     * @return stdClass
     */
    public function getGroundCloseReportsReprintReply(ComplexType\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest)
    {
        return $this->soapClient->groundCloseReportsReprint($groundCloseReportsReprintRequest->toArray());
    }    /**
     * Sends the GroundCloseWithDocumentsRequest and returns the response
     *
     * @param ComplexType\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest
     * @return stdClass
     */
    public function getGroundCloseWithDocumentsReply(ComplexType\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest)
    {
        return $this->soapClient->groundCloseWithDocuments($groundCloseWithDocumentsRequest->toArray());
    }    /**
     * Sends the ReprintGroundCloseDocumentsRequest and returns the response
     *
     * @param ComplexType\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest
     * @return stdClass
     */
    public function getReprintGroundCloseDocumentsReply(ComplexType\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest)
    {
        return $this->soapClient->reprintGroundCloseDocuments($reprintGroundCloseDocumentsRequest->toArray());
    }
}
