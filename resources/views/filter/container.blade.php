<style>
    .filter-box {
        border-top: 1px solid #eee;
        margin-top: 10px;
        margin-bottom: -.5rem!important;
        padding: 1.8rem;
    }
</style>

<div class="filter-box shadow-0 card mb-0 {{ $expand ? '' : 'd-none' }} {{$containerClass}}">
    <div class="card-body" style="{!! $style !!}"  id="{{ $filterID }}">
        <form action="{!! $action !!}" class="form-horizontal grid-filter-form" pjax-container method="get">
            <div class="row mb-0 gap-2">
                @foreach($layout->columns() as $column)
                    @foreach($column->filters() as $filter)
                        {!! $filter->render() !!}
                    @endforeach
                @endforeach

                <div class="col-sm-1">
                    <button class="btn btn-primary submit">
                        <i class="fas fa-search"></i><span class="d-none d-sm-inline">&nbsp;&nbsp;{{ trans('admin.search') }}</span>
                    </button>
                </div>

                @if(!$disableResetButton)
                    <div class="col-sm-1">
                        <a href="{!! $action !!}" class="reset btn btn-danger">
                            <i class="fas fa-rotate-left"></i><span
                                    class="d-none d-sm-inline">&nbsp;&nbsp;{{ trans('admin.reset') }}</span>
                        </a>
                    </div>
                @endif
            </div>

        </form>
    </div>
</div>
