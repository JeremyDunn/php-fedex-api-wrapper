<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RadioactivityUnitOfMeasure
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RadioactivityUnitOfMeasure
    extends AbstractSimpleType
{
    const _BQ = 'BQ';
    const _GBQ = 'GBQ';
    const _KBQ = 'KBQ';
    const _MBQ = 'MBQ';
    const _PBQ = 'PBQ';
    const _TBQ = 'TBQ';
}