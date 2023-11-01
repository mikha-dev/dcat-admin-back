<div {!! $attributes !!}>
    <div class="card-header d-flex justify-content-between align-items-start pb-0">
        <div>
            @if($icon)
            <div class="avatar bg-rgba-{{ $style }} p-50 m-0">
                <div class="avatar-content">
                    <i class="{{ $icon }} text-{{ $style }} font-medium-5"></i>
                </div>
            </div>
            @endif

            @if($title)
                <h4 class="card-title mb-1">{!! $title !!}</h4>
            @endif

            <div class="metric-header">{!! $header !!}</div>
        </div>

        @if (! empty($subTitle))
            <span class="btn bg-light shadow-0 p-0">
                {{ $subTitle }}
            </span>
        @endif

        @if(! empty($dropdown))
            <div class="dropdown chart-dropdown">
                <button class="btn btn-light dropdown-toggle waves-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ current($dropdown) }}
                </button>
                <ul class="dropdown-menu">
                    @foreach($dropdown as $key => $value)
                        <li><a href="#" class="dropdown-item select-option" data-option="{{ $key }}">{{ $value }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="metric-content">{!! $content !!}</div>
</div>