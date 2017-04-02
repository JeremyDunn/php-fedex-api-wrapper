<?php

namespace FedEx\Tests;

use FedEx\RateService\Request;
use FedEx\RateService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class RateServiceTest extends TestCase
{
    public function testRateServiceRequest()
    {
        $rateRequest = new ComplexType\RateRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($rateRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getRates')->will($this->returnValue(ComplexType\RateRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\RateRequest::class, $request->getGetRatesReply($rateRequest, true));
    }
}
