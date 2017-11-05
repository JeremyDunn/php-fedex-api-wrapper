<?php

namespace FedEx\Tests;

use FedEx\ShipService\Request;
use FedEx\ShipService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class ShipServiceTest extends TestCase
{
    public function testShipServiceRequest()
    {
        $processTagRequest = new ComplexType\ProcessTagRequest();
        $processShipmentRequest = new ComplexType\ProcessShipmentRequest();
        $deleteTagRequest = new ComplexType\DeleteTagRequest();
        $deleteShipmentRequest = new ComplexType\DeleteShipmentRequest();
        $validationShipmentRequest = new ComplexType\ValidateShipmentRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($processTagRequest);
        $populator->populate($deleteTagRequest);
        $populator->populate($deleteShipmentRequest);
        $populator->populate($validationShipmentRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('processTag')->will($this->returnValue(ComplexType\ProcessTagRequest::class));
        $mockSoapClient->method('processShipment')->will($this->returnValue(ComplexType\ProcessShipmentRequest::class));
        $mockSoapClient->method('deleteTag')->will($this->returnValue(ComplexType\DeleteTagRequest::class));
        $mockSoapClient->method('deleteShipment')->will($this->returnValue(ComplexType\DeleteShipmentRequest::class));
        $mockSoapClient->method('validateShipment')->will($this->returnValue(ComplexType\ValidateShipmentRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\ProcessTagRequest::class, $request->getProcessTagReply($processTagRequest, true));
        $this->assertEquals(ComplexType\ProcessShipmentRequest::class, $request->getProcessShipmentReply($processShipmentRequest, true));
        $this->assertEquals(ComplexType\DeleteTagRequest::class, $request->getDeleteTagReply($deleteTagRequest, true));
        $this->assertEquals(ComplexType\DeleteShipmentRequest::class, $request->getDeleteShipmentReply($deleteShipmentRequest, true));
        $this->assertEquals(ComplexType\ValidateShipmentRequest::class, $request->getValidateShipmentReply($validationShipmentRequest, true));
    }
}
