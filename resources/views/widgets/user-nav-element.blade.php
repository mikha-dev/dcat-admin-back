@if($hasDivider)
<div class="dropdown-divider"></div>
@endif
<a href="{{ $url }}" class="dropdown-item">
    <i class="{{ $icon }}"></i> {{ $title }}
</a>