<?php
namespace FedEx\OpenShipService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/openship';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/openship';

    protected static $wsdlFileName = 'OpenshipService_v15.wsdl';
            
    /**
     * Sends the ModifyConsolidationRequest and returns the response
     *
     * @param ComplexType\ModifyConsolidationRequest $modifyConsolidationRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ModifyConsolidationReply|stdClass
     */
    public function getModifyConsolidationReply(ComplexType\ModifyConsolidationRequest $modifyConsolidationRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->modifyConsolidation($modifyConsolidationRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $modifyConsolidationReply = new ComplexType\ModifyConsolidationReply;
        $modifyConsolidationReply->populateFromStdClass($response);
        return $modifyConsolidationReply;
    }
            
    /**
     * Sends the ValidateOpenShipmentRequest and returns the response
     *
     * @param ComplexType\ValidateOpenShipmentRequest $validateOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ValidateOpenShipmentReply|stdClass
     */
    public function getValidateOpenShipmentReply(ComplexType\ValidateOpenShipmentRequest $validateOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->validateOpenShipment($validateOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $validateOpenShipmentReply = new ComplexType\ValidateOpenShipmentReply;
        $validateOpenShipmentReply->populateFromStdClass($response);
        return $validateOpenShipmentReply;
    }
            
    /**
     * Sends the RetrieveOpenShipmentRequest and returns the response
     *
     * @param ComplexType\RetrieveOpenShipmentRequest $retrieveOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\RetrieveOpenShipmentReply|stdClass
     */
    public function getRetrieveOpenShipmentReply(ComplexType\RetrieveOpenShipmentRequest $retrieveOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->retrieveOpenShipment($retrieveOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $retrieveOpenShipmentReply = new ComplexType\RetrieveOpenShipmentReply;
        $retrieveOpenShipmentReply->populateFromStdClass($response);
        return $retrieveOpenShipmentReply;
    }
            
    /**
     * Sends the DeleteOpenConsolidationRequest and returns the response
     *
     * @param ComplexType\DeleteOpenConsolidationRequest $deleteOpenConsolidationRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\DeleteOpenConsolidationReply|stdClass
     */
    public function getDeleteOpenConsolidationReply(ComplexType\DeleteOpenConsolidationRequest $deleteOpenConsolidationRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->deleteOpenConsolidation($deleteOpenConsolidationRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $deleteOpenConsolidationReply = new ComplexType\DeleteOpenConsolidationReply;
        $deleteOpenConsolidationReply->populateFromStdClass($response);
        return $deleteOpenConsolidationReply;
    }
            
    /**
     * Sends the CreateConsolidationRequest and returns the response
     *
     * @param ComplexType\CreateConsolidationRequest $createConsolidationRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\CreateConsolidationReply|stdClass
     */
    public function getCreateConsolidationReply(ComplexType\CreateConsolidationRequest $createConsolidationRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->createConsolidation($createConsolidationRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $createConsolidationReply = new ComplexType\CreateConsolidationReply;
        $createConsolidationReply->populateFromStdClass($response);
        return $createConsolidationReply;
    }
            
    /**
     * Sends the RetrievePackageInOpenShipmentRequest and returns the response
     *
     * @param ComplexType\RetrievePackageInOpenShipmentRequest $retrievePackageInOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\RetrievePackageInOpenShipmentReply|stdClass
     */
    public function getRetrievePackageInOpenShipmentReply(ComplexType\RetrievePackageInOpenShipmentRequest $retrievePackageInOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->retrievePackageInOpenShipment($retrievePackageInOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $retrievePackageInOpenShipmentReply = new ComplexType\RetrievePackageInOpenShipmentReply;
        $retrievePackageInOpenShipmentReply->populateFromStdClass($response);
        return $retrievePackageInOpenShipmentReply;
    }
            
    /**
     * Sends the RetrieveConsolidatedCommoditiesRequest and returns the response
     *
     * @param ComplexType\RetrieveConsolidatedCommoditiesRequest $retrieveConsolidatedCommoditiesRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\RetrieveConsolidatedCommoditiesReply|stdClass
     */
    public function getRetrieveConsolidatedCommoditiesReply(ComplexType\RetrieveConsolidatedCommoditiesRequest $retrieveConsolidatedCommoditiesRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->retrieveConsolidatedCommodities($retrieveConsolidatedCommoditiesRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $retrieveConsolidatedCommoditiesReply = new ComplexType\RetrieveConsolidatedCommoditiesReply;
        $retrieveConsolidatedCommoditiesReply->populateFromStdClass($response);
        return $retrieveConsolidatedCommoditiesReply;
    }
            
    /**
     * Sends the ModifyPackageInOpenShipmentRequest and returns the response
     *
     * @param ComplexType\ModifyPackageInOpenShipmentRequest $modifyPackageInOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ModifyPackageInOpenShipmentReply|stdClass
     */
    public function getModifyPackageInOpenShipmentReply(ComplexType\ModifyPackageInOpenShipmentRequest $modifyPackageInOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->modifyPackageInOpenShipment($modifyPackageInOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $modifyPackageInOpenShipmentReply = new ComplexType\ModifyPackageInOpenShipmentReply;
        $modifyPackageInOpenShipmentReply->populateFromStdClass($response);
        return $modifyPackageInOpenShipmentReply;
    }
            
    /**
     * Sends the DeleteShipmentRequest and returns the response
     *
     * @param ComplexType\DeleteShipmentRequest $deleteShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ShipmentReply|stdClass
     */
    public function getDeleteShipmentReply(ComplexType\DeleteShipmentRequest $deleteShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->deleteShipment($deleteShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $shipmentReply = new ComplexType\ShipmentReply;
        $shipmentReply->populateFromStdClass($response);
        return $shipmentReply;
    }
            
    /**
     * Sends the CreateOpenShipmentRequest and returns the response
     *
     * @param ComplexType\CreateOpenShipmentRequest $createOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\CreateOpenShipmentReply|stdClass
     */
    public function getCreateOpenShipmentReply(ComplexType\CreateOpenShipmentRequest $createOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->createOpenShipment($createOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $createOpenShipmentReply = new ComplexType\CreateOpenShipmentReply;
        $createOpenShipmentReply->populateFromStdClass($response);
        return $createOpenShipmentReply;
    }
            
    /**
     * Sends the DeletePendingShipmentRequest and returns the response
     *
     * @param ComplexType\DeletePendingShipmentRequest $deletePendingShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\DeletePendingShipmentReply|stdClass
     */
    public function getDeletePendingShipmentReply(ComplexType\DeletePendingShipmentRequest $deletePendingShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->deletePendingShipment($deletePendingShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $deletePendingShipmentReply = new ComplexType\DeletePendingShipmentReply;
        $deletePendingShipmentReply->populateFromStdClass($response);
        return $deletePendingShipmentReply;
    }
            
    /**
     * Sends the ConfirmOpenShipmentRequest and returns the response
     *
     * @param ComplexType\ConfirmOpenShipmentRequest $confirmOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ConfirmOpenShipmentReply|stdClass
     */
    public function getConfirmOpenShipmentReply(ComplexType\ConfirmOpenShipmentRequest $confirmOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->confirmOpenShipment($confirmOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $confirmOpenShipmentReply = new ComplexType\ConfirmOpenShipmentReply;
        $confirmOpenShipmentReply->populateFromStdClass($response);
        return $confirmOpenShipmentReply;
    }
            
    /**
     * Sends the GetConfirmOpenShipmentResultsRequest and returns the response
     *
     * @param ComplexType\GetConfirmOpenShipmentResultsRequest $getConfirmOpenShipmentResultsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\GetConfirmOpenShipmentResultsReply|stdClass
     */
    public function getGetConfirmOpenShipmentResultsReply(ComplexType\GetConfirmOpenShipmentResultsRequest $getConfirmOpenShipmentResultsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getConfirmOpenShipmentResults($getConfirmOpenShipmentResultsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $getConfirmOpenShipmentResultsReply = new ComplexType\GetConfirmOpenShipmentResultsReply;
        $getConfirmOpenShipmentResultsReply->populateFromStdClass($response);
        return $getConfirmOpenShipmentResultsReply;
    }
            
    /**
     * Sends the GetConfirmConsolidationResultsRequest and returns the response
     *
     * @param ComplexType\GetConfirmConsolidationResultsRequest $getConfirmConsolidationResultsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\GetConfirmConsolidationResultsReply|stdClass
     */
    public function getGetConfirmConsolidationResultsReply(ComplexType\GetConfirmConsolidationResultsRequest $getConfirmConsolidationResultsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getConfirmConsolidationResults($getConfirmConsolidationResultsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $getConfirmConsolidationResultsReply = new ComplexType\GetConfirmConsolidationResultsReply;
        $getConfirmConsolidationResultsReply->populateFromStdClass($response);
        return $getConfirmConsolidationResultsReply;
    }
            
    /**
     * Sends the ModifyOpenShipmentRequest and returns the response
     *
     * @param ComplexType\ModifyOpenShipmentRequest $modifyOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ModifyOpenShipmentReply|stdClass
     */
    public function getModifyOpenShipmentReply(ComplexType\ModifyOpenShipmentRequest $modifyOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->modifyOpenShipment($modifyOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $modifyOpenShipmentReply = new ComplexType\ModifyOpenShipmentReply;
        $modifyOpenShipmentReply->populateFromStdClass($response);
        return $modifyOpenShipmentReply;
    }
            
    /**
     * Sends the ConfirmConsolidationRequest and returns the response
     *
     * @param ComplexType\ConfirmConsolidationRequest $confirmConsolidationRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ConfirmConsolidationReply|stdClass
     */
    public function getConfirmConsolidationReply(ComplexType\ConfirmConsolidationRequest $confirmConsolidationRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->confirmConsolidation($confirmConsolidationRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $confirmConsolidationReply = new ComplexType\ConfirmConsolidationReply;
        $confirmConsolidationReply->populateFromStdClass($response);
        return $confirmConsolidationReply;
    }
            
    /**
     * Sends the CreateOpenShipmentRequest and returns the response
     *
     * @param ComplexType\CreateOpenShipmentRequest $createOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\CreateOpenShipmentReply|stdClass
     */
    public function getCreatePendingShipmentReply(ComplexType\CreateOpenShipmentRequest $createOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->createPendingShipment($createOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $createOpenShipmentReply = new ComplexType\CreateOpenShipmentReply;
        $createOpenShipmentReply->populateFromStdClass($response);
        return $createOpenShipmentReply;
    }
            
    /**
     * Sends the GetModifyOpenShipmentResultsRequest and returns the response
     *
     * @param ComplexType\GetModifyOpenShipmentResultsRequest $getModifyOpenShipmentResultsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\GetModifyOpenShipmentResultsReply|stdClass
     */
    public function getGetModifyOpenShipmentResultsReply(ComplexType\GetModifyOpenShipmentResultsRequest $getModifyOpenShipmentResultsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getModifyOpenShipmentResults($getModifyOpenShipmentResultsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $getModifyOpenShipmentResultsReply = new ComplexType\GetModifyOpenShipmentResultsReply;
        $getModifyOpenShipmentResultsReply->populateFromStdClass($response);
        return $getModifyOpenShipmentResultsReply;
    }
            
    /**
     * Sends the DeletePackagesFromOpenShipmentRequest and returns the response
     *
     * @param ComplexType\DeletePackagesFromOpenShipmentRequest $deletePackagesFromOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\DeletePackagesFromOpenShipmentReply|stdClass
     */
    public function getDeletePackagesFromOpenShipmentReply(ComplexType\DeletePackagesFromOpenShipmentRequest $deletePackagesFromOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->deletePackagesFromOpenShipment($deletePackagesFromOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $deletePackagesFromOpenShipmentReply = new ComplexType\DeletePackagesFromOpenShipmentReply;
        $deletePackagesFromOpenShipmentReply->populateFromStdClass($response);
        return $deletePackagesFromOpenShipmentReply;
    }
            
    /**
     * Sends the ReprintShippingDocumentsRequest and returns the response
     *
     * @param ComplexType\ReprintShippingDocumentsRequest $reprintShippingDocumentsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ReprintShippingDocumentsReply|stdClass
     */
    public function getReprintShippingDocumentsReply(ComplexType\ReprintShippingDocumentsRequest $reprintShippingDocumentsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->reprintShippingDocuments($reprintShippingDocumentsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $reprintShippingDocumentsReply = new ComplexType\ReprintShippingDocumentsReply;
        $reprintShippingDocumentsReply->populateFromStdClass($response);
        return $reprintShippingDocumentsReply;
    }
            
    /**
     * Sends the AddPackagesToOpenShipmentRequest and returns the response
     *
     * @param ComplexType\AddPackagesToOpenShipmentRequest $addPackagesToOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\AddPackagesToOpenShipmentReply|stdClass
     */
    public function getAddPackagesToOpenShipmentReply(ComplexType\AddPackagesToOpenShipmentRequest $addPackagesToOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->addPackagesToOpenShipment($addPackagesToOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $addPackagesToOpenShipmentReply = new ComplexType\AddPackagesToOpenShipmentReply;
        $addPackagesToOpenShipmentReply->populateFromStdClass($response);
        return $addPackagesToOpenShipmentReply;
    }
            
    /**
     * Sends the GetCreateOpenShipmentResultsRequest and returns the response
     *
     * @param ComplexType\GetCreateOpenShipmentResultsRequest $getCreateOpenShipmentResultsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\GetCreateOpenShipmentResultsReply|stdClass
     */
    public function getGetCreateOpenShipmentResultsReply(ComplexType\GetCreateOpenShipmentResultsRequest $getCreateOpenShipmentResultsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getCreateOpenShipmentResults($getCreateOpenShipmentResultsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $getCreateOpenShipmentResultsReply = new ComplexType\GetCreateOpenShipmentResultsReply;
        $getCreateOpenShipmentResultsReply->populateFromStdClass($response);
        return $getCreateOpenShipmentResultsReply;
    }
            
    /**
     * Sends the RetrieveConsolidationRequest and returns the response
     *
     * @param ComplexType\RetrieveConsolidationRequest $retrieveConsolidationRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\RetrieveConsolidationReply|stdClass
     */
    public function getRetrieveConsolidationReply(ComplexType\RetrieveConsolidationRequest $retrieveConsolidationRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->retrieveConsolidation($retrieveConsolidationRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $retrieveConsolidationReply = new ComplexType\RetrieveConsolidationReply;
        $retrieveConsolidationReply->populateFromStdClass($response);
        return $retrieveConsolidationReply;
    }
            
    /**
     * Sends the DeleteOpenShipmentRequest and returns the response
     *
     * @param ComplexType\DeleteOpenShipmentRequest $deleteOpenShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\DeleteOpenShipmentReply|stdClass
     */
    public function getDeleteOpenShipmentReply(ComplexType\DeleteOpenShipmentRequest $deleteOpenShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->deleteOpenShipment($deleteOpenShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $deleteOpenShipmentReply = new ComplexType\DeleteOpenShipmentReply;
        $deleteOpenShipmentReply->populateFromStdClass($response);
        return $deleteOpenShipmentReply;
    }
}
