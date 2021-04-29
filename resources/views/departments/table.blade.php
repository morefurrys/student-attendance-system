<div class="table-responsive">
    <table class="table table-hover" id="departments-table">
        <thead class="table-info">
            <tr>
                <th>Faculty Name</th>
        <th>Department Name</th>
        <th>Department Code</th>
        <th>Department Description</th>
        <th>Department Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($departments as $department)
            <tr>
                <td>{{ $department->faculty_name }}</td>
            <td>{{ $department->department_name }}</td>
            <td>{{ $department->department_code }}</td>
            <td>{{ $department->department_description }}</td>
            <td>@if( $department->department_status == 1)
                <div class="btn btn-success">Active</div>
            @else
            <div class="btn btn-danger">In-Active</div>
            @endif</td>
                <td width="120">
                    {!! Form::open(['route' => ['departments.destroy', $department->department_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departments.show', [$department->department_id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"> View</i>
                        </a>
                        <a href="{{ route('departments.edit', [$department->department_id]) }}" class='btn btn-default btn-xs'>
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
