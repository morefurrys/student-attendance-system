<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_id', 'Class Id:') !!}
    {!! Form::number('class_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester_id', 'Semester Id:') !!}
    {!! Form::number('semester_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Attendance Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attendance_date', 'Attendance Date:') !!}
    {!! Form::text('attendance_date', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Edit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edit_date', 'Edit Date:') !!}
    {!! Form::number('edit_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day', 'Day:') !!}
    {!! Form::text('day', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Month Field -->
<div class="form-group col-sm-6">
    {!! Form::label('month', 'Month:') !!}
    {!! Form::text('month', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    {!! Form::number('year', null, ['class' => 'form-control']) !!}
</div>

<!-- Attendance Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attendance_status', 'Attendance Status:') !!}
    {!! Form::text('attendance_status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>