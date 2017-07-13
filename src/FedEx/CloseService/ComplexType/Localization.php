<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Localization
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property string $LanguageCode
 * @property string $LocaleCode

 */
class Localization extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Localization';

    /**
     * Set LanguageCode
     *
     * @param string $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->values['LanguageCode'] = $languageCode;
        return $this;
    }

    /**
     * Set LocaleCode
     *
     * @param string $localeCode
     * @return $this
     */
    public function setLocaleCode($localeCode)
    {
        $this->values['LocaleCode'] = $localeCode;
        return $this;
    }
}
