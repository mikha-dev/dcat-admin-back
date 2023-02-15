<div class="col-sm-{{ $width['label'] }}">
    <span style=" white-space: nowrap;"><b>{{ $label }}</b></span>
</div>

<div class="col-sm-{{ $width['field'] }}">
@if($escape)
    {{ $content }}
@else
    {!! $content !!}
@endif
</div>