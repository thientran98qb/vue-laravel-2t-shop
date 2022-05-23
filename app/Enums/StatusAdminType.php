<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static PENDING()
 * @method static static APPROVED()
 */
final class StatusAdminType extends Enum implements LocalizedEnum
{
    public const PENDING = 'pending';
    public const APPROVED = 'approved';
}
