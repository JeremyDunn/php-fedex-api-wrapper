<?php
namespace FedEx\ShipService;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Request
{
    /**
     * WSDL Path
     *
     * @var string
     */
    protected $_wsdlPath;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    protected $_soapClient;

    /**
     * Constructor
     *
     * @param string $wsdlPath
     */
    public function __construct($wsdlPath = null)
    {
        if (null != $wsdlPath) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            $this->_wsdlPath = realpath(dirname(dirname(__FILE__)) . \DIRECTORY_SEPARATOR . '_wsdl' . \DIRECTORY_SEPARATOR . 'ShipService_v10.wsdl');
        }

        $this->_soapClient = new \SoapClient($this->_wsdlPath, array('trace' => true));
    }

    /**
     * Returns the SoapClient instance
     *
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->_soapClient;
    }

    /**
     * Sends request and returns Process Shipment Reply
     *
     * @param ProcessShipmentRequest $processShipmentRequest
     * @return stdClass
     */
    public function getProcessShipmentReply(ComplexType\ProcessShipmentRequest $processShipmentRequest)
    {
        return $this->_soapClient->processShipment($processShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Delete Shipment Reply
     *
     * @param DeleteShipmentRequest $deleteShipmentRequest
     * @return stdClass
     */
    public function getDeleteShipmentReply(ComplexType\DeleteShipmentRequest $deleteShipmentRequest)
    {
        return $this->_soapClient->deleteShipment($deleteShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Validate Shipment Reply
     *
     * @param ValidateShipmentRequest $validateShipmentRequest
     * @return stdClass
     */
    public function getValidateShipmentReply(ComplexType\ValidateShipmentRequest $validateShipmentRequest)
    {
        return $this->_soapClient->validateShipment($validateShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Create Pending Shipment Reply
     *
     * @param CreatePendingShipmentRequest $createPendingShipmentRequest
     * @return stdClass
     */
    public function getCreatePendingShipmentReply(ComplexType\CreatePendingShipmentRequest $createPendingShipmentRequest)
    {
        return $this->_soapClient->createPendingShipment($createPendingShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Cancel Pending Shipment Reply
     *
     * @param CancelPendingShipmentRequest $cancelPendingShipmentRequest
     * @return stdClass
     */
    public function getCancelPendingShipmentReply(ComplexType\CancelPendingShipmentRequest $cancelPendingShipmentRequest)
    {
        return $this->_soapClient->cancelPendingShipment($cancelPendingShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Process Tag Reply
     *
     * @param ProcessTagRequest $processTagRequest
     * @return stdClass
     */
    public function getProcessTagReply(ComplexType\ProcessTagRequest $processTagRequest)
    {
        return $this->_soapClient->processTag($processTagRequest->toArray());
    }

    /**
     * Sends request and returns Delete Tag Shipment Reply
     *
     * @param DeleteTagRequest $deleteTagRequet
     * @return stdClass
     */
    public function getDeleteTagShipmentReply(ComplexType\DeleteTagRequest $deleteTagRequet)
    {
        return $this->_soapClient->deleteTag($deleteTagRequet->toArray());
    }
}
