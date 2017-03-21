<?php

namespace FedEx\Tests;

use FedEx\AddressValidationService\Request;

class AddressValidationServiceTest extends TestCase
{

    public function testWebserviceUrlsAreValid()
    {
        $this->assertNotFalse(filter_var(Request::PRODUCTION_URL, FILTER_VALIDATE_URL));
        $this->assertNotFalse(filter_var(Request::TESTING_URL, FILTER_VALIDATE_URL));

        $this->validateUrl(Request::PRODUCTION_URL);
        $this->validateUrl(Request::TESTING_URL);
    }
}
