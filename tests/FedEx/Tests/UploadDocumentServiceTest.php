<?php

namespace FedEx\Tests;

use FedEx\UploadDocumentService\Request;
use FedEx\UploadDocumentService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class UploadDocumentServiceTest extends TestCase
{
    public function testUploadDocumentServiceRequest()
    {
        $uploadDocumentsRequest = new ComplexType\UploadDocumentsRequest();
        $uploadImagesRequest = new ComplexType\UploadImagesRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($uploadDocumentsRequest);
        $populator->populate($uploadImagesRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('uploadDocuments')->will($this->returnValue(ComplexType\UploadDocumentsRequest::class));
        $mockSoapClient->method('uploadImages')->will($this->returnValue(ComplexType\UploadImagesRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\UploadDocumentsRequest::class, $request->getUploadDocumentsReply($uploadDocumentsRequest, true));
        $this->assertEquals(ComplexType\UploadImagesRequest::class, $request->getUploadImagesReply($uploadImagesRequest, true));
    }
}
