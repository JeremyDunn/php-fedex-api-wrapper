<?php

namespace FedEx\Tests;

use FedEx\ReturnTagService\Request;
use FedEx\ReturnTagService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class ReturnTagServiceTest extends TestCase
{
    public function testReturnTagServiceRequest()
    {
        $expressTagAvailabilityRequest = new ComplexType\ExpressTagAvailabilityRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($expressTagAvailabilityRequest);

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getGetExpressTagAvailabilityReply($expressTagAvailabilityRequest);
    }
}
