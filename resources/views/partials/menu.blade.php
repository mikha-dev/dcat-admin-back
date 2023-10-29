@php
    $depth = $item['depth'] ?? 0;

    $horizontal = config('admin.layout.horizontal-menu');

    //dd($item);

    $icon = $item['icon']; 
    if(isset($item['domain_setting']) && !is_null($item['domain_setting']) && !is_null($item['domain_setting']['icon'])) {
        $icon = $item['domain_setting']['icon'];
    }
@endphp

@if($builder->visible($item))
    @if(empty($item['children']))
        <li class="nav-item">
            <a data-id="{{ $item['id'] ?? '' }}" @if(mb_strpos($item['uri'], '://') !== false || ( isset($item['is_target_blank']) && $item['is_target_blank'] == 1)) target="_blank" @endif
               href="{{ $builder->getUrl($item['uri']) }}"
               class="nav-link {!! $builder->isActive($item) ? 'active' : '' !!}">
                {!! str_repeat('&nbsp;', $depth) !!}<i class="fa fa-fw {{ $icon }}"></i>
                <p>
                    {!! $builder->translate($item['title']) !!}
                </p>
            </a>
        </li>
    @else

        <li class="{{ $horizontal ? 'dropdown' : 'has-treeview' }} {{ $depth > 0 ? 'dropdown-submenu' : '' }} nav-item {{ $builder->isActive($item) ? 'menu-open' : '' }}">
            <a href="#"  data-id="{{ $item['id'] ?? '' }}"
               class="nav-link {{ $builder->isActive($item) ? ($horizontal ? 'active' : '') : '' }}
                    {{ $horizontal ? 'dropdown-toggle' : '' }}">
                {!! str_repeat('&nbsp;', $depth) !!}<i class="fa fa-fw {{ $icon }}"></i>
                <p>
                    {!! $builder->translate($item['title']) !!}

                    @if(! $horizontal)
                        <i class="right fa fa-angle-left"></i>
                    @endif
                </p>
            </a>
            <ul class="nav {{ $horizontal ? 'dropdown-menu' : 'nav-treeview' }}">
                @foreach($item['children'] as $item)
                    @php
                        $item['depth'] = $depth + 1;
                    @endphp

                    @include('admin::partials.menu', ['item' => $item])
                @endforeach
            </ul>
        </li>
    @endif
@endif
