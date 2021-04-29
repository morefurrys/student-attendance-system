<div class="table-responsive">
    <table class="table table-stripe table-hover" id="schedules-table">
        <thead class="table-info" >
            <tr>
                <th>Semester</th>
                <th>Course Name</th>
                <th>Class</th>
                <th>Level</th>
                <th>Classroom Name</th>
                <th>Batch</th>
                <th>Shift</th>
                <th>Day</th>
                <th>Time</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->semester_name }}</td>
                    <td>{{ $schedule->course_name }}</td>
                    <td>{{ $schedule->class_name }}</td>
                    <td>{{ $schedule->level }}</td>
                    <td>{{ $schedule->classroom_name }}</td>
                    <td>{{ $schedule->batch }}</td>
                    <td>{{ $schedule->shift }}</td>
                    <td>{{ $schedule->name }}</td>
                    <td>{{ $schedule->time }}</td>
                    <td>{{ $schedule->start_date }}</td>
                    <td>{{ $schedule->end_date }}</td>
                    <td>
                        @if ($schedule->status == 1)
                            <span class="btn btn-success">Active</span>
                        @else
                            <span class="btn btn-danger">In-Active</span>
                        @endif
                    </td>

                    <td width="120">
                        {!! Form::open(['route' => ['schedules.destroy', $schedule->schedule_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('schedules.show', [$schedule->schedule_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="fa fa-eye"> View</i>
                            </a>
                            <a href="{{ route('schedules.edit', [$schedule->schedule_id]) }}"
                                class='btn btn-default btn-xs' id = "Edit" data-id = "{{$schedule->schedule_id}}"> 
                                <i class="fa fa-edit"> Edit</i>
                            </a>
                            {!! Form::button('<i class="fa fa-trash-alt"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
