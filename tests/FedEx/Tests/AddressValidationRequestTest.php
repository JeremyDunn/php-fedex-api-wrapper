<?php

namespace FedEx\Tests;

use FedEx\AddressValidationService\Request;
use FedEx\AddressValidationService\ComplexType;
use FedEx\AddressValidationService\SimpleType;
use FedEx\Utility\ComplexTypePopulator;

class AddressValidationRequestTest extends TestCase
{
    public function testAddressValidationRequest()
    {
        $addressValidationRequest = new ComplexType\AddressValidationRequest();
        $complexTypePopulator = new ComplexTypePopulator();
        $complexTypePopulator->populate($addressValidationRequest);

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $addressValidation = new Request($mockSoapClient);
        $result = $addressValidation->getAddressValidationReply($addressValidationRequest);
    }
}
