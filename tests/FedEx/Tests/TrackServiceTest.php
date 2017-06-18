<?php

namespace FedEx\Tests;

use FedEx\TrackService\Request;
use FedEx\TrackService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class TrackServiceTest extends TestCase
{
    public function testTrackServiceRequest()
    {
        $sendNotificationsRequest = new ComplexType\SendNotificationsRequest();
        $retrieveSignatureProofOfDeliveryLetterRequest = new ComplexType\SignatureProofOfDeliveryLetterRequest();
        $sendSignatureProofOfDeliveryFaxRequest = new ComplexType\SignatureProofOfDeliveryFaxRequest();
        $trackRequest = new ComplexType\TrackRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($sendNotificationsRequest);
        $populator->populate($retrieveSignatureProofOfDeliveryLetterRequest);
        $populator->populate($sendSignatureProofOfDeliveryFaxRequest);
        $populator->populate($trackRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('sendNotifications')->will($this->returnValue(ComplexType\SendNotificationsRequest::class));
        $mockSoapClient->method('retrieveSignatureProofOfDeliveryLetter')->will($this->returnValue(ComplexType\SignatureProofOfDeliveryLetterRequest::class));
        $mockSoapClient->method('sendSignatureProofOfDeliveryFax')->will($this->returnValue(ComplexType\SignatureProofOfDeliveryFaxRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\SendNotificationsRequest::class, $request->getSendNotificationsReply($sendNotificationsRequest));
        $this->assertEquals(ComplexType\SignatureProofOfDeliveryLetterRequest::class, $request->getRetrieveSignatureProofOfDeliveryLetterReply($retrieveSignatureProofOfDeliveryLetterRequest));
        $this->assertEquals(ComplexType\SignatureProofOfDeliveryFaxRequest::class, $request->getSendSignatureProofOfDeliveryFaxReply($sendSignatureProofOfDeliveryFaxRequest));
        $request->getTrackReply($trackRequest);
    }
}