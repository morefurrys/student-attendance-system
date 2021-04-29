<!-- Username Field -->
<div class="form-group col-sm-4">
    {!! Form::label('username', 'Username:') !!}
    <input class="form-control" type="text" value="{{$rand_username_password}}" name="username" id="username">
</div>

<!-- Password Field -->
<div class="form-group col-sm-4">
    {!! Form::label('password', 'Password:') !!}
    <input class="form-control" type="text" value="{{$rand_username_password}}" name="password" id="password">
</div>

<!-- Roll No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roll_no', 'Roll No:') !!}
    {!! Form::text('roll_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control text-capitalize', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control text-capitalize', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_name', 'Father Name:') !!}
    {!! Form::text('father_name', null, ['class' => 'form-control text-capitalize', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_phone', 'Father Phone:') !!}
    {!! Form::text('father_phone', null, ['class' => 'form-control', 'maxlength' => 14, 'maxlength' => 14, 'placeholder' => '+8615558797310']) !!}
</div>

<!-- Mother Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_name', 'Mother Name:') !!}
    {!! Form::text('mother_name', null, ['class' => 'form-control text-capitalize', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control', 'id' => 'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false,
            sideBySide: false
        })

    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 14, 'maxlength' => 14,'placeholder' => '+8615558797310']) !!}
</div>
<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control','rows'=>'3']) !!}
</div>

<!-- Current Address Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('current_address', 'Current Address:') !!}
    {!! Form::textarea('current_address', null, ['class' => 'form-control', 'rows'=>'3']) !!}
</div>



<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>


<!-- Date Registered Field -->
<div class="form-group col-sm-2">
    <input class="form-control" type="hidden" value="{{ date('Y-m-d') }}" name="date_registered" id="date_registered">
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_registered').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: false
        })

    </script>
@endpush

<!-- User Id Field -->
<div class="form-group col-sm-2">
    <input class="form-control" type="hidden" value="{{ Auth::id() }}" name="user_id" id="user_id" required>
</div>


<!-- Faculty Id Field -->
<div class="form-group col-sm-4">
    <select class="form-select" id="faculty_id" name="faculty_id">
        <option value="" selected="true" disabled="true">Choose Faculty</option>
        @foreach ($faculties as $faculty)
            <option value="{{ $faculty->faculty_id }}"{{ $faculty->faculty_id == $admission->faculty_id ? 'selected' : ''}}>{{ $faculty->faculty_name }}</option>
        @endforeach

    </select>
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-4">
    <select class="form-select" id="department_id" name="department_id">
        <option value="" selected="true" disabled="true">Choose Department</option>
        @foreach ($departments as $department)
            <option value="{{ $department->department_id }}"{{ $department->department_id == $admission->department_id ? 'selected' : '' }}>{{ $department->department_name }}</option>
        @endforeach

    </select>
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-4">
    <select class="form-select" id="batch_id" name="batch_id">
        <option value="" selected="true" disabled="true">Choose Batch</option>
        @foreach ($batches as $batchName)
            <option value="{{ $batchName->batch_id }}"{{ $batchName->batch_id == $admission->batch_id ? 'selected' : ''}}>{{ $batchName->batch }}</option>
        @endforeach

    </select>
</div>

<!-- Image Field -->
<div class="form-group col-sm-4">
    <label class="form-label">Upload Image:<span class="text-danger">*</span></label>
    <input class="form-control" accept="image/x-png,image/png,image/jpeg,image/jpg" type="file" name="image" id="image">
</div>
<!-- Gender Field -->
<div class="form-group col-sm-4">
    <label for="gender" class="form-label">Gender: <span class="text-danger">*</span></label>
    <select class="form-select" id="gender" name="gender">
        <option value="">Select Gender</option>
        <option value="Male" {{ $admission->gender == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ $admission->gender == 'Female' ? 'selected' : '' }}>Female</option>
    </select>
</div>
<!-- Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    </div>
</div>


