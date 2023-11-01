<div class="input-group input-group-sm">
    <span class="input-group-text bg-white text-capitalize">
        <b>{!! $label !!}</b>
    </span>

    <div id="{{ $id }}" class="form-control">
        <span class="default-text" style="opacity:0.75">{{ $placeholder }}</span>
        <span class="option d-none"></span>
    </div>

    <input name="{{ $name }}" type="hidden" id="hidden-{{ $id }}" value="{{ implode(',', \Dcat\Admin\Support\Helper::array($value)) }}" />
    <div class="input-group-append">
        {!! $dialog !!}
    </div>

</div>