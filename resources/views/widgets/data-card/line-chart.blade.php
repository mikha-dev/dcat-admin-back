<div {!! $attributes !!}>
    <div class="dropdown btn-group {!! $options['show_tool_shadow'] ? '' : 'no-shadow' !!} float-end">
        @foreach($options['tools'] as $tool)
            {!! $tool !!}
        @endforeach
    </div>

    <h4 class="header-title m-t-0 m-b-25">{!! $options['title'] !!}</h4>

    <div>
        <div>
            <div class="text-muted float-end">{!! $options['description'] !!} </div>

            <h2 class="main-content m-b-10" >
                {!! $options['content']['left'] !!}&nbsp;
            </h2>
        </div>

        @if($options['chart'])
            <div style="margin:-4px -22px -20px">{!! $options['chart'] !!}</div>
        @endif
    </div>
</div>