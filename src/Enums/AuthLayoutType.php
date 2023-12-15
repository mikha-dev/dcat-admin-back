<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum AuthLayoutType : string implements D4TEnum
{
    use D4TEnumTrait;

    case BASIC = 'basic';
    case COVER = 'cover';
}
