<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Localization
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
     * Set LanguageCode
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
     * Returns Set LanguageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    
    /**
     * Set LocaleCode
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
     * Returns Set LocaleCode
     *
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->LocaleCode;
    }
    

    
}