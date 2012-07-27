<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class Localization
    extends AbstractComplexType
{
    protected $_name = 'Localization';

    /**
     * 
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
     * 
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