<?php

namespace FedEx\Tests;

use FedEx\PickupService\Request;
use FedEx\PickupService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class PickupServiceTest extends TestCase
{
    public function testPickupServiceRequestTest()
    {
        $pickupAvailabilityRequest = new ComplexType\PickupAvailabilityRequest();
        $cancelPickupRequest = new ComplexType\CancelPickupRequest();
        $createPickupRequest = new ComplexType\CreatePickupRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($pickupAvailabilityRequest);
        $populator->populate($cancelPickupRequest);
        $populator->populate($createPickupRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getPickupAvailability')->will($this->returnValue(ComplexType\PickupAvailabilityRequest::class));
        $mockSoapClient->method('cancelPickup')->will($this->returnValue(ComplexType\CancelPickupRequest::class));
        $mockSoapClient->method('createPickup')->will($this->returnValue(ComplexType\CreatePickupRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\PickupAvailabilityRequest::class, $request->getGetPickupAvailabilityReply($pickupAvailabilityRequest, true));
        $this->assertEquals(ComplexType\CancelPickupRequest::class, $request->getCancelPickupReply($cancelPickupRequest, true));
        $this->assertEquals(ComplexType\CreatePickupRequest::class, $request->getCreatePickupReply($createPickupRequest, true));
    }
}
