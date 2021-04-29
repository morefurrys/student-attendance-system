<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control text-capitalize', 'maxlength' => 255, 'maxlength' => 255, 'placeholder' => 'Enter First Name']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control text-capitalize', 'maxlength' => 255, 'maxlength' => 255, 'placeholder' => 'Enter Last Name']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    <label for="gender" class="form-label">Gender: <span class="text-danger">*</span></label>
    <select class="form-select" id="gender" name="gender">
        <option value="">Select Gender</option>
        <option value="Male" {{ $teacher->gender == 'Male' ? 'selected' : '' }} >Male</option>
        <option value="Female" {{ $teacher->gender == 'Female' ? 'selected' : '' }} >Female</option>
    </select>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'placeholder' => 'email@example.com']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control', 'id' => 'dob', 'placeholder' => 'YYYY-MM-DD']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false,
            sideBySide: false,

        })

    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 14, 'maxlength' => 14, 'placeholder' => '+8615558797310']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => '1234 Main St']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label for="status" class="form-label">Status: <span class="text-danger">*</span></label>
    <select class="form-select" id="status" name="status">
        <option value="">Select Status</option>
        <option value="Single" {{ $teacher->status == 'Single' ? 'selected' : '' }} >Single</option>
        <option value="Married" {{ $teacher->status == 'Married' ? 'selected' : '' }} >Married</option>
    </select>
</div>

<!-- Date Registered Field -->
<div class="form-group col-sm-6">
    <input type="hidden" value="{{ date('Y-m-d') }}" name="date_registered" id="date_registered">
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_registered').datetimepicker({
            format: 'YYYY-MM-DD ',
            useCurrent: true,
            sideBySide: false,

        })

    </script>
@endpush

<!-- User Id Field -->
{{-- user that register the teacher --}}
<div class="form-group col-sm-6">
    <input type="hidden" value="{{ Auth::id() }}" name="user_id" id="user_id">

</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    <label class="form-label">Upload Image:<span class="text-danger">*</span></label>
    {{-- {!!Html::image('teacher_images/' . $teacher->image, null,['class'=>'teacher-image'])!!} --}}
    <input class="form-control" accept="image/x-png,image/png,image/jpeg,image/jpg" type="file" name="image" id="image">
</div>

@push('scripts')
    <script type="text/javascript">
        $(function() {
            var dateNow = new Date();
            $('#date_registered').datetimepicker({
                defaultDate: dateNow
            });
        });


    </script>
@endpush
