<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Governs any future language/translations used for human-readable text.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
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
     * Identifies the language to use for human-readable messages.
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
     * Returns Identifies the language to use for human-readable messages.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    
    /**
     * Identifies the locale (i.e. country code) associated with the language.
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
     * Returns Identifies the locale (i.e. country code) associated with the language.
     *
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->LocaleCode;
    }
    

    
}