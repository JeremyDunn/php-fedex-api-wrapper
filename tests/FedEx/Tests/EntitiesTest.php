<?php

namespace FedEx\Tests;

use FedEx\RateService\ComplexType\RateRequest;

class EntitiesTest extends TestCase
{

    /**
     * Testing this sutff
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

}
