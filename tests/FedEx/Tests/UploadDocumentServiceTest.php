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

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getUploadDocumentsReply($uploadDocumentsRequest);
        $request->getUploadImagesReply($uploadImagesRequest);
    }
}