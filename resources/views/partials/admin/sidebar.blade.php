<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<div
    class="d-flex flex-column shadow-none bg-white p-3 text-primary position-lg-fixed w-100 w-lg-auto vh-lg-100 overflow-y-lg-auto shadow-sm sidebar-admin">

    <div class="d-flex justify-content-between align-items-center mb-lg-4">
        <a href="{{ route('dasbor') }}" class="d-flex text-decoration-none px-2">
            <img src="{{ asset('assets/img/logoseycisblue.png') }}" alt="Logo Seycis" class="me-1"
                style="max-width: 36px; object-fit: cover;">
            <span class="fs-4 fw-bold text-primary">Seycis</span>
        </a>

        <button class="navbar-toggler border-0 shadow-none d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#adminNavbarMenu" aria-controls="adminNavbarMenu" aria-expanded="false">
            <i class="fa-solid fa-bars fs-3 text-primary"></i>
        </button>
    </div>

    <!-- Container Menu di desktop muncul, di hp ilang -->
    <div class="collapse d-lg-flex flex-column flex-grow-1 mt-3 mt-lg-0" id="adminNavbarMenu">

        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="{{ route('dasbor') }}"
                    class="nav-link mb-2 text-primary {{ request()->is('admin/dasbor*') ? 'active text-white' : '' }}"
                    aria-current="page"><i class="fa-solid fa-house me-3 width-fixed"></i>Dasbor</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('karya') }}"
                    class="nav-link mb-2 text-primary {{ request()->is('admin/karya*') ? 'active text-white' : '' }}"
                    aria-current="page"><i class="fa-solid fa-lightbulb me-3 width-fixed"></i>Kelola Karya</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('berita') }}"
                    class="nav-link mb-2 text-primary {{ request()->is('admin/berita*') ? 'active text-white' : '' }}"
                    aria-current="page"><i class="fa-solid fa-newspaper me-3 width-fixed"></i>Kelola Berita</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('galeri') }}"
                    class="nav-link mb-2 text-primary {{ request()->is('admin/galeri*') ? 'active text-white' : '' }}"
                    aria-current="page"><i class="fa-solid fa-image me-3 width-fixed"></i>Kelola Galeri</a>
            </li>
        </ul>

        <ul class="nav nav-pills flex-column mt-lg-auto pt-3 pt-lg-0 border-top border-light-subtle border-lg-0">
            <li class="nav-item mt-2">
                <a href="{{ route('profil') }}"
                    class="nav-link mb-2 text-primary {{ request()->is('admin/profil*') || request()->is('admin/ubahprofil*') || request()->is('admin/kelolakatasandi*') || request()->is('admin/ubahkatasandi*') ? 'active text-white' : '' }}"
                    aria-current="page"><i class="fa-solid fa-user me-3 width-fixed"></i>Profil</a>
            </li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post"
                    onsubmit="return confirm('Apakah Anda yakin keluar dari akun ini?')">
                    @csrf
                    <button type="submit" class="nav-link text-danger w-100 text-start border-0 bg-transparent"><i
                            class="fa-solid fa-right-from-bracket me-3 width-fixed"></i>Keluar
                    </button>
                </form>
            </li>
        </ul>

    </div>
</div>

<style>
    @media (min-width: 992px) {
        .sidebar-admin {
            width: 256px !important;
            height: 100vh !important;
            position: fixed !important;
            top: 0;
            left: 0;
            overflow-y: auto;
            flex-shrink: 0;
        }

        .layout-sidebar {
            margin-left: 0 !important;
        }

        @media (min-width: 992px) {
            .layout-sidebar {
                margin-left: 256px !important;
            }
        }
    }
</style>