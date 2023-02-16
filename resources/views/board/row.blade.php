<div class="row" style="border-bottom: 1px solid #eff1f7; margin-bottom: 3px; padding-bottom: 3px;">
    @foreach($fields as $field)
        <div class="col-md-{{ $field['width'] }}">
            {!! $field['element']->render() !!}
        </div>
    @endforeach
</div>
