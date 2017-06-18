<?php

namespace FedEx\Tests;

use FedEx\RateService\Request;
use FedEx\RateService\ComplexType\RateRequest;
use FedEx\RateService\ComplexType\RateReply;
use FedEx\Utility\ComplexTypePopulator;

class RateServiceTest extends TestCase
{
    /**
     * Test for handling a successful GetRatesReply response.
     */
    public function testSuccessfulGetRatesReply()
    {
        $rateRequest = new RateRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($rateRequest);

        $expectedResponse = $this->mockResponseSerializer->get('rate-service-rates-reply.ser');

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getRates')->will($this->returnValue($expectedResponse));

        $request = new Request($mockSoapClient);

        //get rates reply
        $complexTypeReply = $request->getGetRatesReply($rateRequest);
        $stdClassReply = $request->getGetRatesReply($rateRequest, true);

        $this->assertEquals($expectedResponse, $stdClassReply);
        $this->assertInstanceOf(RateReply::class, $complexTypeReply);
        $this->assertEquals($stdClassReply->HighestSeverity, $complexTypeReply->HighestSeverity);
        $this->assertEquals(count($complexTypeReply->RateReplyDetails), count($stdClassReply->RateReplyDetails));
    }

    /**
     * Test for handling a getRates reply with a warning/error response.
     */
    public function testNoValidServicesAvailableWarning()
    {
        $rateRequest = new RateRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($rateRequest);

        $expectedResponse = $this->mockResponseSerializer->get('rate-service-warning-no-valid-services-available.ser');

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getRates')->will($this->returnValue($expectedResponse));
        
        $request = new Request($mockSoapClient);

        //get rates reply
        $complexTypeReply = $request->getGetRatesReply($rateRequest);
        $stdClassReply = $request->getGetRatesReply($rateRequest, true);

        $this->assertEquals($expectedResponse, $stdClassReply);
        $this->assertInstanceOf(RateReply::class, $complexTypeReply);
        $this->assertEquals($stdClassReply->HighestSeverity, $complexTypeReply->HighestSeverity);

        $this->assertEquals($complexTypeReply->Notifications[0]->Severity, $stdClassReply->Notifications->Severity);
    }
}
