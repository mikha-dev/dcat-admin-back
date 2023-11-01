<div class="filter-input col-sm-{{ $width }}" style="{!! $style !!}">
    <div class="form-group">
        <div class="input-group input-group-sm">
            <span class="input-group-text bg-white text-capitalize">
                <i class="fas fa-calendar"></i>&nbsp;<b>{!! $label !!}</b>
            </span>
            <input type="text" class="form-control" placeholder="{{$label}}" name="{{$name['start']}}" value="{{ request($name['start'], \Illuminate\Support\Arr::get($value, 'start')) }}">
            <span class="input-group-text bg-white text-capitalize">To</span>
            <input type="text" class="form-control" placeholder="{{$label}}" name="{{$name['end']}}" value="{{ request($name['end'], \Illuminate\Support\Arr::get($value, 'end')) }}">
        </div>
    </div>
</div>