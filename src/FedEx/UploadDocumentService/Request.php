<?php
namespace FedEx\UploadDocumentService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
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
            $this->_wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/UploadDocumentService_v1.wsdl');
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
     * Sends the UploadDocumentsRequest and returns the response
     *
     * @param ComplexType\UploadDocumentsRequest $uploadDocumentsRequest 
     * @return stdClass
     */
    public function getUploadDocumentsReply(ComplexType\UploadDocumentsRequest $uploadDocumentsRequest)
    {
        return $this->_soapClient->uploadDocuments($uploadDocumentsRequest->toArray());
    }
       /**
     * Sends the UploadImagesRequest and returns the response
     *
     * @param ComplexType\UploadImagesRequest $uploadImagesRequest 
     * @return stdClass
     */
    public function getUploadImagesReply(ComplexType\UploadImagesRequest $uploadImagesRequest)
    {
        return $this->_soapClient->uploadImages($uploadImagesRequest->toArray());
    }
   

}

   