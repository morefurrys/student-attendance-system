<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $roll->student_id }}</p>
</div>

<!-- Username Field -->
<div class="col-sm-12">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $roll->username }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $roll->password }}</p>
</div>

<!-- Login Time Field -->
<div class="col-sm-12">
    {!! Form::label('login_time', 'Login Time:') !!}
    <p>{{ $roll->login_time }}</p>
</div>

<!-- Logout Time Field -->
<div class="col-sm-12">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    <p>{{ $roll->logout_time }}</p>
</div>

