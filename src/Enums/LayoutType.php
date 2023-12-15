<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum LayoutType : string implements D4TEnum
{
    use D4TEnumTrait;

    case VERTICAL = 'vertical';
    case HORIZONTAL = 'horizontal';
}
