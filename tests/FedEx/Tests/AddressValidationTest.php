<?php

namespace FedEx\Tests;

use FedEx\AddressValidationService\Request;
use FedEx\AddressValidationService\ComplexType;
use FedEx\RateService\ComplexType\Address;
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

    /**
     * Tests unknown address reply
     */
    public function testUnknownAddressReply()
    {
        $addressValidationRequest = new ComplexType\AddressValidationRequest();
        $complexTypePopulator = new ComplexTypePopulator();
        $complexTypePopulator->populate($addressValidationRequest);

        $expectedResponse = $this->mockResponseSerializer->get('address-validation-unknown.ser');

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('addressValidation')->will($this->returnValue($expectedResponse));

        $request = new Request($mockSoapClient);
        $addressValidationReply = $request->getAddressValidationReply($addressValidationRequest);

        $this->assertInstanceOf(ComplexType\AddressValidationReply::class, $addressValidationReply);
        $this->assertCount(1, $addressValidationReply->AddressResults);
        $this->assertInstanceOf(ComplexType\AddressValidationResult::class, $addressValidationReply->AddressResults[0]);


        $this->assertEquals('UNKNOWN', $addressValidationReply->AddressResults[0]->Classification);
        $this->assertInstanceOf(ComplexType\Address::class, $addressValidationReply->AddressResults[0]->EffectiveAddress);
    }
}
