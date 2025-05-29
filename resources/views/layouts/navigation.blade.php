<nav>
    <ul>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        
        @role('admin')
            <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
            <li><a href="{{ route('users.index') }}">Manage Users</a></li>
        @endrole

        @role('hr')
            <li><a href="{{ route('hr.dashboard') }}">HR Dashboard</a></li>
            <li><a href="{{ route('employees.index') }}">Manage Employees</a></li>
        @endrole

        @role('finance')
            <li><a href="{{ route('finance.dashboard') }}">Finance Dashboard</a></li>
            <li><a href="{{ route('budgets.index') }}">Manage Budgets</a></li>
        @endrole

        @role('programme-officer')
            <li><a href="{{ route('programme.dashboard') }}">Programme Dashboard</a></li>
            <li><a href="{{ route('programmes.index') }}">Manage Programmes</a></li>
        @endrole

        @role('sg')
            <li><a href="{{ route('sg.dashboard') }}">SG Dashboard</a></li>
            <li><a href="{{ route('reports.index') }}">View Reports</a></li>
        @endrole

        <li><a href="{{ route('profile') }}">Profile</a></li>
    </ul>
</nav> 