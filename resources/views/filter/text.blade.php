<div class="input-group input-group-sm">
    @if($group)
        <a class="filter-group input-group-text bg-white dropdown-toggle" data-toggle="dropdown">
            <span class="{{ $group_name }}-label">{{ $default['label'] }}&nbsp; </span>
        </a>
        <input type="hidden" name="{{ $id }}_group" class="{{ $group_name }}-operation" value="{{ request($id.'_group', 0) }}"/>
        <ul class="dropdown-menu {{ $group_name }}">
            @foreach($group as $index => $item)
                <li><a class="dropdown-item" data-index="{{ $index }}">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>
    @endif
    <span class="input-group-text bg-white text-capitalize">
        <b>{!! $label !!}</b>
    </span>
    <input type="{{ $type }}" class="form-control {{ $id }}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{ request($name, $value) }}">
</div>