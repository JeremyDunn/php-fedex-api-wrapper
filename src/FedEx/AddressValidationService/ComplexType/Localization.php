<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Governs any future language/translations used for human-readable text.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
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
     * Identifies the language to use for human-readable messages.
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
     * Identifies the locale (i.e.  country code) associated with the language.
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
