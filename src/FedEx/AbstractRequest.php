<?php
namespace FedEx;

/**
 * Abstract class for Request classes
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 */
abstract class AbstractRequest
{
    /**
     * URL to production environment
     */
    const PRODUCTION_URL = null;

    /**
     * URL to testing environment
     */
    const TESTING_URL = null;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    private $soapClient;

    /**
     * Full, absolute path to WSDL file
     *
     * @var string
     */
    protected $wsdlPath;

    /**
     * WSDL file name
     *
     * @var string
     */
    protected $wsdlFileName;

    /**
     * Constructor
     *
     * @param \SoapClient|null $soapClient
     */
    public function __construct(\SoapClient $soapClient = null)
    {
        $this->wsdlPath = realpath(dirname(__FILE__) . "/_wsdl/{$this->wsdlFileName}");
        $this->soapClient = $soapClient ?: new \SoapClient($this->wsdlPath, ['trace' => true]);
    }

    /**
     * Returns the SoapClient instance from Client
     * for backwards compatibility
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }
}
