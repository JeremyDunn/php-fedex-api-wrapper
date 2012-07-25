<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class GeneralAgencyAgreementDetail
    extends AbstractComplexType
{
    protected $_name = 'GeneralAgencyAgreementDetail';

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return GeneralAgencyAgreementDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    

    
}