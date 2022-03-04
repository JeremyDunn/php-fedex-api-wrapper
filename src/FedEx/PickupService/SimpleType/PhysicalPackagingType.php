<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This enumeration rationalizes the former FedEx Express international "admissibility package" types (based on ANSI X.12) and the FedEx Freight packaging types. The values represented are those common to both carriers.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PhysicalPackagingType extends AbstractSimpleType
{
    const _BAG = 'BAG';
    const _BARREL = 'BARREL';
    const _BASKET = 'BASKET';
    const _BOX = 'BOX';
    const _BUCKET = 'BUCKET';
    const _BUNDLE = 'BUNDLE';
    const _CAGE = 'CAGE';
    const _CARTON = 'CARTON';
    const _CASE = 'CASE';
    const _CHEST = 'CHEST';
    const _CONTAINER = 'CONTAINER';
    const _CRATE = 'CRATE';
    const _CYLINDER = 'CYLINDER';
    const _DRUM = 'DRUM';
    const _ENVELOPE = 'ENVELOPE';
    const _HAMPER = 'HAMPER';
    const _OTHER = 'OTHER';
    const _PACKAGE = 'PACKAGE';
    const _PAIL = 'PAIL';
    const _PALLET = 'PALLET';
    const _PARCEL = 'PARCEL';
    const _PIECE = 'PIECE';
    const _REEL = 'REEL';
    const _ROLL = 'ROLL';
    const _SACK = 'SACK';
    const _SHRINK_WRAPPED = 'SHRINK_WRAPPED';
    const _SKID = 'SKID';
    const _TANK = 'TANK';
    const _TOTE_BIN = 'TOTE_BIN';
    const _TUBE = 'TUBE';
    const _UNIT = 'UNIT';
}
