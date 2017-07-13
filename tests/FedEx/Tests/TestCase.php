<?php

namespace FedEx\Tests;

use FedEx\AbstractRequest;
use FedEx\Utility\MockResponseSerializer;

class TestCase extends \PHPUnit\Framework\TestCase
{
    const FEDEX_KEY = 'key';
    const FEDEX_PASSWORD = 'password';
    const FEDEX_METER_NUMBER = 'meter number';
    const FEDEX_ACCOUNT_NUMBER = 'account number';

    /**
     * @var MockResponseSerializer
     */
    protected $mockResponseSerializer;

    public function setUp()
    {
        $this->mockResponseSerializer = new MockResponseSerializer();
    }

    /**
     * Run assertions that determine if an endpoint URL exists
     *
     * @param $url
     */
    protected function validateUrlExists($url)
    {
        //send CURL requests
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $responseHeaders = curl_exec($ch);
        curl_close($ch);
        $this->assertNotEmpty($responseHeaders);
    }

    /**
     * @return AbstractRequest[]
     */
    protected function getAllRequestObjects()
    {
        return [
            new \FedEx\AddressValidationService\Request(),
            new \FedEx\CloseService\Request(),
            new \FedEx\CourierDispatchService\Request(),
            new \FedEx\LocatorService\Request(),
            new \FedEx\PackageMovementInformationService\Request(),
            new \FedEx\PickupService\Request(),
            new \FedEx\RateService\Request(),
            new \FedEx\ReturnTagService\Request(),
            new \FedEx\ShipService\Request(),
            new \FedEx\TrackService\Request(),
            new \FedEx\UploadDocumentService\Request()
        ];
    }
}
