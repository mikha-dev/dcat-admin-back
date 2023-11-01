<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>@if(! empty($header)){{ $header }} | @endif {{ Dcat\Admin\Admin::title() }}</title>

    @if(! config('admin.disable_no_referrer_meta'))
        <meta name="referrer" content="no-referrer"/>
    @endif

    @if(! empty($favicon = Dcat\Admin\Admin::favicon()))
        {!! $favicon !!}
    @endif

    {!! admin_section(Dcat\Admin\Admin::SECTION['HEAD']) !!}

    {!! Dcat\Admin\Admin::asset()->headerJsToHtml() !!}

    {!! Dcat\Admin\Admin::asset()->cssToHtml() !!}
</head>

<body class="dcat-admin-body full-page {{ $configData['body_class'] }}">
<svg width="1760" height="850" viewBox="0 0 1565 465" fill="none" xmlns="http://www.w3.org/2000/svg"
     class="position-absolute w-100" style="z-index: -1">
    <path d="M990.5 463.935L990.5 413.853L1237.5 370.063V419.399L990.5 463.935Z" stroke="white" stroke-opacity="0.2"/>
    <path d="M559 179.178L1565 0V205.19L559 387.422L559 179.178Z" fill="url(#paint0_linear_1437_18675)"/>
    <path d="M0.500003 453.268L0.5 403.186L247.5 359.396V408.732L0.500003 453.268Z" stroke="white" stroke-opacity="0.2"/>
    <defs>
        <linearGradient id="paint0_linear_1437_18675" x1="1565" y1="95.8502" x2="720.927" y2="-191.482" gradientUnits="userSpaceOnUse">
            <stop stop-color="#02a77f" stop-opacity="0.05"/>
            <stop offset="1" stop-color="#02a77f" stop-opacity="0.15"/>
        </linearGradient>
    </defs>
    <path opacity="0.2" d="M424.796 443.596L424.796 528.149L0.499817 601.602V518.301L424.796 443.596Z" stroke="#02a77f"/>
    <path opacity="0.03" d="M660.022 561.789L147.576 651V548.838L660.022 458.106L660.022 561.789Z" fill="#02a77f"/>
    <path opacity="0.2" d="M1619.52 424.597L1619.52 475.718L1363.52 520.405V470.045L1619.52 424.597Z" stroke="#02a77f"/>
    <path opacity="0.2" d="M1713.52 390.597L1713.52 441.718L1457.52 486.405V436.045L1713.52 390.597Z" stroke="#02a77f"/>
    <path opacity="0.03" d="M299 44.8613L556 -2.74093e-06V51.3741L299 97L299 44.8613Z" fill="#02a77f"/>
    <path opacity="0.2" d="M1210.5 966.959L1210.5 898.338L1555.81 838.594V906.196L1210.5 966.959Z" stroke="#4ef09d"/>
    <path opacity="0.05" d="M1342.73 923.622L1760 851.021V934.162L1342.73 1008L1342.73 923.622Z" fill="#4ef09d"/>
    <path d="M203 203L1654.5 0V851.5L203 1050V203Z" fill="4ef09d"/>
    <path d="M1454.08 103.001L1752.58 48.5604L1750.83 119.337L1452.3 174.831L1454.08 103.001Z" fill="#4ef09d"/>
    <path opacity="0.5" d="M815.489 441.835L819.235 290.789L1451.28 175.745L1447.59 324.565L815.489 441.835Z" stroke="#4ef09d"/>
    <path opacity="0.5" d="M104.427 901.641L427.176 850.579L423.626 926.233L100.824 978.421L104.427 901.641Z" fill="#4ef09d"/>
    <defs>
        <linearGradient id="paint0_linear_1428_16656" x1="203" y1="718.801" x2="1667.79" y2="510.396" gradientUnits="userSpaceOnUse">
            <stop stop-color="#02a77f"/>
            <stop offset="1" stop-color="#02a77f"/>
        </linearGradient>
    </defs>
</svg>
<script>
    var Dcat = CreateDcat({!! Dcat\Admin\Admin::jsVariables() !!});
</script>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_BEFORE']) !!}

<div class="app-content content">
    <div class="wrapper" id="{{ $pjaxContainerId }}">
        @yield('app')
    </div>
</div>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_AFTER']) !!}

{!! Dcat\Admin\Admin::asset()->jsToHtml() !!}

<script>Dcat.boot();</script>

</body>
</html>
