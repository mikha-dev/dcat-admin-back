<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum HttpSchemaType: string implements D4TEnum
{
    use D4TEnumTrait;

    case HTTP = 'http';
    case HTTPS = 'https';
}
