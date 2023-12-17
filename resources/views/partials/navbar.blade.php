
{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_BEFORE']) !!}

<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top bg-primary navbar-light navbar-shadow " style="top: 0;">

    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav">
                    <li class="nav-item mr-auto">
                        <a class="nav-link menu-toggle" data-widget="pushmenu" style="cursor: pointer;">
                            <i class="fa fa-bars font-md-2"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-collapse d-flex justify-content-between">

                <div class="navbar-left d-flex align-items-center">
                   {!! Dcat\Admin\Admin::navbar()->renderFree() !!}
                </div>
                <div class="navbar-right d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        {!! Dcat\Admin\Admin::navbar()->renderNavs() !!}
                        {{--User Account Menu--}}
                        {!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_BEFORE_USER_PANEL']) !!}
                        <!-- @include('admin::widgets.user-nav', ['user' => \Dcat\Admin\Admin::user()]) -->
                        {!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_AFTER_USER_PANEL']) !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_AFTER']) !!}