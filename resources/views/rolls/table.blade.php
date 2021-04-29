<div class="table-responsive">
    <table class="table" id="rolls-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Login Time</th>
        <th>Logout Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rolls as $roll)
            <tr>
                <td>{{ $roll->student_id }}</td>
            <td>{{ $roll->username }}</td>
            <td>{{ $roll->password }}</td>
            <td>{{ $roll->login_time }}</td>
            <td>{{ $roll->logout_time }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['rolls.destroy', $roll->roll_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rolls.show', [$roll->roll_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('rolls.edit', [$roll->roll_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
