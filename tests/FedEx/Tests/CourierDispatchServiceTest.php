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

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('cancelCourierDispatch')->will($this->returnValue(ComplexType\CancelCourierDispatchRequest::class));
        $mockSoapClient->method('createCourierDispatch')->will($this->returnValue(ComplexType\CourierDispatchRequest::class));
        $mockSoapClient->method('getPickupAvailability')->will($this->returnValue(ComplexType\PickupAvailabilityRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\CancelCourierDispatchRequest::class, $request->getCancelCourierDispatchReply($cancelCourierDispatchRequest, true));
        $this->assertEquals(ComplexType\CourierDispatchRequest::class, $request->getCreateCourierDispatchReply($courierDispatchRequest, true));
        $this->assertEquals(ComplexType\PickupAvailabilityRequest::class, $request->getGetPickupAvailabilityReply($pickupAvailabilityRequest, true));
    }
}
