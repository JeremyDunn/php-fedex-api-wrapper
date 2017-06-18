<?php

namespace FedEx\Tests;

use FedEx\ValidationAvailabilityAndCommitmentService\Request;
use FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class ValidationAvailabilityAndCommitmentServiceTest extends TestCase
{
    public function testServiceAvailabilityRequest()
    {
        $serviceAvailabilityRequest = new ComplexType\ServiceAvailabilityRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($serviceAvailabilityRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('serviceAvailability')->will($this->returnValue(ComplexType\ServiceAvailabilityRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\ServiceAvailabilityRequest::class, $request->getServiceAvailabilityReply($serviceAvailabilityRequest));
    }

}