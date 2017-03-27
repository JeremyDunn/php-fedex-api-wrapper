<?php

namespace FedEx\Tests;

use FedEx\ShipService\Request;
use FedEx\ShipService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class ShipServiceTest extends TestCase
{
    public function testShipServiceRequest()
    {
        $createPendingShipmentRequest = new ComplexType\CreatePendingShipmentRequest();
        $processTagRequest = new ComplexType\ProcessTagRequest();
        $processShipmentRequest = new ComplexType\ProcessShipmentRequest();
        $cancelPendingShipmentRequest = new ComplexType\CancelPendingShipmentRequest();
        $deleteTagRequest = new ComplexType\DeleteTagRequest();
        $deleteShipmentRequest = new ComplexType\DeleteShipmentRequest();
        $validationShipmentRequest = new ComplexType\ValidateShipmentRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($createPendingShipmentRequest);
        $populator->populate($processTagRequest);
        $populator->populate($cancelPendingShipmentRequest);
        $populator->populate($deleteTagRequest);
        $populator->populate($deleteShipmentRequest);
        $populator->populate($validationShipmentRequest);

        //for now use a mock soap client that doesn't expect or return anything
        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $request = new Request($mockSoapClient);
        $request->getCreatePendingShipmentReply($createPendingShipmentRequest);
        $request->getProcessTagReply($processTagRequest);
        $request->getProcessShipmentReply($processShipmentRequest);
        $request->getCancelPendingShipmentReply($cancelPendingShipmentRequest);
        $request->getDeleteTagReply($deleteTagRequest);
        $request->getDeleteShipmentReply($deleteShipmentRequest);
        $request->getValidateShipmentReply($validationShipmentRequest);

    }
}
