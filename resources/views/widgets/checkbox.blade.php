@if($inline)
<div class="d-flex flex-wrap">
@endif

@foreach($options as $k => $label)
    <div class="vs-checkbox-con vs-checkbox-{{ $style }} mb-1" style="margin-right: {{ $right }}">
        <input {!! in_array($k, $disabled) ? 'disabled' : '' !!} value="{{$k}}" {!! $attributes !!} {!! (in_array($k, $checked)) ? 'checked' : '' !!}>
        <span class="vs-checkbox vs-checkbox-{{ $size }}">
          <span class="vs-checkbox--check">
            <i class="vs-icon fas fa-check"></i>
          </span>
        </span>
        @if($label !== null && $label !== '')
        <span>{!! $label !!}</span>
        @endif
    </div>
@endforeach

@if($inline)
</div>
@endif