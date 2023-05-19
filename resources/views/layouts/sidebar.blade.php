<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard.home') }}"><img src="{{ asset('assets/img/logo-blue.png') }}" alt="">The
            Kost</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm ">
        <a href="{{ route('dashboard.home') }}"><img src="{{ asset('assets/img/logo-blue.png') }}" alt=""></a>
    </div>
    <ul class="sidebar-menu mt-5">
        @section('sidebar')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">General Dashboard</a></li>
                    <li><a class="nav-link" href="#">Ecommerce Dashboard</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('dashboard.rooms') }}">Data Kamar</a></li>
                    <li><a class="nav-link" href="{{ route('dashboard.members') }}">Data Penghuni</a></li>
                    <li><a class="nav-link" href="{{ route('dashboard.transaction') }}">Data Transaksi</a></li>
                    <li><a class="nav-link" href="{{ route('dashboard.users') }}">Data User</a></li>
                </ul>
            </li>
            {{-- @can('index-user')
                <li class="nav-item dropdown">
                    <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-users"></i><span>User List</span></a>
                </li>
            @endcan --}}
        @show
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>
