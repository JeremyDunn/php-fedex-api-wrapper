<?php

namespace FedEx\Tests;

use FedEx\RateService\Request;
use FedEx\RateService\ComplexType\RateRequest;
use FedEx\RateService\ComplexType\RateReply;
use FedEx\Utility\ComplexTypePopulator;

class AuthenticationTest extends TestCase
{
    /**
     * Test for handling an authentication error.
     */
    public function testAuthenticationFailed()
    {
        $rateRequest = new RateRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($rateRequest);

        $expectedResponse = $this->mockResponseSerializer->get('error-authentication-failed.ser');

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getRates')->will($this->returnValue($expectedResponse));

        $request = new Request($mockSoapClient);

        $ratesReply = $request->getGetRatesReply($rateRequest);

        $this->assertInstanceOf(RateReply::class, $ratesReply);
        $this->assertEquals('ERROR', $ratesReply->Notifications[0]->Severity);
        $this->assertEquals(1000, $ratesReply->Notifications[0]->Code);
    }
}
