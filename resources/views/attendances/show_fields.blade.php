<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $attendance->student_id }}</p>
</div>

<!-- Class Id Field -->
<div class="col-sm-12">
    {!! Form::label('class_id', 'Class Id:') !!}
    <p>{{ $attendance->class_id }}</p>
</div>

<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $attendance->course_id }}</p>
</div>

<!-- Teacher Id Field -->
<div class="col-sm-12">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $attendance->teacher_id }}</p>
</div>

<!-- Semester Id Field -->
<div class="col-sm-12">
    {!! Form::label('semester_id', 'Semester Id:') !!}
    <p>{{ $attendance->semester_id }}</p>
</div>

<!-- Attendance Date Field -->
<div class="col-sm-12">
    {!! Form::label('attendance_date', 'Attendance Date:') !!}
    <p>{{ $attendance->attendance_date }}</p>
</div>

<!-- Edit Date Field -->
<div class="col-sm-12">
    {!! Form::label('edit_date', 'Edit Date:') !!}
    <p>{{ $attendance->edit_date }}</p>
</div>

<!-- Day Field -->
<div class="col-sm-12">
    {!! Form::label('day', 'Day:') !!}
    <p>{{ $attendance->day }}</p>
</div>

<!-- Month Field -->
<div class="col-sm-12">
    {!! Form::label('month', 'Month:') !!}
    <p>{{ $attendance->month }}</p>
</div>

<!-- Year Field -->
<div class="col-sm-12">
    {!! Form::label('year', 'Year:') !!}
    <p>{{ $attendance->year }}</p>
</div>

<!-- Attendance Status Field -->
<div class="col-sm-12">
    {!! Form::label('attendance_status', 'Attendance Status:') !!}
    <p>{{ $attendance->attendance_status }}</p>
</div>

