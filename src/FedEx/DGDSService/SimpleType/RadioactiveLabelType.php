<?php
namespace FedEx\DGDSService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RadioactiveLabelType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 */
class RadioactiveLabelType extends AbstractSimpleType
{
    const _III_YELLOW = 'III_YELLOW';
    const _II_YELLOW = 'II_YELLOW';
    const _I_WHITE = 'I_WHITE';
}
