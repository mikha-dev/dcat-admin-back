<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum RouteAuth : string implements D4TEnum
{
    use D4TEnumTrait;

    case HOME = '/';
    case LOGIN = 'auth.login';
    case LOGOUT = 'auth.logout';
    case IMPERSONATE = 'auth.impersonate';
    case DEIMPERSONATE = 'auth.deimpersonate';
    case FORGOT_PASSWORD = 'auth.forgot_password';
    case REGISTER = 'auth.register';
    case DASH_SETTINGS = 'dash.settings';

    case PROFILE = 'auth.profile';
    case SECURITY = 'auth.security';
}
