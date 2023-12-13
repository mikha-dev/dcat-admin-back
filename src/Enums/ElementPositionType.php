<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum ElementPositionType: string implements D4TEnum
{
    use D4TEnumTrait;

    case START = 'start';
    case END = 'end';
}
