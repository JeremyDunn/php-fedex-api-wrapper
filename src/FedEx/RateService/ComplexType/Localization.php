<?php
namespace FedEx\RateService\ComplexType;

/**
 * Identifies the representation of human-readable text.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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