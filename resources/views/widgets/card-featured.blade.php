<div class="card {{ $fullHeight ? 'h-100' : '' }} {{ empty($class) ? '' : 'bg-'.$class }}" style="{{ $style }}">
    <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
        @if ($icon)
        <div class="px-4">
            {!! $icon !!}
        </div>
        @endif
        <div class="card-body d-flex align-items-md-left flex-column">
            @if ($title)
            <h3 class="card-title mb-4 lh-sm text-left">
                    {{ $title }}
            </h3>
            @endif
            <div class="d-flex align-items-center justify-content-between">
                @foreach($features as $feature)
                    {!! $feature !!}
                @endforeach
            </div>
        </div>
    </div>
    @if(count($footerItems) > 0)
    <div class="card-footer d-flex align-items-center justify-content-around mt-3 py-4 border-top">
        @foreach($footerItems as $item)
            <div class="">
            {!! $item !!}
            </div>
        @endforeach
    </div>
    @endif
</div>
