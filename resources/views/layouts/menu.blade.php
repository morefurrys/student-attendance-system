<li class="treeview">
    <a href="#">
        <i class="las la-igloo">
            <span>General</span>
        </i>
        <span class="pull-right-container">
            <i class="la la-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">


<li class="nav-item">
    <a href="{{ route('academics.index') }}" class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
        <p>Academics</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admissions.index') }}" class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
        <p>Admissions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('attendances.index') }}" class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
        <p>Attendances</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('batches.index') }}" class="nav-link {{ Request::is('batches*') ? 'active' : '' }}">
        <p>Batches</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classrooms.index') }}" class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
        <p>Classrooms</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classes.index') }}" class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
        <p>Classes</p>
    </a>
</li>

</li><li class="nav-item">
    <a href="{{ route('classAssignings.index') }}"
       class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
        <p>Class Assignings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <p>Courses</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('days.index') }}" class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
        <p>Days</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('departments.index') }}"
       class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
        <p>Departments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('faculties.index') }}"
       class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
        <p>Faculties</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('levels.index') }}" class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
        <p>Levels</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('semesters.index') }}" class="nav-link {{ Request::is('semesters*') ? 'active' : '' }}">
        <p>Semesters</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('schedules.index') }}"
       class="nav-link {{ Request::is('schedules*') ? 'active' : '' }}">
        <p>Schedules</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('shifts.index') }}" class="nav-link {{ Request::is('shifts*') ? 'active' : '' }}">
        <p>Shifts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('teachers.index') }}" class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <p>Teachers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('times.index') }}" class="nav-link {{ Request::is('times*') ? 'active' : '' }}">
        <p>Times</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transactions.index') }}"
        class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
        <p>Transactions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>
</ul>


{{-- <li class="nav-item">
    <a href="{{ route('rolls.index') }}"
       class="nav-link {{ Request::is('rolls*') ? 'active' : '' }}">
        <p>Rolls</p>
    </a>
</li> --}}


{{-- <li class="nav-item">
    <a href="{{ route('statuses.index') }}"
       class="nav-link {{ Request::is('statuses*') ? 'active' : '' }}">
        <p>Statuses</p>
    </a>
</li> --}}





