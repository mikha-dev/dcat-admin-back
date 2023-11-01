<div class="input-group input-group-sm quick-form-field">
    <select class="form-control {{$class}}" name="{{$name}}" {!! $attributes !!} multiple data-placeholder="{{ $label }}">

        <option value=""></option>
        @foreach($options as $select => $option)
            <option value="{{$select}}" {{ $select == old($column, $value) ?'selected':'' }}>{{$option}}</option>
        @endforeach
    </select>
</div>

