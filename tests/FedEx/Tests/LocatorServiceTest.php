<?php

namespace FedEx\Tests;

use FedEx\LocatorService\Request;
use FedEx\LocatorService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class LocatorServiceTest extends TestCase
{
    public function testLocatorServiceRequest()
    {
        $fedexLocatorRequest = new ComplexType\FedExLocatorRequest();

        $complextTypePopulator = new ComplexTypePopulator();
        $complextTypePopulator->populate($fedexLocatorRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('fedExLocator')->will($this->returnValue(ComplexType\FedExLocatorRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\FedExLocatorRequest::class, $request->getFedExLocatorReply($fedexLocatorRequest, true));
    }
}
