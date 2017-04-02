<?php

namespace FedEx\Tests;

use FedEx\ReturnTagService\Request;
use FedEx\ReturnTagService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class ReturnTagServiceTest extends TestCase
{
    public function testReturnTagServiceRequest()
    {
        $expressTagAvailabilityRequest = new ComplexType\ExpressTagAvailabilityRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($expressTagAvailabilityRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getExpressTagAvailability')->will($this->returnValue(ComplexType\ExpressTagAvailabilityRequest::class));

        $request = new Request($mockSoapClient);
        $this->assertEquals(ComplexType\ExpressTagAvailabilityRequest::class, $request->getGetExpressTagAvailabilityReply($expressTagAvailabilityRequest, true));
    }
}
