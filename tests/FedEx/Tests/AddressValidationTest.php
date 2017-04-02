<?php

namespace FedEx\Tests;

use FedEx\AddressValidationService\Request;
use FedEx\AddressValidationService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class AddressValidationTest extends TestCase
{
    public function testAddressValidationRequest()
    {
        $addressValidationRequest = new ComplexType\AddressValidationRequest();
        $complexTypePopulator = new ComplexTypePopulator();
        $complexTypePopulator->populate($addressValidationRequest);

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('addressValidation')->will($this->returnValue(ComplexType\AddressValidationRequest::class));

        $request = new Request($mockSoapClient);
        $this->assertEquals(ComplexType\AddressValidationRequest::class, $request->getAddressValidationReply($addressValidationRequest, true));
    }
}
