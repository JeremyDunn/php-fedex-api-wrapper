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

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getGetRatesReply($rateRequest);
    }
}
