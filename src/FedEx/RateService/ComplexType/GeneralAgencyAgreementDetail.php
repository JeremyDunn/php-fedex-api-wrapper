<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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