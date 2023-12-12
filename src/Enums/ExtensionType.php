<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum ExtensionType : string implements D4TEnum
{
    use D4TEnumTrait;

    case UI = 'ui';
    case THEME = 'theme';
    case ADDON = 'addon';
}
