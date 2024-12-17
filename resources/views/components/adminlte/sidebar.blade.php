<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('admin/dist/img/logoperpus.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">SIPERPUS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">

                <!-- Admin Panel -->
                {{-- @if(auth()->user()->hasRole('admin')) --}}
                <li class="nav-header">ADMIN PANEL</li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.books.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Manajemen Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.members.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Manajemen Anggota</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.borrowings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>Peminjaman Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.reports') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                {{-- @endif --}}

                <!-- Member Panel -->
                {{-- @if(auth()->user()->hasRole('member')) --}}
                <li class="nav-header">MEMBER PANEL</li>
                <li class="nav-item">
                    <a href="{{ route('member.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.books.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Cari Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.history.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>Riwayat Peminjaman</p>
                    </a>
                </li>
                {{-- @endif --}}

                <!-- Profile and Logout -->
                <li class="nav-header">AKUN</li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-left">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </button>
                    </form>
                </li>

            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
