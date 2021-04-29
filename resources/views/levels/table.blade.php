<div class="table-responsive">
    <table class="table table-hover" id="levels-table">
        <thead class="table-info">
            <tr>
                <th>Level</th>
        <th>Course Id</th>
        <th>Level Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($levels as $level)
            <tr>
                <td>{{ $level->level }}</td>
            <td>{{ $level->course_id }}</td>
            <td>{{ $level->level_description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['levels.destroy', $level->level_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('levels.show', [$level->level_id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"> View</i>
                        </a>
                        <a href="{{ route('levels.edit', [$level->level_id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-edit"> Edit</i>
                        </a>
                        {!! Form::button('<i class="fas fa-trash-alt"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
