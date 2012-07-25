<?php
namespace FedEx\RateService\ComplexType;

/**
 * Details specific to an Express freight shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ExpressFreightDetail
    extends AbstractComplexType
{
    protected $_name = 'ExpressFreightDetail';

    /**
     * Indicates whether or nor a packing list is enclosed.
     *
     * @param boolean $PackingListEnclosed
     * return ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->PackingListEnclosed = $packingListEnclosed;
        return $this;
    }
    
    /**
     * 
                Total shipment pieces.
                ie. 3 boxes and 3 pallets of 100 pieces each = Shippers Load and Count of 303.
                Applicable to International Priority Freight and International Economy Freight.
                Values must be in the range of 1 - 99999
              
     *
     * @param positiveInteger $ShippersLoadAndCount
     * return ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount)
    {
        $this->ShippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
    
    /**
     * Required for International Freight shipping. Values must be 8- 12 characters in length.
     *
     * @param string $BookingConfirmationNumber
     * return ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param boolean $ReferenceLabelRequested
     * return ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested)
    {
        $this->ReferenceLabelRequested = $referenceLabelRequested;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param ExpressFreightDetailContact $BeforeDeliveryContact
     * return ExpressFreightDetail
     */
    public function setBeforeDeliveryContact(ExpressFreightDetailContact $beforeDeliveryContact)
    {
        $this->BeforeDeliveryContact = $beforeDeliveryContact;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param ExpressFreightDetailContact $UndeliverableContact
     * return ExpressFreightDetail
     */
    public function setUndeliverableContact(ExpressFreightDetailContact $undeliverableContact)
    {
        $this->UndeliverableContact = $undeliverableContact;
        return $this;
    }
    

    
}