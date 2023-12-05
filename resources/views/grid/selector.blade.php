<div class="grid-selector">
    @foreach($self->all(true) as $column => $selector)
        <div class="wrap">
            <div class="select-label">{{ $selector['label'] }}</div>
            <div class="select-options">
                <ul>
                    @foreach($selector['options'] as $value => $option)
                        @php
                            $active = in_array((string) $value, \Illuminate\Support\Arr::get($selected, $column, []), true);
                            $badge = null;
                            if($option instanceof \D4T\Core\Repositories\LabelWithCount) {
                                $label = $option->label;
                                $badge = $option->count;
                            } else {
                                $label = $option;
                            }
                        @endphp
                        <li>
                            <a href="{{ $self->url($column, $value, true) }}"
                               class="{{$active ? 'active' : ''}}">{{ $label }}@if($badge)<span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-info ms-1">{{ $badge }}</span>@endif</a>
                            @if(!$active && $selector['type'] == 'many')
                                &nbsp;
                                <a href="{{ $self->url($column, $value) }}" class="add"><i class="feather icon-plus-square"></i></a>
                            @else
                                <a style="visibility: hidden;"><i class="feather icon-plus-square"></i></a>
                            @endif
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ $self->url($column) }}" class="clear"><i class="feather icon-trash-2"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
</div>
