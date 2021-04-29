<div class="table-responsive">
    <table class="table table-hover" id="admissions-table">
        <thead class="table-info">
            <tr>
                <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father Name</th>
        <th>Father Phone</th>
        <th>Mother Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Current Address</th>
        <th>Nationality</th>
        <th>Passport</th>
        <th>Status</th>
        {{-- <th>Date Registered</th> --}}
        {{-- <th>User Id</th> --}}
        <th>Faculty Name</th>
        <th>Department Name</th>
        <th>Batch Year</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admissions as $admission)
            <tr>
                <td>{{ $admission->roll_no }}</td>
            <td>{{ $admission->first_name }}</td>
            <td>{{ $admission->last_name }}</td>
            <td>{{ $admission->father_name }}</td>
            <td>{{ $admission->father_phone }}</td>
            <td>{{ $admission->mother_name }}</td>
            <td>{{ $admission->gender }}</td>
            <td>{{ $admission->email }}</td>
            <td>{{ $admission->dob }}</td>
            <td>{{ $admission->phone }}</td>
            <td>{{ $admission->address }}</td>
            <td>{{ $admission->current_address }}</td>
            <td>{{ $admission->nationality }}</td>
            <td>{{ $admission->passport }}</td>
            <td>{{ $admission->status }}</td>
            {{-- <td>{{ $admission->date_registered }}</td> --}}
            {{-- <td>{{ $admission->user_id }}</td> --}}
            <td>{{ $admission->faculty_name }}</td>
            <td>{{ $admission->department_name }}</td>
            <td>{{ $admission->batch }}</td>
            <td><img src="{{asset('student_images/' . $admission->image)}}" alt="" class="rounded-circle"
                width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
                <td width="120">
                    {!! Form::open(['route' => ['admissions.destroy', $admission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admission->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-eye"> View </i>
                        </a>
                        <a href="{{ route('admissions.edit', [$admission->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-edit"> Edit </i>
                        </a>
                        {!! Form::button('<i class="fas fa-trash-alt"> Delete </i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
