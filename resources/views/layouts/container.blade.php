<body class="{{ $configData['body_class']}} {{ $configData['sidebar_class'] }} {{ $configData['navbar_class'] === 'fixed-top' ? 'navbar-fixed-top' : '' }} " >
<svg width="1760" height="950" viewBox="0 0 1565 465" fill="none" xmlns="http://www.w3.org/2000/svg"
     class="position-absolute w-100" style="z-index: -1">
    <path opacity="0.2" d="M0.5 791.403L0.499997 740.282L256.5 695.595V745.955L0.5 791.403Z" stroke="#4ef09d"/>
    <path opacity="0.03" d="M16 707.861L273 663V714.374L16 760L16 707.861Z" fill="#02a77f"/>
    <path opacity="0.2" d="M1749.96 1113.6L1749.96 1011.31L1237.5 922.594V1023.37L1749.96 1113.6Z" stroke="#4ef09d"/>
    <path opacity="0.2" d="M346.5 1199.4L346.5 1148.28L90.5 1103.59V1153.96L346.5 1199.4Z" stroke="#4ef09d"/>
    <path opacity="0.03" d="M1391 44.8613L1134 -2.74093e-06V51.3741L1391 97L1391 44.8613Z" fill="#4ef09d"/>
    <path opacity="0.2" d="M1443.23 751.404L1443.23 666.851L1867.52 593.398V676.699L1443.23 751.404Z" stroke="#02a77f"/>
    <path opacity="0.03" d="M1208 633.211L1720.45 544V646.162L1208 736.894L1208 633.211Z" fill="#02a77f"/>
    <path opacity="0.2" d="M235.227 207.404L235.227 122.851L659.523 49.3984V132.699L235.227 207.404Z" stroke="#02a77f"/>
    <path opacity="0.03" d="M-6.5161e-06 89.211L512.447 -5.4506e-06V102.162L0 192.894L-6.5161e-06 89.211Z" fill="#02a77f"/>
    <path opacity="0.2" d="M0.500003 93.3819L0.5 43.8797L206.5 0.615917V49.3807L0.500003 93.3819Z" stroke="#4ef09d"/>
    <path opacity="0.2" d="M1164.5 129.139L1164.5 60.4214L1510.09 0.593993V68.2915L1164.5 129.139Z" stroke="#02a77f"/>
    <path opacity="0.05" d="M1296.83 85.7403L1714.44 13.0389V96.2948L1296.83 170.235L1296.83 85.7403Z" fill="#02a77f"/>
    <path opacity="0.2" d="M0.5 559.6L0.499994 457.309L512.957 368.594V469.373L0.5 559.6Z" stroke="#02a77f"/>
</svg>
<script>
    var Dcat = CreateDcat({!! Dcat\Admin\Admin::jsVariables() !!});
</script>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_BEFORE']) !!}

@include('admin::partials.sidebar')

<div class="main-content">
    @include('admin::partials.navbar')

    <div class="app-content" id="{{ $pjaxContainerId }}">
        @yield('app')
    </div>
</div>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_AFTER']) !!}

{!! Dcat\Admin\Admin::asset()->jsToHtml() !!}

<script>Dcat.boot();</script>

</body>

</html>
