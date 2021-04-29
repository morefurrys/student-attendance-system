<div class="row">
    <!-- Course Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="course_id" id="course_id">
            <option value=""selected="true" disabled="true">Select Course</option>
            @foreach ($course as $courseName)
                <option value="{{ $courseName->course_id }}" {{ $courseName->course_id == $schedule->course_id ? 'selected' : ''}}>{{ $courseName->course_name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Class Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="class_id" id="class_id">
            <option value=""selected="true" disabled="true">Select Class</option>
            @foreach ($classes as $className)
                <option value="{{ $className->class_id }}" {{ $className->class_id == $schedule->class_id ? 'selected' : ''}}>{{ $className->class_name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Level Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="level_id" id="level_id">
            <option value=""selected="true" disabled="true">Select Level</option>
            @foreach ($level as $levelName)
                <option value="{{ $levelName->level_id }}" {{ $levelName->level_id == $schedule->level_id ? 'selected' : ''}}>{{ $levelName->level }}</option>
            @endforeach

        </select>
    </div>

    <!-- Shift Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="shift_id" id="shift_id">
            <option value=""selected="true" disabled="true">Select Shift</option>
            @foreach ($shift as $shiftName)
                <option value="{{ $shiftName->shift_id }}" {{ $shiftName->shift_id == $schedule->shift_id ? 'selected' : ''}}>{{ $shiftName->shift }}</option>
            @endforeach
        </select>
    </div>

    <!-- Classroom Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="classroom_id" id="classroom_id">
            <option value=""selected="true" disabled="true">Select Classroom</option>
            @foreach ($classroom as $classroomName)
                <option value="{{ $classroomName->classroom_id }}" {{ $classroomName->classroom_id == $schedule->classroom_id ? 'selected' : ''}}>{{ $classroomName->classroom_name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Batch Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="batch_id" id="batch_id">
            <option value=""selected="true" disabled="true">Select Batch</option>
            @foreach ($batch as $batchName)
                <option value="{{ $batchName->batch_id }}" {{ $batchName->batch_id == $schedule->batch_id ? 'selected' : ''}}>{{ $batchName->batch }}</option>
            @endforeach
        </select>
    </div>

    <!-- Day Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="day_id" id="day_id">
            <option value=""selected="true" disabled="true">Select Day</option>
            @foreach ($day as $dayName)
                <option value="{{ $dayName->day_id }}"{{ $dayName->day_id == $schedule->day_id ? 'selected' : ''}} >{{ $dayName->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Time Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="time_id" id="time_id">
            <option value=""selected="true" disabled="true">Select Time</option>
            @foreach ($time as $timeName)
                <option value="{{ $timeName->time_id }}" {{ $timeName->time_id == $schedule->time_id ? 'selected' : ''}}>{{ $timeName->time }}</option>
            @endforeach
        </select>
    </div>

    <!-- Semester Id Field -->
    <div class="form-group col-sm-6">
        <select class="form-select" name="semester_id" id="semester_id">
            <option value=""selected="true" disabled="true">Select Semester</option>
            @foreach ($semester as $semesterName)
                <option value="{{ $semesterName->semester_id }}" {{ $semesterName->semester_id == $schedule->semester_id ? 'selected' : ''}}>{{ $semesterName->semester_name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Status Field -->
    <div class="form-group col-sm-6">
        <div class="form-check" name="status" id="status">
            {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Start Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('start_date', 'Start Date:') !!}
        {!! Form::text('start_date', null, ['class' => 'form-control', 'id' => 'start_date']) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#start_date').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: false,
                sideBySide: false
            })

        </script>
    @endpush

    <!-- End Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('end_date', 'End Date:') !!}
        {!! Form::text('end_date', null, ['class' => 'form-control', 'id' => 'end_date']) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#end_date').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: false,
                sideBySide: false
            })


            // $('#course_id').on('change', function(e) {

            //     var course_id = $(this).val();
            //     var level = $('#level_id')
            //     $(level).empty();
                
            //     $.get( "{{route('dynamicLevel') }}", {course_id:course_id}, function(data) {
            //         // console.log(data);

            //         $.each(date,function(i,lvl){
            //             $(level).append($('<option/>',{
            //                 value : lvl.level_id,
            //                 text : lvl.level
            //             }))
            //         })
            //     })
                
            // })

            // $('#course_id').on('change', function(e) {
            //     console.log(e);

            //     var course_id = e.target.value;
            //     $('#level_id').empty();
            //     $.get('dynamicLevel?course_id =' +course_id, function(data) {
            //         console.log(data);

            //         $.each(data, function(index, lvl){
            //             $('#level_id').append('<option value " '+lvl.level_id+' ">'+lvl.level+' </option> ')
            //         });
            //     });

            // });

        </script>
    @endpush


</div>
