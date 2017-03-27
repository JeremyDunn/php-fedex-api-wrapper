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

        //for now use mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $closeService = new Request($mockSoapClient);
        $closeService->getGroundCloseReply($groundCloseRequest);
        $closeService->getGroundCloseWithDocumentsReply($groundCloseWithDocumentsRequest);
        $closeService->getReprintGroundCloseDocumentsReply($reprintGroundCloseDocumentsRequest);
        $closeService->getSmartPostCloseReply($smartPostCloseRequest);
        $closeService->getGroundCloseReportsReprintReply($groundCloseReportReprintsRequest);
    }
}
