@if($inline)
<div class="d-flex flex-wrap">
@endif

@foreach($options as $k => $label)
    @if($boxed)
    <div class="btn btn-block style='height:100px; border-width: 2px margin-right: {{ $right }}">
        <span class="pull-right">
        <input {!! in_array($k, $disabled) ? 'disabled' : '' !!} value="{{$k}}" {!! $attributes !!} {!! \Dcat\Admin\Support\Helper::equal($checked, $k) ? 'checked' : '' !!}>
        <span class="position-absolute m-auto  font-md-2' style='top:50%;">
        @if($label !== null && $label !== '')
            <span>{!! $label !!}</span>
        @endif
        </span>
    </div>
    @else
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
    @endif
@endforeach

@if($inline)
</div>
@endif
