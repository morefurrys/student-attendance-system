<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batch)
            <tr>
                <td>{{ $batch->batch }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['batches.destroy', $batch->batch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('batches.show', [$batch->batch_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('batches.edit', [$batch->batch_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
