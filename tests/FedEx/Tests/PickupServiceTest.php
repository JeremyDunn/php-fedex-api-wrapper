<?php

namespace FedEx\Tests;

use FedEx\Pickup\Request;
use FedEx\Pickup\ComplexType;
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

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getGetPickupAvailabilityReply($pickupAvailabilityRequest);
        $request->getCancelPickupReply($cancelPickupRequest);
        $request->getCreatePickupReply($createPickupRequest);
    }
}
