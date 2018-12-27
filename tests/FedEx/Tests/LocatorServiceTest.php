<?php

namespace FedEx\Tests;

use FedEx\LocationsService\Request;
use FedEx\LocationsService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class LocatorServiceTest extends TestCase
{
    public function testLocatorServiceRequest()
    {
        $searchLocationsRequest = new ComplexType\SearchLocationsRequest();

        $complextTypePopulator = new ComplexTypePopulator();
        $complextTypePopulator->populate($searchLocationsRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('searchLocations')->will($this->returnValue(ComplexType\SearchLocationsReply::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\SearchLocationsReply::class, $request->getSearchLocationsReply($searchLocationsRequest, true));
    }
}
