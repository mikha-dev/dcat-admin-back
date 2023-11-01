<div class="input-group input-group-sm">
    @if($group)
        <a class="filter-group input-group-text bg-white dropdown-toggle" data-toggle="dropdown">
            <span class="{{ $group_name }}-label">{{ $default['label'] }}&nbsp; </span>
        </a>
        <input type="hidden" name="{{ $id }}_group" class="{{ $group_name }}-operation" value="{{ request($id.'_group', 0) }}" />
        <ul class="dropdown-menu {{ $group_name }}">
            @foreach($group as $index => $item)
                <li class="dropdown-item"><a href="#" data-index="{{ $index }}"> {{ $item['label'] }} </a></li>
            @endforeach
        </ul>
    @endif

    <span class="input-group-text bg-white text-capitalize">
        <i class="fas fa-calendar"></i>&nbsp;<b>{!! $label !!}</b>
    </span>
    <input class="form-control" id="{{$id}}" autocomplete="off" placeholder="{{$label}}" name="{{$name}}" value="{{ request($name, $value) }}">
</div>

<script require="@moment,@bootstrap-datetimepicker">
    $('#{{ $id }}').datetimepicker({!! admin_javascript_json($options) !!});
</script>
