@if($rows->isEmpty())
    @foreach($fields as $field)
        {!! $field->render() !!}
    @endforeach
@else
    @foreach($rows as $row)
        {!! $row->render() !!}
    @endforeach
@endif