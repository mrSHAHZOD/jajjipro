<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">

            <li class="dropdown @yield('dashboard')">
                <a href="/a-panel" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown @yield('infos')">
                <a href="{{ route('admin.infos.index') }}"><i data-feather="briefcase"></i><span>infos</span></a>
            </li>

            <li class="dropdown @yield('groups')">
                <a href="{{ route('admin.groups.index') }}"><i data-feather="briefcase"></i><span>Groups</span></a>
            </li>
            <li class="dropdown @yield('regions')">
                <a href="{{ route('admin.teachers.index') }}"><i data-feather="briefcase"></i><span>Teachers</span></a>
            </li>
            <li class="dropdown @yield('regions')">
                <a href="{{ route('admin.coments.index') }}"><i data-feather="briefcase"></i><span>Coments</span></a>
            </li>
            <li class="dropdown @yield('regions')">
                <a href="{{ route('admin.blogs.index') }}"><i data-feather="briefcase"></i><span>BLOGS</span></a>
            </li>
        </ul>
    </aside>
</div>
