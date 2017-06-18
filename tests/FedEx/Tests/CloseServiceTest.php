<?php

namespace FedEx\Tests;

use FedEx\Utility\ComplexTypePopulator;
use FedEx\CloseService\ComplexType;
use FedEx\CloseService\Request;

class CloseServiceTest extends TestCase
{
    public function testCloseServiceRequest()
    {
        $groundCloseRequest = new ComplexType\GroundCloseRequest();
        $groundCloseWithDocumentsRequest = new ComplexType\GroundCloseWithDocumentsRequest();
        $reprintGroundCloseDocumentsRequest = new ComplexType\ReprintGroundCloseDocumentsRequest();
        $smartPostCloseRequest = new ComplexType\SmartPostCloseRequest();
        $groundCloseReportReprintsRequest = new ComplexType\GroundCloseReportsReprintRequest();

        $complexTypePopulator = new ComplexTypePopulator();
        $complexTypePopulator->populate($groundCloseRequest);
        $complexTypePopulator->populate($groundCloseWithDocumentsRequest);
        $complexTypePopulator->populate($reprintGroundCloseDocumentsRequest);
        $complexTypePopulator->populate($smartPostCloseRequest);
        $complexTypePopulator->populate($groundCloseReportReprintsRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('groundClose')->will($this->returnValue(ComplexType\GroundCloseRequest::class));
        $mockSoapClient->method('groundCloseWithDocuments')->will($this->returnValue(ComplexType\GroundCloseWithDocumentsRequest::class));
        $mockSoapClient->method('reprintGroundCloseDocuments')->will($this->returnValue(ComplexType\ReprintGroundCloseDocumentsRequest::class));
        $mockSoapClient->method('smartPostClose')->will($this->returnValue(ComplexType\SmartPostCloseRequest::class));
        $mockSoapClient->method('groundCloseReportsReprint')->will($this->returnValue(ComplexType\GroundCloseReportsReprintRequest::class));

        $closeService = new Request($mockSoapClient);
        $this->assertEquals(ComplexType\GroundCloseRequest::class, $closeService->getGroundCloseReply($groundCloseRequest, true));
        $this->assertEquals(ComplexType\GroundCloseWithDocumentsRequest::class, $closeService->getGroundCloseWithDocumentsReply($groundCloseWithDocumentsRequest, true));
        $this->assertEquals(ComplexType\ReprintGroundCloseDocumentsRequest::class, $closeService->getReprintGroundCloseDocumentsReply($reprintGroundCloseDocumentsRequest, true));
        $this->assertEquals(ComplexType\SmartPostCloseRequest::class, $closeService->getSmartPostCloseReply($smartPostCloseRequest, true));
        $this->assertEquals(ComplexType\GroundCloseReportsReprintRequest::class, $closeService->getGroundCloseReportsReprintReply($groundCloseReportReprintsRequest, true));
    }
}
