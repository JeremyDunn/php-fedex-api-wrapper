<?php

namespace FedEx\Tests;

class WebServiceUrlTest extends TestCase
{
    /**
     * Make sure Web Service URLs hardcoded into Request objects are valid
     */
    public function testWebserviceUrlsAreValid()
    {
        foreach ($this->getAllRequestObjects() as $requestObject) {
            $this->assertNotFalse(filter_var($requestObject::PRODUCTION_URL, FILTER_VALIDATE_URL));
            $this->assertNotFalse(filter_var($requestObject::TESTING_URL, FILTER_VALIDATE_URL));

//            $this->validateUrlExists($requestObject::PRODUCTION_URL);
//            $this->validateUrlExists($requestObject::TESTING_URL);
        }
    }
}
