<div class="table-responsive">
    <table class="table table-hover" id="faculties-table">
        <thead class="table table-info">
            <tr>
                <th>Faculty Name</th>
                <th>Faculty Code</th>
                <th>Faculty Description</th>
                <th>Faculty Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculties as $faculty)
                <tr>
                    <td>{{ $faculty->faculty_name }}</td>
                    <td>{{ $faculty->faculty_code }}</td>
                    <td>{{ $faculty->faculty_description }}</td>
                    <td>
                        @if ($faculty->faculty_status == 1)
                            <div class="btn btn-success">Active</div>
                        @else
                            <div class="btn btn-danger">In-Active</div>
                        @endif
                    </td>
                    <td width="120">
                        {!! Form::open(['route' => ['faculties.destroy', $faculty->faculty_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('faculties.show', [$faculty->faculty_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="fas fa-eye"> View</i>
                            </a>
                            <a href="{{ route('faculties.edit', [$faculty->faculty_id]) }}"
                                class='btn btn-default btn-xs'>
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
