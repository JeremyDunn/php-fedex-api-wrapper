<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This enumeration rationalizes the former FedEx Express international "admissibility package" types (based on ANSI X.12) and the FedEx Freight packaging types. The values represented are those common to both carriers.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PhysicalPackagingType extends AbstractSimpleType
{
    const _BAG = 'BAG';
    const _BARREL = 'BARREL';
    const _BASKET = 'BASKET';
    const _BOX = 'BOX';
    const _BUCKET = 'BUCKET';
    const _BUNDLE = 'BUNDLE';
    const _CARTON = 'CARTON';
    const _CASE = 'CASE';
    const _CONTAINER = 'CONTAINER';
    const _CRATE = 'CRATE';
    const _CYLINDER = 'CYLINDER';
    const _DRUM = 'DRUM';
    const _ENVELOPE = 'ENVELOPE';
    const _HAMPER = 'HAMPER';
    const _OTHER = 'OTHER';
    const _PAIL = 'PAIL';
    const _PALLET = 'PALLET';
    const _PIECE = 'PIECE';
    const _REEL = 'REEL';
    const _ROLL = 'ROLL';
    const _SKID = 'SKID';
    const _TANK = 'TANK';
    const _TUBE = 'TUBE';
}
