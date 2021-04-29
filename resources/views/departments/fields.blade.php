
<!-- Department Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_name', 'Department Name:') !!}
    {!! Form::text('department_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>



<!-- Department Code Field -->
<div class="form-group col-sm-4">
    {!! Form::label('department_code', 'Department Code:') !!}
    {!! Form::text('department_code', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>  

<!-- Faculty Id Field -->
<div class="form-group col-sm-6">
    <select class="form-select" name="faculty_id" id="faculty_id">
        <option value="" selected="true" disabled="true">Select Faculty</option>
        @foreach ($faculties as $facultyName)
            <option value="{{ $facultyName->faculty_id }}"{{ $facultyName->faculty_id == $department->faculty_id ? 'selected' : ''}}>{{ $facultyName->faculty_name }}</option>
        @endforeach
    </select>
</div>
<!-- Department Status Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {!! Form::hidden('department_status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('department_status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('department_status', 'Department Status', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Department Description Field -->
<div class="form-group col-sm-6 col-lg-10">
    {!! Form::label('department_description', 'Department Description:') !!}
    {!! Form::textarea('department_description', null, ['class' => 'form-control', 'rows' => '4']) !!}
</div>



