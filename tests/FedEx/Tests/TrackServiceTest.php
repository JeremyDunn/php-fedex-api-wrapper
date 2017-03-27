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

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getGetTrackNotificationReply($trackNotificationRequest);
        $request->getRetrieveSignatureProofOfDeliveryLetterReply($retrieveSignatureProofOfDeliveryLetterRequest);
        $request->getSendSignatureProofOfDeliveryFaxReply($sendSignatureProofOfDeliveryFaxRequest);
        $request->getTrackReply($trackRequest);
    }
}