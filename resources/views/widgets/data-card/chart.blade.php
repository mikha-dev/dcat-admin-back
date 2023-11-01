<div {!! $attributes !!}>
    <div class="dropdown btn-group {!! $options['show_tool_shadow'] ? '' : 'no-shadow' !!} float-end">
        @foreach($options['tools'] as $tool)
            {!! $tool !!}
        @endforeach
    </div>

    <h4 class="header-title m-t-0 m-b-25">{!! $options['title'] !!}</h4>

    <div>
        <div>
            <div class="chart-container float-end">{!! $options['chart'] !!}</div>

            <h2 class="main-content m-b-10 float-start m-t-0" >
                {!! $options['content']['left'] !!}&nbsp;
            </h2>

            <div class="clearfix" style="height:45px"></div>

            <p class="text-muted">
                {!! $options['description'] !!}&nbsp;
            </p>
        </div>

        @if($options['progress'])
            <div class="progress progress-sm m-b-0">
                <div data-width="{!! $options['progress']['percent'] !!}%" class="progress-bar progress-bar-{!! $options['progress']['style'] !!}" >
                    <span class="sr-only"></span>
                </div>
            </div>
        @endif

    </div>
</div>