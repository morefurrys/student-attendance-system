<div class="table-responsive">
    <table class="table table-hover" id="teachers-table">
        <thead class="table-info">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Dob</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>Passport</th>
                <th>Status</th>
                {{-- <th>Date Registered</th> --}}
                {{-- <th>User Id</th> --}}
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->dob }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->nationality }}</td>
                    <td>{{ $teacher->passport }}</td>
                    <td>{{ $teacher->status }}</td>
                    {{-- <td>{{ $teacher->date_registered }}</td> --}}
                    {{-- <td>{{ $teacher->user_id }}</td> --}}
                    <td class="image"><img src="{{asset('teacher_images/' . $teacher->image)}}" alt="" class="rounded-circle"
                        width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
                    <td width="120">
                        {!! Form::open(['route' => ['teachers.destroy', $teacher->teacher_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('teachers.show', [$teacher->teacher_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="fas fa-eye"> View</i>
                            </a>
                            <a href="{{ route('teachers.edit', [$teacher->teacher_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="fas fa-edit"> Edit</i>
                            </a>
                            {!! Form::button('<i class="fas fa-trash-alt"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
