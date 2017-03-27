<?php

namespace FedEx\Tests;

use FedEx\CourierDispatchService\Request;
use FedEx\CourierDispatchService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class CourierDispatchServiceTest extends TestCase
{
    public function testCourierDispatchServiceRequest()
    {
        $cancelCourierDispatchRequest = new ComplexType\CancelCourierDispatchRequest();
        $courierDispatchRequest = new ComplexType\CourierDispatchRequest();
        $pickupAvailabilityRequest = new ComplexType\PickupAvailabilityRequest();

        $complextTypePopulator = new ComplexTypePopulator();
        $complextTypePopulator->populate($cancelCourierDispatchRequest);
        $complextTypePopulator->populate($courierDispatchRequest);
        $complextTypePopulator->populate($pickupAvailabilityRequest);

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getCancelCourierDispatchReply($cancelCourierDispatchRequest);
        $request->getCreateCourierDispatchReply($courierDispatchRequest);
        $request->getGetPickupAvailabilityReply($pickupAvailabilityRequest);
    }
}