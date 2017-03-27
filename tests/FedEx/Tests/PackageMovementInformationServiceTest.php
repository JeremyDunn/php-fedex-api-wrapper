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

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getPostalCodeInquiryReply($postalCodeInquieryRequest);
        $request->getServiceAvailabilityReply($serviceAvailabilityRequest);
    }
}