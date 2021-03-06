<!-- Course Name Field -->
<div class="col-sm-12">
    {!! Form::label('course_name', 'Course Name:') !!}
    <p>{{ $course->course_name }}</p>
</div>

<!-- Course Code Field -->
<div class="col-sm-12">
    {!! Form::label('course_code', 'Course Code:') !!}
    <p>{{ $course->course_code }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- Status Field -->
<div class="form-check form-switch">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $course->status }}</p>
</div>
