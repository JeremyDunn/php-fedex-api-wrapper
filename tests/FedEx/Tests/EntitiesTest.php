<?php

namespace FedEx\Tests;

use FedEx\RateService\ComplexType\Address;
use FedEx\RateService\ComplexType\Party;
use FedEx\RateService\ComplexType\RateRequest;
use FedEx\RateService\ComplexType\WebAuthenticationDetail;
use FedEx\RateService\ComplexType\Weight;
use FedEx\RateService\Request;
use FedEx\RateService\SimpleType\WeightUnits;
use FedEx\Utility\ComplexTypePopulator;

class EntitiesTest extends TestCase
{
    /**
     * Test that ComplexType objects convert to arrays properly
     */
    public function testComplexTypeConvertsToArray()
    {
        $expected = [
            'RateRequest' => [
                'WebAuthenticationDetail' => [
                    'UserCredential' => [
                        'Key' => 'key',
                        'Password' => 'password'
                    ]
                ],
                'ClientDetail' => [
                    'AccountNumber' => 'account number',
                    'MeterNumber' => 'meter number'
                ]
            ]
        ];

        $rateRequest = new RateRequest();
        $rateRequest->WebAuthenticationDetail->UserCredential->Key = 'key';
        $rateRequest->WebAuthenticationDetail->UserCredential->Password = 'password';
        $rateRequest->ClientDetail->AccountNumber = 'account number';
        $rateRequest->ClientDetail->MeterNumber = 'meter number';

        $this->assertEquals($expected, $rateRequest->toArray(true)); //with top-level element
        $this->assertEquals($expected['RateRequest'], $rateRequest->toArray()); //without top-level element
        $this->assertNotEquals($expected, $rateRequest->toArray()); //without top-level element
    }

    /**
     * Test that populating ComplexType classes in different ways produces the same array
     */
    public function testComplexTypePopulationMethods()
    {
        //class property method
        $address1 = new Address();
        $address1->StreetLines = ['12345 Main Street', 'Suite 110'];
        $address1->City = 'City Name';
        $address1->StateOrProvinceCode = 'IN';
        $address1->PostalCode = '12345';
        $address1->Residential = true;
        $address1->CountryCode = 'US';

        //setter method
        $address2 = new Address();
        $address2
            ->setStreetLines(['12345 Main Street', 'Suite 110'])
            ->setCity('City Name')
            ->setStateOrProvinceCode('IN')
            ->setPostalCode('12345')
            ->setResidential(true)
            ->setCountryCode('US');

        $this->assertEquals($address1->toArray(true), $address2->toArray(true));
    }

    /**
     * Test converting SimpleType instance to string
     */
    public function testSimpleTypeToString()
    {
        $weight = new Weight();
        $weight->Units = new WeightUnits(WeightUnits::_LB);

        $this->assertEquals(WeightUnits::_LB, $weight->Units);
    }

    /**
     * Tests the ComplexType::__get() magic method functionality
     */
    public function testComplexTypeGetMagicMethodReturnsInitializedObject()
    {
        $rateRequest = new RateRequest();

        //__get() method should return a new instance of expected object if not already set
        $this->assertInstanceOf(WebAuthenticationDetail::class, $rateRequest->WebAuthenticationDetail);

        //when a ComplexType property is set, the same instance of that property should be returned
        $webAuthenticationDetail = new WebAuthenticationDetail();
        $this->assertNotSame($webAuthenticationDetail, $rateRequest->WebAuthenticationDetail);
        $rateRequest->WebAuthenticationDetail = $webAuthenticationDetail;
        $this->assertSame($webAuthenticationDetail, $rateRequest->WebAuthenticationDetail);

        //__get() method should return null if class property isn't defined
        $this->assertNull($rateRequest->PropertyThatDoesNotExist);
    }

    /**
     * Tests __isset magic method behavior on AbstractComplexType
     */
    public function testIssetMagicMethodOnAbstractComplexType()
    {
        $rateRequest = new RateRequest();


        $populator = new ComplexTypePopulator();
        $populator->populate($rateRequest);

        $expectedResponse = $this->mockResponseSerializer->get('rate-service-rates-reply.ser');

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getRates')->will($this->returnValue($expectedResponse));

        $request = new Request($mockSoapClient);

        //get rates reply
        $rateReply = $request->getGetRatesReply($rateRequest);

        $this->assertGreaterThan(0, count($rateReply->RateReplyDetails));
        $this->assertTrue(isset($rateReply->RateReplyDetails));
        $this->assertFalse(empty($rateReply->RateReplyDetails));
    }
}
