<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the representation of human-readable text.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Localization
    extends AbstractComplexType
{
    protected $_name = 'Localization';

    /**
     * Two-letter code for language (e.g. EN, FR, etc.)
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
     * Two-letter code for the region (e.g. us, ca, etc..).
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