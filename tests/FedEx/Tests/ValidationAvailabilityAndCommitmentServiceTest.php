<?php

namespace FedEx\Tests;

use FedEx\Utility\ComplexTypePopulator;
use FedEx\ValidationAvailabilityAndCommitmentService\ComplexType\ServiceAvailabilityReply;
use FedEx\ValidationAvailabilityAndCommitmentService\ComplexType\ServiceAvailabilityRequest;
use FedEx\ValidationAvailabilityAndCommitmentService\Request;

class ValidationAvailabilityAndCommitmentService extends TestCase
{
    public function testServiceAvailabilityRequest()
    {
        $serviceAvailabilityRequest = new ServiceAvailabilityRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($serviceAvailabilityRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('serviceAvailability')->will($this->returnValue(ServiceAvailabilityReply::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ServiceAvailabilityReply::class, $request->getServiceAvailabilityReply($serviceAvailabilityRequest, true));
    }
}
