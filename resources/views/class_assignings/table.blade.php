<div class="modal fade" id="schedule-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="fas fa-user" aria-hidden="true">
                        Generate Class for Teacher</i></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => 'insert', 'id' => 'mult', 'method' => 'post']) !!}
            {{-- <form action="{{ route('classAssignings.store') }}" method="post"> --}}
            @csrf
            @include('class_assignings.fields')
            <div class="table-responsive">
                <table class="table table-hover" id="classAssignings-table">
                    <thead class="table table-info">
                        <tr>
                            <th>Status</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>

                                <td><input type="checkbox" name="multiclass[]" value="{{ $schedule->schedule_id }}">
                                </td>
                                <td>{!! $schedule->course_name !!}</td>
                                <td>{!! $schedule->semester_name !!}</td>
                                <td>{!! $schedule->class_name !!}</td>
                                <td>{!! $schedule->level !!}</td>
                                <td>{!! $schedule->classroom_name !!}</td>
                                <td>{!! $schedule->batch !!}</td>
                                <td>{!! $schedule->shift !!}</td>
                                <td>{!! $schedule->name !!}</td>
                                <td>{!! $schedule->time !!}</td>
                                <td>{!! date('Y-m-d', strtotime($schedule->start_date)) !!}</td>
                                <td>{!! date('Y-m-d', strtotime($schedule->end_date)) !!}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {!! Form::submit('Generate ClassAssigning', ['class' => 'btn btn-primary']) !!}

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
{{-- <div class="table-responsive">
<table class="table table-hover" id="classAssignings-table">
    <thead class="table table-info">
        <tr>
            <th>Teacher</th>
            <th>Semester</th>
            <th>Course Name</th>
            <th>Details</th>
            <th colspan="3">Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <input type="hidden" id="show-id">
            <td class="col-md-2"><b id="first_name"></b><b id="last_name"></b></td>
            <td class="col-md-2"><b id="semester_name"></b></td>
            <td class="col-md-3"><b id="course_name"></b></td>
            <td>
                <b id="level"></b> | <b id="time"></b>
                <b id="name"></b> | <b id="class_name"></b>
                <b id="shift"></b> | <b id="batch"></b>
                <b id="classroom_name"></b>

            </td>
        </tr>
    </tbody>
</table>
</div>
{{$classAssignings->links()}} --}}

<table class="table table-hover" id="classAssignings-table">
    <thead class="table table-info">
        <tr>
        <tr>
            <th>Teacher</th>
            <th>Semester</th>
            <th>course</th>
            <th>Details</th>
            <th colspan="3">Action</th>
        </tr>

        </tr>
    </thead>
    <tbody>
        @foreach ($classAssignings as $classAssigning)
            <tr>
                <td >{{ $classAssigning->first_name }} {{ $classAssigning->last_name }}</td>
                <td >{{ $classAssigning->semester_name }}</td>
                <td >{{ $classAssigning->course_name }}</td>
                <td>
                    {{ $classAssigning->level }} <br> {{ $classAssigning->classroom_name }} <br>{{ $classAssigning->name }} <br>
                    {{ $classAssigning->time }} <br> {{ $classAssigning->shift }} <br>
                     {{ $classAssigning->class_name }} <br> 
                     {{ $classAssigning->batch }} <br> 
                    
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['classAssignings.destroy', $classAssigning->class_assign_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a href="#" class='show-modal btn btn-default btn-xs' data-id="{{ $classAssigning->class_assign_id }}"
                            data-fname="{{ $classAssigning->first_name }}"
                            data-lname="{{ $classAssigning->last_name }}" data-name="{{ $classAssigning->name }}"
                            data-shift="{{ $classAssigning->shift }}" data-time="{{ $classAssigning->time }}"
                            data-level="{{ $classAssigning->level }}"
                            data-classroom_name="{{ $classAssigning->classroom_name }}"
                            data-semester_name="{{ $classAssigning->semester_name }}"
                            data-course_name="{{ $classAssigning->course_name }}"
                            data-class_name="{{ $classAssigning->class_name }}"
                            data-batch="{{ $classAssigning->batch }}"
                            data-created_at="{{ $classAssigning->created_at }}">
                            <i class="far fa-eye"> View</i>
                        </a>


                        <a href="{{ route('classAssignings.edit', [$classAssigning->class_assign_id]) }}"
                            class='btn btn-default btn-xs'>
                            <i class="far fa-edit"> Edit</i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
{{ $classAssignings->links() }}
