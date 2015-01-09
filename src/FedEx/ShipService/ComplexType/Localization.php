<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the representation of human-readable text.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Localization
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Localization';

    /**
     * Two-letter code for language (e.g. EN, FR, etc.)
     *
     * @param string $languageCode
     * @return Localization
     */
    public function setLanguageCode($languageCode)
    {
        $this->LanguageCode = $languageCode;
        return $this;
    }
    
    /**
     * Returns Two-letter code for language (e.g. EN, FR, etc.)
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    
    /**
     * Two-letter code for the region (e.g. us, ca, etc..).
     *
     * @param string $localeCode
     * @return Localization
     */
    public function setLocaleCode($localeCode)
    {
        $this->LocaleCode = $localeCode;
        return $this;
    }
    
    /**
     * Returns Two-letter code for the region (e.g. us, ca, etc..).
     *
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->LocaleCode;
    }
    

    
}