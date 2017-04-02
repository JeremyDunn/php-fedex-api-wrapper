<?php

namespace FedEx\Tests;

use FedEx\TrackService\Request;
use FedEx\TrackService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class TrackServiceTest extends TestCase
{
    public function testTrackServiceRequest()
    {
        $trackNotificationRequest = new ComplexType\TrackNotificationRequest();
        $retrieveSignatureProofOfDeliveryLetterRequest = new ComplexType\SignatureProofOfDeliveryLetterRequest();
        $sendSignatureProofOfDeliveryFaxRequest = new ComplexType\SignatureProofOfDeliveryFaxRequest();
        $trackRequest = new ComplexType\TrackRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($trackNotificationRequest);
        $populator->populate($retrieveSignatureProofOfDeliveryLetterRequest);
        $populator->populate($sendSignatureProofOfDeliveryFaxRequest);
        $populator->populate($trackRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('getTrackNotification')->will($this->returnValue(ComplexType\TrackNotificationRequest::class));
        $mockSoapClient->method('retrieveSignatureProofOfDeliveryLetter')->will($this->returnValue(ComplexType\SignatureProofOfDeliveryLetterRequest::class));
        $mockSoapClient->method('sendSignatureProofOfDeliveryFax')->will($this->returnValue(ComplexType\SignatureProofOfDeliveryFaxRequest::class));
        $mockSoapClient->method('track')->will($this->returnValue(ComplexType\TrackRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\TrackNotificationRequest::class, $request->getGetTrackNotificationReply($trackNotificationRequest, true));
        $this->assertEquals(ComplexType\SignatureProofOfDeliveryLetterRequest::class, $request->getRetrieveSignatureProofOfDeliveryLetterReply($retrieveSignatureProofOfDeliveryLetterRequest, true));
        $this->assertEquals(ComplexType\SignatureProofOfDeliveryFaxRequest::class, $request->getSendSignatureProofOfDeliveryFaxReply($sendSignatureProofOfDeliveryFaxRequest, true));
        $this->assertEquals(ComplexType\TrackRequest::class, $request->getTrackReply($trackRequest, true));
    }
}
