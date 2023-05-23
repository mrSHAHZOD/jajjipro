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


            <li class="dropdown @yield('infos')">
                <a href="{{ route('admin.categories.index') }}"><i data-feather="briefcase"></i><span>Categora</span></a>
            </li>


            <li class="dropdown @yield('infos')">
                <a href="{{ route('admin.posts.index') }}"><i data-feather="briefcase"></i><span>Postlar</span></a>
            </li>

            <li class="dropdown @yield('infos')">
                <a href="{{ route('admin.numbers.index') }}"><i data-feather="briefcase"></i><span>Raqamlar</span></a>
            </li>

            <li class="dropdown @yield('infos')">
                <a href="{{ route('admin.humans.index') }}"><i data-feather="briefcase"></i><span>Odamlar</span></a>
            </li>

        </ul>
    </aside>
</div>
