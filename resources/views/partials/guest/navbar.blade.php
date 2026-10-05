    <div class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top z-3 p-3 px-0 px-lg-5">
        <div class="container-fluid position-relative">
            <a href="/beranda" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('assets/img/logoseyciswhite.png') }}" class="me-1" style="max-width: 36px; object-fit: cover;">
                <p class="navbar-brand fw-bold mb-0">Seycis</p>
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item-active me-lg-4">
                        <a href="/beranda"
                            class="nav-link {{ request()->is('beranda*') || request()->is('/') ? 'active' : '' }}">Beranda</a>
                    </li>
                    <li class="nav-item-active me-lg-4">
                        <a href="/karya"
                            class="nav-link {{ request()->is('karya*') || request()->is('/') ? 'active' : '' }}">Karya Jurusan</a>
                    </li>
                    <li class="nav-item-active me-lg-4">
                        <a href="/berita"
                            class="nav-link {{ request()->is('berita*') || request()->is('/') ? 'active' : '' }}">Berita</a>
                    </li>
                    <li class="nav-item-active me-lg-4">
                        <a href="/galeri"
                            class="nav-link {{ request()->is('galeri*') || request()->is('/') ? 'active' : '' }}">Galeri</a>
                    </li>
                </ul>


                <div class="text-center">
                    <a href="/login" class="btn btn-light fw-semibold text-primary">Masuk</a>
                </div>
            </div>
        </div>
    </div>