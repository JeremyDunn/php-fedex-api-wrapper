<?php
namespace FedEx\DGLDService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/dgld';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/dgld';

    protected static $wsdlFileName = 'DGLD_v1.wsdl';
            
    /**
     * Sends the ListDangerousGoodsRequest and returns the response
     *
     * @param ComplexType\ListDangerousGoodsRequest $listDangerousGoodsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ListDangerousGoodsReply|stdClass
     */
    public function getListDangerousGoodsReply(ComplexType\ListDangerousGoodsRequest $listDangerousGoodsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->listDangerousGoods($listDangerousGoodsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $listDangerousGoodsReply = new ComplexType\ListDangerousGoodsReply;
        $listDangerousGoodsReply->populateFromStdClass($response);
        return $listDangerousGoodsReply;
    }
}
