<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the representation of human-readable text.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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
     * Two-letter code for language (e.g. EN, FR, etc.)
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
     * Two-letter code for the region (e.g. us, ca, etc..).
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
