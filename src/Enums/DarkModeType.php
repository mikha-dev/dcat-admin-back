<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum DarkModeType : string implements D4TEnum
{
    use D4TEnumTrait;

    case LIGHT = 'sun';
    case DARK = 'moon';
    case SYSTEM = 'desktop';
}
