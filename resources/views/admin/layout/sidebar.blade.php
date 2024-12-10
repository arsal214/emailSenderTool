
<li class="nav-item-header pt-0">
    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
    <i class="ph-dots-three sidebar-resize-show"></i>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : ''}}" href="{{ route('dashboard') }}">
        <i class="ph-house"></i>
        <span>Dashboard</span>
    </a>
</li>
@canany(['roles-list', 'users-list'])
<li class="nav-item-header">
    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Access Management</div>
    <i class="ph-dots-three sidebar-resize-show"></i>
</li>
@endcanany
@can('roles-list')
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('roles*') ? 'active' : ''}}" href="{{ route('roles.index') }}">
        <i class="ph-atom"></i>
        <span>Roles</span>
    </a>
</li>
@endcan
@can('users-list')
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('users*') ? 'active' : ''}}" href="{{ route('users.index') }}">
        <i class="ph-users"></i>
        <span>Users</span>
    </a>
</li>
@endcan
@canany(['customers-list','audits-list', 'logs-list'])
<li class="nav-item-header">
    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Configuration</div>
    <i class="ph-dots-three sidebar-resize-show"></i>
</li>
@endcanany
@can('customers-list')
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('customers*') ? 'active' : ''}}" href="{{ route('customers.index') }}">
        <i class="ph-user-circle"></i>
        <span>Customers</span>
    </a>
</li>
@endcan


@can('templates-list')
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('templates*') ? 'active' : ''}}" href="{{ route('templates.index') }}">
        <i class="ph-book"></i>
        <span>Templates</span>
    </a>
</li>
@endcan


@can('templates-list')
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('email-sends*') ? 'active' : ''}}" href="{{ route('email-sends.create') }}">
        <i class="ph-envelope"></i>
        <span>Send Email</span>
    </a>
</li>
@endcan



@can('audits-list')
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('audits*') ? 'active' : ''}}" href="{{ route('audits.index') }}">
        <i class="ph-diamonds-four"></i>
        <span>Audit</span>
    </a>
</li>
@endcan
@can('logs-list')
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('logs*') ? 'active' : ''}}" href="{{ route('logs') }}" target="_blank">
        <i class="ph-bug"></i>
        <span>Errors</span>
    </a>
</li>
@endcan
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('settings*') ? 'active' : ''}}" href="{{ route('settings.index') }}">
        <i class="ph-gear"></i>
        <span>Settings</span>
    </a>
</li>
