<?php
namespace FedEx\ShipService\ComplexType;

/**
 * The tracking number information and the data to form the Astra barcode for the label.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RoutingAstraDetail
    extends AbstractComplexType
{
    protected $_name = 'RoutingAstraDetail';

    /**
     * The tracking number information for the shipment.
     *
     * @param TrackingId $TrackingId
     * return RoutingAstraDetail
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * ?
     *
     * @param StringBarcode $Barcode
     * return RoutingAstraDetail
     */
    public function setBarcode(StringBarcode $barcode)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    
    /**
     * The textual description of the special service applied to the package.
     *
     * @param string $AstraHandlingText
     * return RoutingAstraDetail
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    
    /**
     * ?
     *
     * @param array[AstraLabelElement] $AstraLabelElements
     * return RoutingAstraDetail
     */
    public function setAstraLabelElements(array $astraLabelElements)
    {
        $this->AstraLabelElements = $astraLabelElements;
        return $this;
    }
    

    
}