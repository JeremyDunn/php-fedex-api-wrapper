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
        $request = new Request($mockSoapClient);
        $request->getAddressValidationReply($addressValidationRequest);
    }
}
