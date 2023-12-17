@if($user)
<li class="dropdown dropdown-user nav-item">
    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
        <div class="user-nav d-sm-flex d-none mr-2">
            <span class="user-name text-bold-600">{{ $user->name }}</span>
            <span class="user-status"><i class="fa fa-circle text-success"></i> {{ trans('admin.online') }}</span>
        </div>
        <span>
            <img class="round mr-1" src="{{ $user->avatar }}" alt="avatar" height="40" width="40" />
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        {!! \Dcat\Admin\Admin::userNav()->renderElements() !!}
    </div>
</li>
@endif
