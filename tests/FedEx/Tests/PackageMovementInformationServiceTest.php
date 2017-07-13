<?php

namespace FedEx\Tests;

use FedEx\PackageMovementInformationService\Request;
use FedEx\PackageMovementInformationService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class PackageMovementInformationServiceTest extends TestCase
{
    public function testPackageMovementInformationServiceRequest()
    {
        $postalCodeInquieryRequest = new ComplexType\PostalCodeInquiryRequest();
        $serviceAvailabilityRequest = new ComplexType\ServiceAvailabilityRequest();

        $complexTypePopulator = new ComplexTypePopulator();
        $complexTypePopulator->populate($postalCodeInquieryRequest);
        $complexTypePopulator->populate($serviceAvailabilityRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('postalCodeInquiry')->will($this->returnValue(ComplexType\PostalCodeInquiryRequest::class));
        $mockSoapClient->method('serviceAvailability')->will($this->returnValue(ComplexType\ServiceAvailabilityRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\PostalCodeInquiryRequest::class, $request->getPostalCodeInquiryReply($postalCodeInquieryRequest, true));
        $this->assertEquals(ComplexType\ServiceAvailabilityRequest::class, $request->getServiceAvailabilityReply($serviceAvailabilityRequest, true));
    }
}
