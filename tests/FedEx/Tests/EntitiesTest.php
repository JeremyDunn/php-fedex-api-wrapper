<?php

namespace FedEx\Tests;

use FedEx\RateService\ComplexType\Address;
use FedEx\RateService\ComplexType\Party;
use FedEx\RateService\ComplexType\RateRequest;
use FedEx\RateService\ComplexType\Weight;
use FedEx\RateService\SimpleType\WeightUnits;

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

}
