{{-- <!-- Schedule Id Field -->
<div class="col-sm-12">
    {!! Form::label('schedule_id', 'Schedule Id:') !!}
    <p>{{ $classAssigning->schedule_id }}</p>
</div>

<!-- Teacher Id Field -->
<div class="col-sm-12">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $classAssigning->teacher_id }}</p>
</div> --}}

<div class="modal fade" id="BtnShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header-show">
                <h4 class="modal-title" ><i class="fas fa-user" aria-hidden="true">
                </i></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="classAssignings-table">
                    <thead class="table table-info">
                        <tr>
                            <th>Teacher</th>
                            <th>Semester</th>
                            <th>Course Name</th>
                            <th>Details</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <input type="hidden" id="show-id">
                            <td class="col-md-2"><b id="first_name"></b><b id="last_name"></b></td>
                            <td class="col-md-2"><b id="semester_name"></b></td>
                            <td class="col-md-3"><b id="course_name"></b></td>
                            <td>
                                <b id="level"></b> | <b id="time"></b>
                                <b id="name"></b> | <b id="class_name"></b>
                                <b id="shift"></b> | <b id="batch"></b>
                                <b id="classroom_name"></b>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

