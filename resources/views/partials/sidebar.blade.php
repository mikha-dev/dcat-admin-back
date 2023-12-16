<div class="main-menu">
    <div class="main-menu-content">
        <aside class="main-sidebar shadow sidebar-primary">

            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto">
                        <a href="{{ admin_url('/') }}" class="navbar-brand waves-effect waves-light">
                            <span class="logo-mini"><img src="/storage/{!! config('admin.logo-mini') !!}"></span>
                            <span class="logo-lg">
                                <img src="/storage/{!! config('admin.logo-image') !!}">
                                <span>{!! config('admin.name') !!}</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="p-0 sidebar pb-3">
                <ul class="nav nav-pills nav-sidebar" style="padding-top: 10px">
                    {!! admin_section(Dcat\Admin\Admin::SECTION['LEFT_SIDEBAR_MENU_TOP']) !!}

                    {!! admin_section(Dcat\Admin\Admin::SECTION['LEFT_SIDEBAR_MENU']) !!}

                    {!! admin_section(Dcat\Admin\Admin::SECTION['LEFT_SIDEBAR_MENU_BOTTOM']) !!}
                </ul>
            </div>
        </aside>
    </div>
</div>