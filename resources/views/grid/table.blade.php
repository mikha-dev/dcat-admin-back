
<div class="table-wrapper">

    <div class="d-block pb-0">
        @include('admin::grid.table-toolbar')
    </div>

    {!! $grid->renderFilter() !!}

    {!! $grid->renderHeader() !!}

    <div class="table-radius-wrapper mt-1">
        <div class="{!! $grid->formatTableParentClass() !!}">
            <table class="{{ $grid->formatTableClass() }}" id="{{ $tableId }}" >
                <thead class="table-dark">
                @if ($headers = $grid->getVisibleComplexHeaders())
                    <tr>
                        @foreach($headers as $header)
                            {!! $header->render() !!}
                        @endforeach
                    </tr>
                @endif
                <tr>
                    @foreach($grid->getVisibleColumns() as $column)
                        <th {!! $column->formatTitleAttributes() !!}>{!! $column->getLabel() !!}{!! $column->renderHeader() !!}</th>
                    @endforeach
                </tr>
                </thead>

                @if ($grid->hasQuickCreate())
                    {!! $grid->renderQuickCreate() !!}
                @endif

                <tbody>
                @foreach($grid->rows() as $row)
                    <tr {!! $row->rowAttributes() !!}>
                        @foreach($grid->getVisibleColumnNames() as $name)
                            <td {!! $row->columnAttributes($name) !!}>{!! $row->column($name) !!}</td>
                        @endforeach
                    </tr>
                @endforeach
                @if ($grid->rows()->isEmpty())
                    <tr>
                        <td colspan="{!! count($grid->getVisibleColumnNames()) !!}">
                            <div style="margin:5px 0 0 10px;"><span class="help-block" style="margin-bottom:0"><i class="fas fa-triangle-exclamation"></i>&nbsp;{{ trans('admin.no_data') }}</span></div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

    {!! $grid->renderFooter() !!}

    {!! $grid->renderPagination() !!}

</div>
