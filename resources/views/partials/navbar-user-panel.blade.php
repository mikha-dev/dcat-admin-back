{{--@if($user)--}}
{{--<li class="dropdown dropdown-user nav-item">--}}
{{--    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">--}}
{{--        <span>--}}
{{--            <img class="round mr-1" src="{{ $user->getAvatar() }}" alt="avatar" height="40" width="40" />--}}
{{--        </span>--}}
{{--        <div class="user-nav d-sm-flex d-none mr-2">--}}
{{--            <span class="user-name text-bold-600">{{ $user->name }}</span>--}}
{{--            <span class="user-status"><i class="fa fa-circle text-success"></i> {{ trans('admin.online') }}</span>--}}
{{--        </div>--}}
{{--    </a>--}}
{{--    <div class="dropdown-menu dropdown-menu-right">--}}
{{--        <a href="{{ admin_url('auth/setting') }}" class="dropdown-item">--}}
{{--            <i class="feather icon-user"></i> {{ trans('admin.setting') }}--}}
{{--        </a>--}}

{{--        <div class="dropdown-divider"></div>--}}

{{--        <a class="dropdown-item" href="{{ admin_url('auth/logout') }}">--}}
{{--            <i class="feather icon-power"></i> {{ trans('admin.logout') }}--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</li>--}}


{{-- the code on top was disabled--}}


{{--<div class="dropdown profile-dropdown">--}}
{{--    <a href="#" class="avatar avatar-sm avatar-circle ms-4 ms-xxl-5" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton">--}}
{{--        <img class="round mr-1" src="{{ $user->getAvatar() }}" alt="avatar" height="40" width="40" />--}}
{{--        <span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span>--}}
{{--    </a>--}}
{{--    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">--}}
{{--        <a href="{{ admin_url('auth/setting') }}" class="dropdown-item">--}}
{{--            <i class="feather icon-user"></i> {{ trans('admin.setting') }}--}}
{{--        </a>--}}

{{--        <div class="dropdown-divider"></div>--}}

{{--        <a class="dropdown-item" href="{{ admin_url('auth/logout') }}">--}}
{{--            <i class="feather icon-power"></i> {{ trans('admin.logout') }}--}}
{{--        </a>--}}
{{--    </ul>--}}
{{--</div>--}}

{{--@endif--}}


@if($user)

<div class="dropdown profile-dropdown">
    <a href="#" class="avatar avatar-sm avatar-circle ms-4 ms-xxl-5" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton">
        <img class="avatar-img" src="{{ $user->getAvatar() }}" alt="Avatar">
        <span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
        <li>
            <a class="dropdown-item" href="{{ admin_url('auth/setting') }}"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <rect id="Icons_Tabler_User_background" data-name="Icons/Tabler/User background" width="16" height="16" fill="none"/>
                    <path d="M11.334,16H.667a.665.665,0,0,1-.661-.568L0,15.343v-1.75A4.179,4.179,0,0,1,4.029,9.44l.193,0H7.778A4.186,4.186,0,0,1,12,13.4l0,.191v1.75a.661.661,0,0,1-.576.651ZM4.222,10.749a2.869,2.869,0,0,0-2.884,2.683l-.005.162v1.094h9.334V13.594A2.857,2.857,0,0,0,8.1,10.767l-.162-.013-.164,0ZM6,8.314A4.2,4.2,0,0,1,1.778,4.157a4.223,4.223,0,0,1,8.445,0A4.2,4.2,0,0,1,6,8.314Zm0-7A2.87,2.87,0,0,0,3.111,4.157a2.889,2.889,0,0,0,5.778,0A2.87,2.87,0,0,0,6,1.313Z" transform="translate(2)" fill="#495057"/>
                </svg><span class="ms-2">{{ trans('admin.setting') }}</span></a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ admin_url('auth/logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path data-name="Combined Shape" d="M6.027,14.449a.8.8,0,0,0-1.193-.494,2.025,2.025,0,0,1-1.063.31,2.086,2.086,0,0,1-1.779-1.069,1.961,1.961,0,0,1,.051-2.03.8.8,0,0,0-.493-1.193,2.03,2.03,0,0,1,0-3.945.8.8,0,0,0,.494-1.193,1.962,1.962,0,0,1-.052-2.03,2.086,2.086,0,0,1,1.78-1.071,2.022,2.022,0,0,1,1.062.31.8.8,0,0,0,1.193-.493,2.03,2.03,0,0,1,3.945,0,.808.808,0,0,0,.472.551.788.788,0,0,0,.305.06.8.8,0,0,0,.417-.117,2.024,2.024,0,0,1,1.062-.31,2.087,2.087,0,0,1,1.78,1.07,1.963,1.963,0,0,1-.052,2.03.8.8,0,0,0,.494,1.192,2.03,2.03,0,0,1,0,3.946.8.8,0,0,0-.494,1.193,1.962,1.962,0,0,1,.052,2.03,2.086,2.086,0,0,1-1.779,1.07,2.025,2.025,0,0,1-1.063-.31.8.8,0,0,0-.722-.056.8.8,0,0,0-.471.55,2.03,2.03,0,0,1-3.945,0Zm0-1.687a2.03,2.03,0,0,1,1.2,1.4.8.8,0,0,0,1.553,0A2.029,2.029,0,0,1,11.8,12.9l.077.042a.78.78,0,0,0,.341.08.822.822,0,0,0,.7-.421.773.773,0,0,0-.02-.8l-.078-.141a2.03,2.03,0,0,1,1.333-2.889.8.8,0,0,0,0-1.552A2.031,2.031,0,0,1,12.9,4.195l.042-.076a.768.768,0,0,0-.042-.757.813.813,0,0,0-.68-.387.793.793,0,0,0-.418.122l-.141.078a2.038,2.038,0,0,1-.916.219,2.02,2.02,0,0,1-.777-.155,2.039,2.039,0,0,1-1.2-1.4l-.029-.1a.8.8,0,0,0-1.524.1A2.027,2.027,0,0,1,4.195,3.1l-.076-.041a.78.78,0,0,0-.341-.08.822.822,0,0,0-.7.422.772.772,0,0,0,.021.8l.078.141A2.029,2.029,0,0,1,1.841,7.223a.8.8,0,0,0,0,1.553A2.029,2.029,0,0,1,3.1,11.8l-.041.077a.768.768,0,0,0,.042.757.815.815,0,0,0,.68.387.791.791,0,0,0,.418-.122l.141-.078a2.027,2.027,0,0,1,1.693-.064ZM4.923,8A3.077,3.077,0,1,1,8,11.077,3.081,3.081,0,0,1,4.923,8ZM6.154,8A1.846,1.846,0,1,0,8,6.154,1.848,1.848,0,0,0,6.154,8Z" fill="#495057"/>
                </svg><span class="ms-2">{{ trans('admin.logout') }}</span></a>
        </li>
    </ul>
</div>

@endif
