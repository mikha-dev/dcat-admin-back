<div {!! $attributes !!}>
    <div class="inner" style="{{ $padding }}">
        @if($title)
            <h3>
                @if($link)
                    <a href="{{$link}}">{{ $title }}</a>
                @else
                    {{ $title }}
                @endif
            </h3>
        @endif

        {!! $content !!}
    </div>
    @if($icon)
    <div class="icon">
        <i class="fa fa-{{ $icon }}"></i>
    </div>
    @endif
    @if($link)
    <a href="{{ $link }}" class="small-box-footer">
        {{ trans('admin.more') }}&nbsp;
        <i class="fa fa-arrow-circle-right"></i>
    </a>
    @endif
</div>