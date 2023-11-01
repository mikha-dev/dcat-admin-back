{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_BEFORE']) !!}

<div class="header border-bottom border-gray-200 header-fixed">
    <div class="container-fluid px-0">
        <div class="header-body px-3 px-xxl-5 py-3 py-lg-4">
            <div class="row align-items-center">
                <a href="javascript:void(0);" class="muze-hamburger d-block d-lg-none col-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 16 16">
                        <g data-name="icons/tabler/chevrons-left" transform="translate(0)">
                            <rect data-name="Icons/Tabler/Chevrons Left background" width="16" height="16"
                                  fill="none"/>
                            <path d="M14.468,14.531l-.107-.093-6.4-6.4a.961.961,0,0,1-.094-1.25l.094-.107,6.4-6.4a.96.96,0,0,1,1.451,1.25l-.094.108L10,7.36l5.72,5.721a.961.961,0,0,1,.094,1.25l-.094.107a.96.96,0,0,1-1.25.093Zm-7.68,0-.107-.093-6.4-6.4a.961.961,0,0,1-.093-1.25l.093-.107,6.4-6.4a.96.96,0,0,1,1.45,1.25l-.093.108L2.318,7.36l5.72,5.721a.96.96,0,0,1,.093,1.25l-.093.107a.96.96,0,0,1-1.25.093Z"
                                  transform="translate(0 1)" fill="#6C757D"/>
                        </g>
                    </svg>
                </a>
                <a href="{{ admin_url('/') }}" class="navbar-brand mx-auto d-lg-none col-auto px-0">
                    <img src="/storage/{!! config('admin.logo-image') !!}">
                    <img src="/storage/{!! config('admin.logo-dark-image') !!}" class="white-logo">
                </a>
                <div class="col d-flex align-items-center">
                    <a href="javascript:void(0);"
                       class="back-arrow bg-white circle circle-sm shadow border border-gray-200 rounded mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 16 16">
                            <g data-name="icons/tabler/chevrons-left" transform="translate(0)">
                                <rect data-name="Icons/Tabler/Chevrons Left background" width="16" height="16"
                                      fill="none"/>
                                <path d="M14.468,14.531l-.107-.093-6.4-6.4a.961.961,0,0,1-.094-1.25l.094-.107,6.4-6.4a.96.96,0,0,1,1.451,1.25l-.094.108L10,7.36l5.72,5.721a.961.961,0,0,1,.094,1.25l-.094.107a.96.96,0,0,1-1.25.093Zm-7.68,0-.107-.093-6.4-6.4a.961.961,0,0,1-.093-1.25l.093-.107,6.4-6.4a.96.96,0,0,1,1.45,1.25l-.093.108L2.318,7.36l5.72,5.721a.96.96,0,0,1,.093,1.25l-.093.107a.96.96,0,0,1-1.25.093Z"
                                      transform="translate(0 1)" fill="#6C757D"/>
                            </g>
                        </svg>
                    </a>
                    <nav class="navbar navbar-expand-lg navbar-light top-header-nav">
                        <div class="navbar-collapse">
                            <ul class="navbar-nav" id="accordionExample2">
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#sidebarDashboards2" data-bs-toggle="collapse"
                                       role="button" aria-expanded="false" aria-controls="sidebarDashboards2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 16 16">
                                            <g data-name="icons/tabler/chart" transform="translate(0)">
                                                <rect data-name="Icons/Tabler/Chart background" width="16" height="16"
                                                      fill="none"/>
                                                <path d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z"
                                                      transform="translate(0 1)" fill="#1e1e1e"/>
                                            </g>
                                        </svg> &nbsp;<span class="ms-2">Dashboards</span>
                                    </a>
                                    <div class="collapse collapse-box" id="sidebarDashboards2"
                                         data-bs-parent="#accordionExample2">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="analytics.html" class="nav-link active">Analytics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="project-management.html" class="nav-link">Project
                                                    management</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="festive.html" class="nav-link">Festive</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#sidebarPages3" data-bs-toggle="collapse"
                                       role="button" aria-expanded="false" aria-controls="sidebarPages3">
                                        <svg data-name="Icons/Tabler/Bolt" xmlns="http://www.w3.org/2000/svg" width="16"
                                             height="16" viewBox="0 0 16 16">
                                            <rect data-name="Icons/Tabler/Page background" width="16" height="16"
                                                  fill="none"/>
                                            <path d="M1.975,14A1.977,1.977,0,0,1,0,12.026V1.975A1.977,1.977,0,0,1,1.975,0h5.04a.535.535,0,0,1,.249.069l.007,0h0a.534.534,0,0,1,.109.084l3.574,3.575a.536.536,0,0,1,.163.289h0l0,.013h0l0,.013v0l0,.011v.053s0,.009,0,.014v7.9A1.977,1.977,0,0,1,9.154,14Zm-.9-12.026V12.026a.9.9,0,0,0,.9.9H9.154a.9.9,0,0,0,.9-.9V4.667H7.718a1.255,1.255,0,0,1-1.248-1.12L6.461,3.41V1.077H1.975A.9.9,0,0,0,1.077,1.975ZM7.538,3.41a.179.179,0,0,0,.122.17l.057.01H9.29L7.538,1.838Z"
                                                  transform="translate(2 1)" fill="#1e1e1e"/>
                                        </svg> &nbsp;<span class="ms-2">Pages</span>
                                    </a>
                                    <div class="collapse collapse-box" id="sidebarPages3"
                                         data-bs-parent="#accordionExample2">
                                        <ul class="nav nav-sm flex-column" id="submenu4">
                                            <li class="nav-item">
                                                <a class="nav-link collapsed" href="#AccountPage3"
                                                   data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                   aria-controls="AccountPage3">Account</a>
                                                <div class="collapse collapse-box" id="AccountPage3"
                                                     data-bs-parent="#submenu4">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="settings.html" class="nav-link">Settings</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="billing.html" class="nav-link">Billing</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="invoice.html" class="nav-link">Invoice</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="api-keys.html" class="nav-link">API keys</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link collapsed" href="#UserProfile2"
                                                   data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                   aria-controls="UserProfile2">User Profile</a>
                                                <div class="collapse collapse-box" id="UserProfile2"
                                                     data-bs-parent="#submenu4">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="user-profile-general.html"
                                                               class="nav-link">General</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="user-profile-activity.html" class="nav-link">Activity</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="user-profile-friends.html"
                                                               class="nav-link">Friends</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="user-profile-groups.html"
                                                               class="nav-link">Groups</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link collapsed" href="#Projectspage2"
                                                   data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                   aria-controls="Projectspage2">Projects</a>
                                                <div class="collapse collapse-box" id="Projectspage2"
                                                     data-bs-parent="#submenu4">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="all-projects.html" class="nav-link">All
                                                                projects</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="new-project.html" class="nav-link">New project</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="project-details.html" class="nav-link">Project
                                                                detail</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="teams.html" class="nav-link">Teams</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pricing.html" class="nav-link">Pricing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="help-center.html" class="nav-link">Help page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="empty-state.html" class="nav-link">Empty State</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#sidebarAuthentication2"
                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                       aria-controls="sidebarAuthentication2">
                                        <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16" viewBox="0 0 16 16">
                                            <rect data-name="Icons/Tabler/Plug background" width="16" height="16"
                                                  fill="none"/>
                                            <path d="M6.7,16a2.378,2.378,0,0,1-2.373-2.234l0-.145V12.541H3.244A3.241,3.241,0,0,1,0,9.47L0,9.3V4.109a.649.649,0,0,1,.561-.643L.649,3.46H1.73V.649A.649.649,0,0,1,3.021.561l.005.088V3.46H6.919V.649A.649.649,0,0,1,8.211.561l.005.088V3.46H9.3a.649.649,0,0,1,.643.561l.006.088V9.3a3.241,3.241,0,0,1-3.071,3.239l-.173,0H5.621v1.081A1.081,1.081,0,0,0,6.593,14.7l.11.005H9.3a.649.649,0,0,1,.088,1.292L9.3,16Zm0-4.757A1.951,1.951,0,0,0,8.644,9.431l0-.134V4.757H1.3V9.3A1.951,1.951,0,0,0,3.11,11.239l.133,0H6.7Z"
                                                  transform="translate(3)" fill="#1e1e1e"/>
                                        </svg> &nbsp;<span class="ms-2">Authentication</span>
                                    </a>
                                    <div class="collapse collapse-box" id="sidebarAuthentication2"
                                         data-bs-parent="#accordionExample2">
                                        <ul class="nav nav-sm flex-column" id="submenu5">
                                            <li class="nav-item">
                                                <a class="nav-link collapsed" href="#Signinpage2"
                                                   data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                   aria-controls="Signinpage2">Sign in</a>
                                                <div class="collapse collapse-box" id="Signinpage2"
                                                     data-bs-parent="#submenu5">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="signin-simple.html" class="nav-link">Simple</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="signin-cover.html" class="nav-link">Cover</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link collapsed" href="#Signuppage2"
                                                   data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                   aria-controls="Signuppage2">Sign up</a>
                                                <div class="collapse collapse-box" id="Signuppage2"
                                                     data-bs-parent="#submenu5">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="signup-simple.html" class="nav-link">Simple</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="signup-cover.html" class="nav-link">Cover</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link collapsed" href="#Resetpassword2"
                                                   data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                   aria-controls="Resetpassword2">Reset password</a>
                                                <div class="collapse collapse-box" id="Resetpassword2"
                                                     data-bs-parent="#submenu5">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="reset-password-simple.html"
                                                               class="nav-link">Simple</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="reset-password-cover.html"
                                                               class="nav-link">Cover</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link collapsed" href="#Emailverification2"
                                                   data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                   aria-controls="Emailverification2">Email verification</a>
                                                <div class="collapse collapse-box" id="Emailverification2"
                                                     data-bs-parent="#submenu5">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="verify-email-simple.html"
                                                               class="nav-link">Simple</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="verify-email-cover.html" class="nav-link">Cover</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="404-error.html" class="nav-link">Error 404</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="500-error.html" class="nav-link">Error 500</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#sidebarApps2" data-bs-toggle="collapse"
                                       role="button" aria-expanded="false" aria-controls="sidebarApps2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 16 16">
                                            <g data-name="Icons/Tabler/Paperclip" transform="translate(0 0)">
                                                <rect data-name="Icons/Tabler/apps background" width="16" height="16"
                                                      fill="none"/>
                                                <path d="M10.743,16a1.6,1.6,0,0,1-1.6-1.6V10.743a1.6,1.6,0,0,1,1.6-1.6H14.4a1.6,1.6,0,0,1,1.6,1.6V14.4A1.6,1.6,0,0,1,14.4,16Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,10.743ZM1.6,16A1.6,1.6,0,0,1,0,14.4V10.743a1.6,1.6,0,0,1,1.6-1.6H5.257a1.6,1.6,0,0,1,1.6,1.6V14.4a1.6,1.6,0,0,1-1.6,1.6Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,10.743Zm9.372-3.886a1.6,1.6,0,0,1-1.6-1.6V1.6a1.6,1.6,0,0,1,1.6-1.6H14.4A1.6,1.6,0,0,1,16,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM10.515,1.6V5.257a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,1.6ZM1.6,6.857A1.6,1.6,0,0,1,0,5.257V1.6A1.6,1.6,0,0,1,1.6,0H5.257a1.6,1.6,0,0,1,1.6,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM1.372,1.6V5.257a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,1.6Z"
                                                      transform="translate(0 0)" fill="#1e1e1e"/>
                                            </g>
                                        </svg> &nbsp;<span class="ms-2 position-relative">Apps <sup
                                                    class="status bg-warning position-absolute">&nbsp;</sup></span>
                                    </a>
                                    <div class="collapse collapse-box" id="sidebarApps2"
                                         data-bs-parent="#accordionExample2">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="file-manager.html" class="nav-link">File manager</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="chat.html" class="nav-link">Chat</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="calendar.html" class="nav-link">Calendar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../documentation/index.html" target="_blank">
                                        <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16" viewBox="0 0 16 16">
                                            <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16"
                                                  fill="none"/>
                                            <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z"
                                                  transform="translate(1)" fill="#1e1e1e"/>
                                        </svg> &nbsp;<span class="ms-2">Docs</span> <span
                                                class="docs-version">v1.0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                @if(!$configData['horizontal-menu'])
                    <div class="col-auto d-flex flex-wrap align-items-center icon-blue-hover ps-0">
                        <div class="navbar-left d-flex align-items-center">
                            {!! Dcat\Admin\Admin::navbar()->render('left') !!}
                        </div>
                    </div>
                @endif
                <div class="col-auto d-flex flex-wrap align-items-center icon-blue-hover ps-0">
                    <a href="#" class="d-lg-none muze-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14">
                            <rect id="Icons_Tabler_Search_background" data-name="Icons/Tabler/Search background"
                                  width="14" height="14" fill="none"/>
                            <path data-name="Combined Shape"
                                  d="M13.141,13.895l-.06-.052L9.1,9.859A5.569,5.569,0,1,1,9.859,9.1l3.983,3.983a.539.539,0,0,1-.7.813ZM1.077,5.564A4.487,4.487,0,1,0,5.564,1.077,4.492,4.492,0,0,0,1.077,5.564Z"
                                  fill="#1e1e1e"/>
                        </svg>
                    </a>

                    {!! Dcat\Admin\Admin::navbar()->render() !!}
                    {{--User Account Menu--}}
                    {{--                    {!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_USER_PANEL']) !!}--}}

                </div>
            </div>
        </div>
        <div class="double-header-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav" id="accordionExample3">
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#sidebarDashboards3" data-bs-toggle="collapse"
                               role="button" aria-expanded="false" aria-controls="sidebarDashboards3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <g data-name="icons/tabler/chart" transform="translate(0)">
                                        <rect data-name="Icons/Tabler/Chart background" width="16" height="16"
                                              fill="none"/>
                                        <path d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z"
                                              transform="translate(0 1)" fill="#1e1e1e"/>
                                    </g>
                                </svg> &nbsp;<span class="ms-2">Dashboards</span>
                            </a>
                            <div class="collapse collapse-box" id="sidebarDashboards3"
                                 data-bs-parent="#accordionExample3">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="analytics.html" class="nav-link active">Analytics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="project-management.html" class="nav-link">Project management</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="festive.html" class="nav-link">Festive</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#sidebarPages4" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarPages4">
                                <svg data-name="Icons/Tabler/Bolt" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/Page background" width="16" height="16" fill="none"/>
                                    <path d="M1.975,14A1.977,1.977,0,0,1,0,12.026V1.975A1.977,1.977,0,0,1,1.975,0h5.04a.535.535,0,0,1,.249.069l.007,0h0a.534.534,0,0,1,.109.084l3.574,3.575a.536.536,0,0,1,.163.289h0l0,.013h0l0,.013v0l0,.011v.053s0,.009,0,.014v7.9A1.977,1.977,0,0,1,9.154,14Zm-.9-12.026V12.026a.9.9,0,0,0,.9.9H9.154a.9.9,0,0,0,.9-.9V4.667H7.718a1.255,1.255,0,0,1-1.248-1.12L6.461,3.41V1.077H1.975A.9.9,0,0,0,1.077,1.975ZM7.538,3.41a.179.179,0,0,0,.122.17l.057.01H9.29L7.538,1.838Z"
                                          transform="translate(2 1)" fill="#1e1e1e"/>
                                </svg> &nbsp;<span class="ms-2">Pages</span>
                            </a>
                            <div class="collapse collapse-box" id="sidebarPages4" data-bs-parent="#accordionExample3">
                                <ul class="nav nav-sm flex-column" id="submenu6">
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#AccountPage4" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false" aria-controls="AccountPage4">Account</a>
                                        <div class="collapse collapse-box" id="AccountPage4" data-bs-parent="#submenu6">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="settings.html" class="nav-link">Settings</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="billing.html" class="nav-link">Billing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="invoice.html" class="nav-link">Invoice</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="api-keys.html" class="nav-link">API keys</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#UserProfile3" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false" aria-controls="UserProfile3">User
                                            Profile</a>
                                        <div class="collapse collapse-box" id="UserProfile3" data-bs-parent="#submenu6">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="user-profile-general.html" class="nav-link">General</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="user-profile-activity.html" class="nav-link">Activity</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="user-profile-friends.html" class="nav-link">Friends</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="user-profile-groups.html" class="nav-link">Groups</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#Projectspage3" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false"
                                           aria-controls="Projectspage3">Projects</a>
                                        <div class="collapse collapse-box" id="Projectspage3"
                                             data-bs-parent="#submenu6">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="all-projects.html" class="nav-link">All projects</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="new-project.html" class="nav-link">New project</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="project-details.html" class="nav-link">Project detail</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="teams.html" class="nav-link">Teams</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="help-center.html" class="nav-link">Help page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="empty-state.html" class="nav-link">Empty State</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#sidebarAuthentication3" data-bs-toggle="collapse"
                               role="button" aria-expanded="false" aria-controls="sidebarAuthentication3">
                                <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/Plug background" width="16" height="16" fill="none"/>
                                    <path d="M6.7,16a2.378,2.378,0,0,1-2.373-2.234l0-.145V12.541H3.244A3.241,3.241,0,0,1,0,9.47L0,9.3V4.109a.649.649,0,0,1,.561-.643L.649,3.46H1.73V.649A.649.649,0,0,1,3.021.561l.005.088V3.46H6.919V.649A.649.649,0,0,1,8.211.561l.005.088V3.46H9.3a.649.649,0,0,1,.643.561l.006.088V9.3a3.241,3.241,0,0,1-3.071,3.239l-.173,0H5.621v1.081A1.081,1.081,0,0,0,6.593,14.7l.11.005H9.3a.649.649,0,0,1,.088,1.292L9.3,16Zm0-4.757A1.951,1.951,0,0,0,8.644,9.431l0-.134V4.757H1.3V9.3A1.951,1.951,0,0,0,3.11,11.239l.133,0H6.7Z"
                                          transform="translate(3)" fill="#1e1e1e"/>
                                </svg> &nbsp;<span class="ms-2">Authentication</span>
                            </a>
                            <div class="collapse collapse-box" id="sidebarAuthentication3"
                                 data-bs-parent="#accordionExample3">
                                <ul class="nav nav-sm flex-column" id="submenu7">
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#Signinpage3" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false" aria-controls="Signinpage3">Sign in</a>
                                        <div class="collapse collapse-box" id="Signinpage3" data-bs-parent="#submenu7">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="signin-simple.html" class="nav-link">Simple</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="signin-cover.html" class="nav-link">Cover</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#Signuppage3" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false" aria-controls="Signuppage3">Sign up</a>
                                        <div class="collapse collapse-box" id="Signuppage3" data-bs-parent="#submenu7">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="signup-simple.html" class="nav-link">Simple</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="signup-cover.html" class="nav-link">Cover</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#Resetpassword3" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false" aria-controls="Resetpassword3">Reset
                                            password</a>
                                        <div class="collapse collapse-box" id="Resetpassword3"
                                             data-bs-parent="#submenu7">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="reset-password-simple.html" class="nav-link">Simple</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="reset-password-cover.html" class="nav-link">Cover</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#Emailverification3"
                                           data-bs-toggle="collapse" role="button" aria-expanded="false"
                                           aria-controls="Emailverification3">Email verification</a>
                                        <div class="collapse collapse-box" id="Emailverification3"
                                             data-bs-parent="#submenu5">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="verify-email-simple.html" class="nav-link">Simple</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="verify-email-cover.html" class="nav-link">Cover</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404-error.html" class="nav-link">Error 404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="500-error.html" class="nav-link">Error 500</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#sidebarApps3" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarApps3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <g data-name="Icons/Tabler/Paperclip" transform="translate(0 0)">
                                        <rect data-name="Icons/Tabler/apps background" width="16" height="16"
                                              fill="none"/>
                                        <path d="M10.743,16a1.6,1.6,0,0,1-1.6-1.6V10.743a1.6,1.6,0,0,1,1.6-1.6H14.4a1.6,1.6,0,0,1,1.6,1.6V14.4A1.6,1.6,0,0,1,14.4,16Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,10.743ZM1.6,16A1.6,1.6,0,0,1,0,14.4V10.743a1.6,1.6,0,0,1,1.6-1.6H5.257a1.6,1.6,0,0,1,1.6,1.6V14.4a1.6,1.6,0,0,1-1.6,1.6Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,10.743Zm9.372-3.886a1.6,1.6,0,0,1-1.6-1.6V1.6a1.6,1.6,0,0,1,1.6-1.6H14.4A1.6,1.6,0,0,1,16,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM10.515,1.6V5.257a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,1.6ZM1.6,6.857A1.6,1.6,0,0,1,0,5.257V1.6A1.6,1.6,0,0,1,1.6,0H5.257a1.6,1.6,0,0,1,1.6,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM1.372,1.6V5.257a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,1.6Z"
                                              transform="translate(0 0)" fill="#1e1e1e"/>
                                    </g>
                                </svg> &nbsp;<span class="ms-2 position-relative">Apps <sup
                                            class="status bg-warning position-absolute">&nbsp;</sup></span>
                            </a>
                            <div class="collapse collapse-box" id="sidebarApps3" data-bs-parent="#accordionExample3">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="file-manager.html" class="nav-link">File manager</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="chat.html" class="nav-link">Chat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="calendar.html" class="nav-link">Calendar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../documentation/index.html" target="_blank">
                                <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16"
                                          fill="none"/>
                                    <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z"
                                          transform="translate(1)" fill="#1e1e1e"/>
                                </svg> &nbsp;<span class="ms-2">Docs</span> <span class="docs-version">v1.0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_AFTER']) !!}
