<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link text-center">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.index') }}" class="nav-link {{ Request::is('produk*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-shopping-basket"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="riwayat-pembayaran.html" class="nav-link">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                            Riwayat Pembayaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="data-pesanan.html" class="nav-link">
                        <i class="nav-icon fa fa-list-ul"></i>
                        <p>
                            Data Pesanan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="data-user.html" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
