<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Governs any future language/translations used for human-readable text.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class Localization
    extends AbstractComplexType
{
    protected $_name = 'Localization';

    /**
     * Identifies the language to use for human-readable messages.
     *
     * @param string $LanguageCode
     * return Localization
     */
    public function setLanguageCode($languageCode)
    {
        $this->LanguageCode = $languageCode;
        return $this;
    }
    
    /**
     * Identifies the locale (i.e.  country code) associated with the language.
     *
     * @param string $LocaleCode
     * return Localization
     */
    public function setLocaleCode($localeCode)
    {
        $this->LocaleCode = $localeCode;
        return $this;
    }
    

    
}