@use(App\Models\User)
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-light"><b>FINK</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @auth
            @if (Auth::user()->role == User::ROLE_ADMIN)
            <div class="image">
                <img src="{{ asset('assets/img/logonf.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            @else
            <div class="image">
                <img src="{{ asset('assets/img/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            @endif
            @endauth
            @auth
            @if (Auth::check())
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                <span class="text-primary">{{ Auth::user()->role }}</span>
            </div>
            @endif
            @endauth
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Halaman Utama
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('profil') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                @auth
                @if (Auth::user()->role == User::ROLE_ADMIN)
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tabel Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('umkm/show') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Umkm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('provinsi/show') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Provinsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kab/show') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kabupaten Kota</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Table Data Tambahan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ url('kategori/show') }} " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ url('pembina/show') }} " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pembina</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @endauth

                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="nav-link"><i class="nav-icon fas fa-user"></i>{{ __('Logout') }}

                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>