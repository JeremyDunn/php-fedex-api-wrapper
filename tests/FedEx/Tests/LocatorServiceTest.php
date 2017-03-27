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

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getFedExLocatorReply($fedexLocatorRequest);
    }
}