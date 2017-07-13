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
     * Tests unconfirmed address reply
     */
    public function testUnconfirmedAddressReply()
    {
        $addressValidationRequest = new ComplexType\AddressValidationRequest();
        $complexTypePopulator = new ComplexTypePopulator();
        $complexTypePopulator->populate($addressValidationRequest);

        $expectedResponse = $this->mockResponseSerializer->get('address-validation-unconfirmed.ser');

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('addressValidation')->will($this->returnValue($expectedResponse));

        $request = new Request($mockSoapClient);
        $addressValidationReply = $request->getAddressValidationReply($addressValidationRequest);

        $this->assertInstanceOf(ComplexType\AddressValidationReply::class, $addressValidationReply);
        $this->assertCount(1, $addressValidationReply->AddressResults);
        $this->assertInstanceOf(ComplexType\AddressValidationResult::class, $addressValidationReply->AddressResults[0]);
        $this->assertEquals(0, $addressValidationReply->AddressResults[0]->ProposedAddressDetails[0]->Score);
        $this->assertEquals('UNDETERMINED', $addressValidationReply->AddressResults[0]->ProposedAddressDetails[0]->ResidentialStatus);
        $this->assertEquals('UNCONFIRMED', $addressValidationReply->AddressResults[0]->ProposedAddressDetails[0]->DeliveryPointValidation);
        $this->assertInstanceOf(ComplexType\Address::class, $addressValidationReply->AddressResults[0]->ProposedAddressDetails[0]->Address);
    }

    /**
     * Test multiple valid addresses
     */
    public function testMultipleValidAddresses()
    {
        $addressValidationRequest = new ComplexType\AddressValidationRequest();
        $complexTypePopulator = new ComplexTypePopulator();
        $complexTypePopulator->populate($addressValidationRequest);

        //valid US Address (score 100)
        $addressValidationRequest->AddressesToValidate[0] = new ComplexType\AddressToValidate();
        $addressValidationRequest->AddressesToValidate[0]->AddressId = 1;
        $addressValidationRequest->AddressesToValidate[0]->Address->StreetLines = ['100 Nickerson RD'];
        $addressValidationRequest->AddressesToValidate[0]->Address->City = 'Marlborough';
        $addressValidationRequest->AddressesToValidate[0]->Address->StateOrProvinceCode = 'MA';
        $addressValidationRequest->AddressesToValidate[0]->Address->PostalCode = '01752';
        $addressValidationRequest->AddressesToValidate[0]->Address->CountryCode = 'US';

        //valid AU address (score 97)
        $addressValidationRequest->AddressesToValidate[1] = new ComplexType\AddressToValidate();
        $addressValidationRequest->AddressesToValidate[1]->AddressId = 2;
        $addressValidationRequest->AddressesToValidate[1]->Address->StreetLines = ['167 PROSPECT HIGHWAY'];
        $addressValidationRequest->AddressesToValidate[1]->Address->City = 'New SOUTH WALES';
        $addressValidationRequest->AddressesToValidate[1]->Address->PostalCode = '2147';
        $addressValidationRequest->AddressesToValidate[1]->Address->CountryCode = 'AU';

        //valid GB Address (score 92)
        $addressValidationRequest->AddressesToValidate[2] = new ComplexType\AddressToValidate();
        $addressValidationRequest->AddressesToValidate[2]->AddressId = 3;
        $addressValidationRequest->AddressesToValidate[2]->Address->StreetLines = ['167 PROSPECT HIGHWAY'];
        $addressValidationRequest->AddressesToValidate[2]->Address->City = 'New SOUTH WALES';
        $addressValidationRequest->AddressesToValidate[2]->Address->PostalCode = '2147';
        $addressValidationRequest->AddressesToValidate[2]->Address->CountryCode = 'AU';

        $expectedResponse = $this->mockResponseSerializer->get('address-validation-multiple-valid-addresses.ser');

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('addressValidation')->will($this->returnValue($expectedResponse));

        $request = new Request($mockSoapClient);

        $addressValidationReply = $request->getAddressValidationReply($addressValidationRequest);

        $this->assertEquals(100, $addressValidationReply->AddressResults[0]->ProposedAddressDetails[0]->Score);
        $this->assertEquals(97, $addressValidationReply->AddressResults[1]->ProposedAddressDetails[0]->Score);
        $this->assertEquals(92, $addressValidationReply->AddressResults[2]->ProposedAddressDetails[0]->Score);
        $this->assertEquals(strtoupper($addressValidationRequest->AddressesToValidate[0]->Address->StreetLines[0]), $addressValidationReply->AddressResults[0]->ProposedAddressDetails[0]->Address->StreetLines);
    }
}
