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
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/uploaddocument';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/uploaddocument';

    protected static $wsdlFileName = 'UploadDocumentService_v11.wsdl';
            
    /**
     * Sends the UploadDocumentsRequest and returns the response
     *
     * @param ComplexType\UploadDocumentsRequest $uploadDocumentsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\UploadDocumentsReply|stdClass
     */
    public function getUploadDocumentsReply(ComplexType\UploadDocumentsRequest $uploadDocumentsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->uploadDocuments($uploadDocumentsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $uploadDocumentsReply = new ComplexType\UploadDocumentsReply;
        $uploadDocumentsReply->populateFromStdClass($response);
        return $uploadDocumentsReply;
    }
            
    /**
     * Sends the UploadImagesRequest and returns the response
     *
     * @param ComplexType\UploadImagesRequest $uploadImagesRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\UploadImagesReply|stdClass
     */
    public function getUploadImagesReply(ComplexType\UploadImagesRequest $uploadImagesRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->uploadImages($uploadImagesRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $uploadImagesReply = new ComplexType\UploadImagesReply;
        $uploadImagesReply->populateFromStdClass($response);
        return $uploadImagesReply;
    }
}
