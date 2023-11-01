<div {!! $attributes !!}>
    <nav>
        <div class="nav nav-tabs nav-tabs-md nav-tabs-line" id="nav-tab" role="tablist">
            @foreach($tabs as $id => $tab)
                @if($tab['type'] == \Dcat\Admin\Widgets\Tab::TYPE_CONTENT)
                    <a class="nav-link {{ $id == $active ? 'active' : '' }}" data-bs-toggle="tab" href="#tab_{{ $tab['id'] }}" role="tab" aria-controls="tab_{{ $tab['id'] }}" aria-selected="true">{!! $tab['title'] !!}</a>
                @elseif($tab['type'] == \Dcat\Admin\Widgets\Tab::TYPE_LINK)
                    <a class="nav-link {{ $id == $active ? 'active' : '' }}" href="{{ $tab['href'] }}">{!! $tab['title'] !!}</a>
                @endif
            @endforeach
        </div>
    </nav>
    <div class="tab-content mt-3" id="nav-tabContent">
        @foreach($tabs as $id => $tab)
            <div class="tab-pane fade show {{ $id == $active ? 'active' : '' }}" id="tab_{{ $tab['id'] }}" role="tabpanel" aria-labelledby="tab_{{ $tab['id'] }}-tab">
                {!! $tab['content'] ?? '' !!}
            </div>
        @endforeach
    </div>
</div>