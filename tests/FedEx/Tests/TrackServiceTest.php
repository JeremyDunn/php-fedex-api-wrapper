<?php

namespace FedEx\Tests;

use FedEx\TrackService\Request;
use FedEx\TrackService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class TrackServiceTest extends TestCase
{
    public function testTrackServiceRequest()
    {
        $trackRequest = new ComplexType\TrackRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($trackRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('track')->will($this->returnValue(ComplexType\TrackRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\TrackRequest::class, $request->getTrackReply($trackRequest, true));
    }
}
