<?php
namespace FedEx\UploadDocumentService;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
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
            $this->_wsdlPath = realpath(dirname(dirname(__FILE__)) . \DIRECTORY_SEPARATOR . '_wsdl' . \DIRECTORY_SEPARATOR . 'UploadDocumentService_v1.wsdl');
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
     * Sends request and returns Upload Documents Reply
     *
     * @param UploadDocumentsRequest $uploadDocumentsRequest
     * @return stdClass
     */
    public function getUploadDocumentsReply(ComplexType\UploadDocumentsRequest $uploadDocumentsRequest)
    {
        return $this->_soapClient->uploadDocuments($uploadDocumentsRequest->toArray());
    }

    /**
     * Sends request and returns Upload Images Reply
     *
     * @param UploadImagesRequest $uploadImagesRequest
     * @return stdClass
     */
    public function getUploadImagesReply(ComplexType\UploadImagesRequest $uploadImagesRequest)
    {
        return $this->_soapClient->uploadImages($uploadImagesRequest->toArray());
    }

}
