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
    const PRODUCTION_URL = 'https://gateway.fedex.com:443/web-services/uploaddocument';
    const TESTING_URL = 'https://gatewaybeta.fedex.com:443/web-services/uploaddocument';

    protected static $wsdlFileName = 'UploadDocumentService_v1.wsdl';
            
    /**
     * Sends the UploadDocumentsRequest and returns the response
     *
     * @param ComplexType\UploadDocumentsRequest $uploadDocumentsRequest
     * @return stdClass
     */
    public function getUploadDocumentsReply(ComplexType\UploadDocumentsRequest $uploadDocumentsRequest)
    {
        return $this->getSoapClient()->uploadDocuments($uploadDocumentsRequest->toArray());
    }
            
    /**
     * Sends the UploadImagesRequest and returns the response
     *
     * @param ComplexType\UploadImagesRequest $uploadImagesRequest
     * @return stdClass
     */
    public function getUploadImagesReply(ComplexType\UploadImagesRequest $uploadImagesRequest)
    {
        return $this->getSoapClient()->uploadImages($uploadImagesRequest->toArray());
    }

}
