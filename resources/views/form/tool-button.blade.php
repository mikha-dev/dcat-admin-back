<div class="btn-group pull-right mr-5">
    <a @if($href) href="{{ $href }}"@endif @if($action)data-action="{{$action}}" data-url="{{$href}}"@endif @if($redirect)data-redirect="{{$redirect}}"@endif class="btn btn-sm btn-primary">
        <i class="{{$icon}}"></i><span class="d-none d-sm-inline"> {{$title}}</span>
    </a>
</div>
