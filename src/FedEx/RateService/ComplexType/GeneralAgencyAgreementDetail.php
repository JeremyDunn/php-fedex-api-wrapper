<?php
namespace FedEx\RateService\ComplexType;

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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