<?php

namespace FedEx\Tests;

use FedEx\OpenShipService\Request;
use FedEx\OpenShipService\ComplexType;
use FedEx\ShipService\ComplexType\CreatePendingShipmentReply;
use FedEx\ShipService\ComplexType\ShipmentReply;
use FedEx\Utility\ComplexTypePopulator;

class OpenShipServiceTest extends TestCase
{
    public function testOpenShipServiceRequest()
    {
        $modifyConsolidationRequest = new ComplexType\ModifyConsolidationRequest();
        $validateOpenShipmentRequest = new ComplexType\ValidateOpenShipmentRequest();
        $retrieveOpenShipmentRequest = new ComplexType\RetrieveOpenShipmentRequest();
        $deleteOpenConsolidationRequest = new ComplexType\DeleteOpenConsolidationRequest();
        $createConsolidationRequest = new ComplexType\CreateConsolidationRequest();
        $retrievePackageInOpenShipmentRequest = new ComplexType\RetrievePackageInOpenShipmentRequest();
        $retrieveConsolidatedCommoditiesRequest = new ComplexType\RetrieveConsolidatedCommoditiesRequest();
        $modifyPackageInOpenShipmentRequest = new ComplexType\ModifyPackageInOpenShipmentRequest();
        $deleteShipmentRequest = new ComplexType\DeleteShipmentRequest();
        $createOpenShipmentRequest = new ComplexType\CreateOpenShipmentRequest();
        $deletePendingShipmentRequest = new ComplexType\DeletePendingShipmentRequest();
        $confirmOpenShipmentRequest = new ComplexType\ConfirmOpenShipmentRequest();
        $getConfirmOpenShipmentResultsRequest = new ComplexType\GetConfirmOpenShipmentResultsRequest();
        $getConfirmConsolidationRequestResults = new ComplexType\GetConfirmConsolidationResultsRequest();
        $modifyOpenShipmentRequest = new ComplexType\ModifyOpenShipmentRequest();
        $confirmConsolidationRequest = new ComplexType\ConfirmConsolidationRequest();
        $getModifyOpenShipmentResultsRequest = new ComplexType\GetModifyOpenShipmentResultsRequest();
        $deletePackagesFromOpenShipmentRequest = new ComplexType\DeletePackagesFromOpenShipmentRequest();
        $reprintShipmentDocumentsRequest = new ComplexType\ReprintShippingDocumentsRequest();
        $addPackagesToOpenShipmentRequest = new ComplexType\AddPackagesToOpenShipmentRequest();
        $getCreateOpenShipmentResultsRequest = new ComplexType\GetCreateOpenShipmentResultsRequest();
        $retrieveConsolidationRequest = new ComplexType\RetrieveConsolidationRequest();
        $deleteOpenShipmentRequest = new ComplexType\DeleteOpenShipmentRequest();

        $populator = new ComplexTypePopulator();
        $populator
            ->populate($modifyConsolidationRequest)
            ->populate($validateOpenShipmentRequest)
            ->populate($retrieveOpenShipmentRequest)
            ->populate($deleteOpenConsolidationRequest)
            ->populate($createConsolidationRequest)
            ->populate($retrievePackageInOpenShipmentRequest)
            ->populate($retrieveConsolidatedCommoditiesRequest)
            ->populate($modifyPackageInOpenShipmentRequest)
            ->populate($deleteShipmentRequest)
            ->populate($createOpenShipmentRequest)
            ->populate($deletePendingShipmentRequest)
            ->populate($confirmOpenShipmentRequest)
            ->populate($getConfirmOpenShipmentResultsRequest)
            ->populate($getConfirmConsolidationRequestResults)
            ->populate($modifyOpenShipmentRequest)
            ->populate($confirmConsolidationRequest)
            ->populate($getModifyOpenShipmentResultsRequest)
            ->populate($deletePackagesFromOpenShipmentRequest)
            ->populate($reprintShipmentDocumentsRequest)
            ->populate($addPackagesToOpenShipmentRequest)
            ->populate($getCreateOpenShipmentResultsRequest)
            ->populate($retrieveConsolidationRequest)
            ->populate($deleteOpenShipmentRequest);


        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('modifyConsolidation')->will($this->returnValue(ComplexType\ModifyConsolidationReply::class));
        $mockSoapClient->method('validateOpenShipment')->will($this->returnValue(ComplexType\ValidateOpenShipmentReply::class));
        $mockSoapClient->method('retrieveOpenShipment')->will($this->returnValue(ComplexType\RetrieveOpenShipmentReply::class));
        $mockSoapClient->method('deleteOpenConsolidation')->will($this->returnValue(ComplexType\DeleteOpenConsolidationReply::class));
        $mockSoapClient->method('createConsolidation')->will($this->returnValue(ComplexType\CreateConsolidationReply::class));
        $mockSoapClient->method('retrievePackageInOpenShipment')->will($this->returnValue(ComplexType\RetrievePackageInOpenShipmentReply::class));
        $mockSoapClient->method('retrieveConsolidatedCommodities')->will($this->returnValue(ComplexType\RetrieveConsolidatedCommoditiesReply::class));
        $mockSoapClient->method('modifyPackageInOpenShipment')->will($this->returnValue(ComplexType\ModifyPackageInOpenShipmentReply::class));
        $mockSoapClient->method('deleteShipment')->will($this->returnValue(ShipmentReply::class));
        $mockSoapClient->method('createOpenShipment')->will($this->returnValue(ComplexType\CreateOpenShipmentReply::class));
        $mockSoapClient->method('deletePendingShipment')->will($this->returnValue(ComplexType\DeletePendingShipmentReply::class));
        $mockSoapClient->method('confirmOpenShipment')->will($this->returnValue(ComplexType\ConfirmOpenShipmentReply::class));
        $mockSoapClient->method('getConfirmOpenShipmentResults')->will($this->returnValue(ComplexType\ConfirmOpenShipmentReply::class));
        $mockSoapClient->method('getConfirmConsolidationResults')->will($this->returnValue(ComplexType\GetConfirmConsolidationResultsReply::class));
        $mockSoapClient->method('modifyOpenShipment')->will($this->returnValue(ComplexType\ModifyOpenShipmentReply::class));
        $mockSoapClient->method('confirmConsolidation')->will($this->returnValue(ComplexType\ConfirmConsolidationReply::class));
        $mockSoapClient->method('createPendingShipment')->will($this->returnValue(CreatePendingShipmentReply::class));
        $mockSoapClient->method('getModifyOpenShipmentResults')->will($this->returnValue(ComplexType\ModifyOpenShipmentReply::class));
        $mockSoapClient->method('deletePackagesFromOpenShipment')->will($this->returnValue(ComplexType\DeletePackagesFromOpenShipmentReply::class));
        $mockSoapClient->method('reprintShippingDocuments')->will($this->returnValue(ComplexType\ReprintShippingDocumentsReply::class));
        $mockSoapClient->method('addPackagesToOpenShipment')->will($this->returnValue(ComplexType\AddPackagesToOpenShipmentReply::class));
        $mockSoapClient->method('getCreateOpenShipmentResults')->will($this->returnValue(ComplexType\GetCreateOpenShipmentResultsReply::class));
        $mockSoapClient->method('retrieveConsolidation')->will($this->returnValue(ComplexType\RetrieveConsolidationReply::class));
        $mockSoapClient->method('deleteOpenShipment')->will($this->returnValue(ComplexType\DeleteOpenShipmentReply::class));

        $request = new Request($mockSoapClient);


        $this->assertEquals(ComplexType\ModifyConsolidationReply::class, $request->getModifyConsolidationReply($modifyConsolidationRequest, true));
        $this->assertEquals(ComplexType\ValidateOpenShipmentReply::class, $request->getValidateOpenShipmentReply($validateOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\RetrieveOpenShipmentReply::class, $request->getRetrieveOpenShipmentReply($retrieveOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\DeleteOpenConsolidationReply::class, $request->getDeleteOpenConsolidationReply($deleteOpenConsolidationRequest, true));
        $this->assertEquals(ComplexType\CreateConsolidationReply::class, $request->getCreateConsolidationReply($createConsolidationRequest, true));
        $this->assertEquals(ComplexType\RetrievePackageInOpenShipmentReply::class, $request->getRetrievePackageInOpenShipmentReply($retrievePackageInOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\RetrieveConsolidatedCommoditiesReply::class, $request->getRetrieveConsolidatedCommoditiesReply($retrieveConsolidatedCommoditiesRequest, true));
        $this->assertEquals(ComplexType\ModifyPackageInOpenShipmentReply::class, $request->getModifyPackageInOpenShipmentReply($modifyPackageInOpenShipmentRequest, true));
        $this->assertEquals(ShipmentReply::class, $request->getDeleteShipmentReply($deleteShipmentRequest, true));
        $this->assertEquals(ComplexType\CreateOpenShipmentReply::class, $request->getCreateOpenShipmentReply($createOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\DeletePendingShipmentReply::class, $request->getDeletePendingShipmentReply($deletePendingShipmentRequest, true));
        $this->assertEquals(ComplexType\ConfirmOpenShipmentReply::class, $request->getConfirmOpenShipmentReply($confirmOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\ConfirmOpenShipmentReply::class, $request->getConfirmOpenShipmentReply($confirmOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\ModifyOpenShipmentReply::class, $request->getModifyOpenShipmentReply($modifyOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\ConfirmConsolidationReply::class, $request->getConfirmConsolidationReply($confirmConsolidationRequest, true));
        $this->assertEquals(CreatePendingShipmentReply::class, $request->getCreatePendingShipmentReply($createOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\ModifyOpenShipmentReply::class, $request->getModifyOpenShipmentReply($modifyOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\DeletePackagesFromOpenShipmentReply::class, $request->getDeletePackagesFromOpenShipmentReply($deletePackagesFromOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\ReprintShippingDocumentsReply::class, $request->getReprintShippingDocumentsReply($reprintShipmentDocumentsRequest, true));
        $this->assertEquals(ComplexType\AddPackagesToOpenShipmentReply::class, $request->getAddPackagesToOpenShipmentReply($addPackagesToOpenShipmentRequest, true));
        $this->assertEquals(ComplexType\GetCreateOpenShipmentResultsReply::class, $request->getGetCreateOpenShipmentResultsReply($getCreateOpenShipmentResultsRequest, true));
        $this->assertEquals(ComplexType\RetrieveConsolidationReply::class, $request->getRetrieveConsolidationReply($retrieveConsolidationRequest, true));
        $this->assertEquals(ComplexType\DeleteOpenShipmentReply::class, $request->getDeleteOpenShipmentReply($deleteOpenShipmentRequest, true));
    }
}
