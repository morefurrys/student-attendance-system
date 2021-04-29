@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Schedule</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($schedule, ['route' => ['schedules.update', $schedule->schedule_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('schedules.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('schedules.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
        {{-- @push('scripts')
            <script type="text/javascript">
            $(document).on('click', '#Edit',function(){
                var scheduleid = &(this).data('id');

                //routing for this edit
                $.get("{{route('edit')}}",{scheduleid:scheduleid},function(data){
                    $("#course_id").val(data.course_id);
                    $("#class_id").val(data.class_id);
                    $("#level_id").val(data.level_id);
                    $("#shift_id").val(data.shift_id);
                    $("#classroom_id").val(data.classroom_id);
                    $("#batch_id").val(data.batch_id);
                    $("#day_id").val(data.day_id);
                    $("#time_id").val(data.time_id);
                    $("#semester_id").val(data.semester_id);
                    $("#start_date").val(data.start_date);
                    $("#end_date").val(data.end_date);
                     $("#id").val(data.id);
                    
                    
                    console.log(data);
                    
                })
            })

            </script>
        @endpush --}}
    </div>


@endsection
