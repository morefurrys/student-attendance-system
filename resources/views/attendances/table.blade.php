<div class="table-responsive">
    <table class="table" id="attendances-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Class Id</th>
        <th>Course Id</th>
        <th>Teacher Id</th>
        <th>Semester Id</th>
        <th>Attendance Date</th>
        <th>Edit Date</th>
        <th>Day</th>
        <th>Month</th>
        <th>Year</th>
        <th>Attendance Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->student_id }}</td>
            <td>{{ $attendance->class_id }}</td>
            <td>{{ $attendance->course_id }}</td>
            <td>{{ $attendance->teacher_id }}</td>
            <td>{{ $attendance->semester_id }}</td>
            <td>{{ $attendance->attendance_date }}</td>
            <td>{{ $attendance->edit_date }}</td>
            <td>{{ $attendance->day }}</td>
            <td>{{ $attendance->month }}</td>
            <td>{{ $attendance->year }}</td>
            <td>{{ $attendance->attendance_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['attendances.destroy', $attendance->attendance_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendance->attendance_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('attendances.edit', [$attendance->attendance_id]) }}" class='btn btn-default btn-xs'>
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
