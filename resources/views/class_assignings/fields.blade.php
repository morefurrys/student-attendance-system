

<!-- Teacher Id Field -->
<div class="form-group col-sm-12">
    <select class="form-select" name="teacher_id" id="">
        <option value=""selected="true" disabled="true">Select Teacher</option>
        @foreach ($teacher as $teacherName)
            <option value="{{ $teacherName->teacher_id }}">{{ $teacherName->first_name }} {{ $teacherName->last_name }}</option>
        @endforeach
    </select>
</div>
@push('scripts')
<script>
    $(document).on('click', '.show-modal', function(){
        $('.modal-title').text('ClassAssigning Details');

        $('.form-horizontal').show();
        $('#show-id').text($(this).data('id'));
        $('#first_name').text($(this).data('fname'));
        $('#last_name').text($(this).data('lname'));
        $('#semester_name').text($(this).data('semester_name'));
        $('#level').text($(this).data('level'));
        $('#shift').text($(this).data('shift'));
        $('#classroom_name').text($(this).data('classroom_name'));
        $('#batch').text($(this).data('batch'));
        $('#time').text($(this).data('time'));
        $('#course_name').text($(this).data('course_name'));
        $('#batch').text($(this).data('batch'));
        $('#name').text($(this).data('name'));
        $('#class_name').text($(this).data('class_name'));
        $('#show-created-at').text($(this).data('created_at'));
        $('#BtnShow').modal('show');

    })
 </script>
 @endpush