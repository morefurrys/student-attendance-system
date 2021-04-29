{{-- @extends('layouts.app')

@section('content')
    @include('table_style')
    <section class="content-header">
        <h1 class="pull-right"><i class="fa fa-calender"> Attendance</i></h1>
        <h1 class="pull-right">
            <a href="#" onclick="$('#markAttendance').modal({'backdrop':'static'});" class="btn btn-success pull-right"></a>
        </h1>
    </section>

    <div class="content px-3">
        <div class="card">
            @include('flash::message')
            <div class="card-body">
                <div class="row">
                    <style>
                        .btn-block {
                            height: 28px;
                            text-emphasis: center;
                            text-anchor: top;
                        }

                    </style>

                    @php
                        $date = date('Y-m-d');
                    @endphp

                    <div class="panel-default">
                        <div class="panel-heading">
                            <a href="#"><button class="btn bg-navy pull-right" data-toggle="modal"
                                    data-target="#ReportList">Attendance
                                    Report</button>
                            </a>
                            @isset($class_name)
                                <a href="{{ route('AttendanceList', $class_name->teacher_id) }}"
                                    style="margin-right:10px "><button class="btn bg-navy pull-right">Attendance
                                        List</button>
                                </a>
                            @endisset
                            <h3 style="font-weight:bold; text-transform:uppercase; text-align:left"><i
                                    class="fa fa-calender"></i> Mark<b style="color:red"></b> attendance
                            </h3>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-mb-3">
                                    <form action="{{ url('/search/attendance/by/roll_no') }}" method="get">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="search" name="roll_no" class="form-control"
                                                    placeholder="Roll No." />
                                                <span class="input-group-btn">
                                                    <button id="filter" class="btn btn-primary btn-block"
                                                        onclick="searchStationTable();">
                                                        <span class="fa fa-search">Search</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-mb-3">
                                    <form action="{{ url('/search/attendance/by/class') }}" method="get">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select name="class_id" id="class_id" class="form-control select_2_single">
                                                    <option value="" selected disabled> select class</option>
                                                    @foreach ($classes as $class)
                                                        <option value="{{ $class->class_code }}">
                                                            {{ $class->class_name }}</option>
                                                    @endforeach

                                                </select>

                                                <span class="input-group-btn">
                                                    <button id="filter" class="btn btn-primary btn-block"
                                                        onclick="searchStationTable();">
                                                        <span class="fa fa-search">Search</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-mb-3">
                                    <form action="{{ url('/search/attendance/by/date') }}" method="get">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="search" name="attendance_date" class="form-control"
                                                    placeholder="Date" autocomplete="off" />
                                                <span class="input-group-btn">
                                                    <button id="filter" class="btn btn-primary btn-block"
                                                        onclick="searchStationTable();">
                                                        <span class="fa fa-search">Search</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @if ($attendances != $date)
                    <form action="{{ url('MarkAttendanceClass') }}" method="post">
                        @csrf
                        @isset($students)
                            @include('teachers.attendances.mark_attendance')
                        @endisset


                        <button type="submit" id="addAttendance" class="btn bg-navy pull-right"><i
                                class="fa fa-pencil"></i>Mark-attendance</button>
                    </form>
                @endif
            </div>

        </div>
    </div>

@endsection

@push('scripts')
    <script type="text/javascript">
        $('#semester_id').on('change', function(e) {
            var semester_id = $('#semester_id').val();
            getStudentByClass()
            $('#department_id').empty();
            $('#class_id').empty();
            $('#course_id').empty();
        })

        $('#faculty_id').on('change', function(e) {
            var faculty_id = $('#faculty_id').val();
            getByfaculty()
            $('#class_id').empty();
            $('#course_id').empty();
        })
        $('#department_id').on('change', function(e) {
            var department_id = $('#department_id').val();
            getBydepartment()
            $('#course_id').empty();
        })
        $('#class_id').on('change', function(e) {
            var class_id = $('#class_id').val();
            getBycourse()

        })

        function getStudentByClass() {
            var semester_id = $('#semester_id').val()
            var level_id = $('#level_id').val()
            var faculty_id = $('#faculty_id')
            $(faculty_id).empty();
            $('#faculty_id').append( & ('<option>').text("Select Faculty").attr('value', ""));
            $.get("{{ url('class-attendance') }}", {
                'semester_id': semester_id
            }, function(data) {
                console.log(data);
                $.each(data, function(i, f) {
                    $(faculty_id).append($('<option/>', {
                            value: f.faculty_id,
                            text: f.faculty_name
                        }

                    ))
                })
            })
        }

        function getByfaculty() {

            var faculty_id = $('#faculty_id').val()
            var department_id = $('#department_id')
            $(department_id).empty();
            $('#department_id').append( & ('<option>').text("Select Department").attr('value', ""));
            $.get("{{ url('dynamic-by-faculty') }}", {
                'faculty_id': faculty_id
            }, function(data) {
                console.log(data);
                $.each(data, function(i, d) {
                    $(department_id).append($('<option/>', {
                        value: d.department_id,
                        text: d.department_name
                    }))
                })
            })
        }

        function getBydepartment() {

            var department_id = $('#department_id').val()
            var class_id = $('#class_id')
            $(class_id).empty();
            $('#class_id').append( & ('<option>').text("Select class").attr('value', ""));
            $.get("{{ url('dynamic-by-class') }}", {
                'department_id': department_id
            }, function(data) {
                console.log(data);
                $.each(data, function(i, c) {
                    $(class_id).append($('<option/>', {
                        value: c.class_id,
                        text: c.class_name
                    }))
                })
            })
        }

        function getBycourse() {

            var class_id = $('#class_id').val()
            var course_id = $('#course_id')
            $(course_id).empty();
            $('#course_id').append( & ('<option>').text("Select course").attr('value', ""));
            $.get("{{ url('dynamic-by-course') }}", {
                'class_id': class_id
            }, function(data) {
                console.log(data);
                $.each(data, function(i, c) {
                    $(course_id).append($('<option/>', {
                        value: c.class_id,
                        text: c.class_name
                    }))
                })
            })
        }

    </script>

@endpush --}}
