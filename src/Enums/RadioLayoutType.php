<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum RadioLayoutType: int implements D4TEnum {
    use D4TEnumTrait;

    case COMMON = 1;
    case BOXED = 2;
    case BUTTON = 3;

};
