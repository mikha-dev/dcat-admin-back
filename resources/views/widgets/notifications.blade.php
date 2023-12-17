<ul class="nav navbar-nav">
    <li class="dropdown dropdown-notification nav-item">
        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" aria-expanded="true">
            <i class="ficon feather icon-bell"></i>
            @if(count($items) > 0)
                <span class="badge badge-pill badge-primary badge-up">{{count($items)}}</span>
            @endif
        </a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right ">
            @if(count($items))
            <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                    <h3 class="white">{{count($items)}}</h3><span class="grey darken-2">{{ trans('admin.new_notifications') }}</span>
                </div>
            </li>
            <li class="scrollable-container media-list ps ps--active-y">

                @foreach($items as $item)
                    <a class="justify-content-between" href="{!! $view_all_link !!}">
                        <div class="media align-items-start">
                            <div class="media-left"><i class="{{ $item->icon }} font-medium-5"></i></div>
                            <div class="media-body" style="padding-left: 10px">
                                <h6 class="primary media-heading">{{ $item->title }}</h6>
                                <p class="mb-0">{{ $item->message }}</p>
                            </div>
                            <small><time class="media-meta">{{ $item->time }}</time></small>
                        </div>
                    </a>
                @endforeach

                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 254px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 184px;"></div></div>
            </li>
            @endif

            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="{!! $view_all_link !!}">{{ trans('admin.view_all') }}</a></li>
        </ul>
    </li>
</ul>