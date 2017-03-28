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
    protected static $wsdlPath;

    /**
     * WSDL file name
     *
     * @var string
     */
    protected static $wsdlFileName;

    /**
     * Constructor
     *
     * @param \SoapClient|null $soapClient
     */
    public function __construct(\SoapClient $soapClient = null)
    {
        $this->soapClient = $soapClient ?: new \SoapClient(static::getWsdlPath(), ['trace' => true]);
    }

    /**
     * Returns absolute path to .wsdl file
     *
     * @return string|bool
     */
    public static function getWsdlPath()
    {
        return realpath(__DIR__ . '/../FedEx/_wsdl/' . static::$wsdlFileName);
    }

    /**
     * Returns the SoapClient instance
     * for backwards compatibility
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }
}
