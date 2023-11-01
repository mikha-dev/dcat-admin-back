@if($inline)
<div class="d-flex flex-wrap">
@endif

@foreach($options as $k => $label)

    @if($layout == \Dcat\Admin\Enums\RadioLayoutType::COMMON)
    <div class="vs-radio-con vs-radio-{{ $style }}" style="margin-right: {{ $right }}">
        <input {!! in_array($k, $disabled) ? 'disabled' : '' !!} value="{{$k}}" {!! $attributes !!} {!! \Dcat\Admin\Support\Helper::equal($checked, $k) ? 'checked' : '' !!}>
        <span class="vs-radio vs-radio-{{ $size }}">
          <span class="vs-radio--border"></span>
          <span class="vs-radio--circle"></span>
        </span>
        @if($label !== null && $label !== '')
            <span>{!! $label !!}</span>
        @endif
    </div>
    @elseif($layout == \Dcat\Admin\Enums\RadioLayoutType::BOXED)
    <div class="col-2 btn btn-block m-1" style="height:{{$boxed_height}}; width:{{$boxed_width}}; border-width: 2px">
        <span class='float-end'>
            <input
                {!! in_array($k, $disabled) ? 'disabled' : '' !!}
                value="{{$k}}" {!! $attributes !!}
                {!! \Dcat\Admin\Support\Helper::equal($checked, $k) ? 'checked' : '' !!}
            />
        </span>
        @if($label !== null && $label !== '')
            <span class='position-absolute m-auto font-md-2' style='top:50%;'>{!! $label !!}</span>
        @endif
    </div>
    @else
    <div class="col-3 btn btn-block mr-2 mb-2 " style="height:{{$boxed_height}}; width:{{$boxed_width}};">
        <p class="text-center font-lg-1 pt-2 pb-1">{!! $label !!}</p>
        <button class="btn btn-xs btn-outline-primary">{{ trans('admin.select') }}</button>
        <span class='float-end'>
            <input style="display: none !important;"
                {!! in_array($k, $disabled) ? 'disabled' : '' !!}
                value="{{$k}}" {!! $attributes !!}
                {!! \Dcat\Admin\Support\Helper::equal($checked, $k) ? 'checked' : '' !!}

            />
        </span>
    </div>
    @endif
@endforeach

@if($inline)
</div>
@endif