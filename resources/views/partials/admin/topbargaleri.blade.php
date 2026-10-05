<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<header class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center bg-white p-3 mb-4 rounded-3 gap-3">

    <div class="topbar-left">
        <h4 class="fw-bold mb-1">Kelola Galeri</h4>
        <p class="text-secondary mb-0">Tambah, ubah, atau hapus postingan galeri sekolah.</p>
    </div>

    <div class="topbar-right d-flex align-items-center gap-2 w-100 w-lg-auto justify-content-between justify-content-lg-end">
        {{-- Search Bar Simpel --}}
        <form action="{{ url()->current() }}" method="GET" class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-0 me-lg-2">
            <div class="input-group">
                <input type="text" name="search" class="form-control bg-light border-0" placeholder="Cari galeri..." value="{{ request('search') }}">
                <button class="btn btn-light border-0" type="submit">
                    <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                </button>
                @if (request('search'))
                    <a href="{{ url()->current() }}" class="btn btn-light border-0">
                        <i class="fa-solid fa-xmark text-secondary"></i>
                    </a>
                @endif
            </div>
        </form>

        <a href="{{ route('galeri.posting') }}" class="btn btn-primary btn-fab text-nowrap"><i
                class="fa-solid fa-plus me-0 me-lg-2 fa-lg"></i>
            <span class="d-none d-lg-inline">Posting Galeri</span>
        </a>
    </div>
</header>

<style>
    @media (max-width: 992px) {
        .btn-fab {
            position: fixed !important;
            bottom: 24px;
            right: 24px;
            z-index: 2000;
            width: 64px;
            height: 64px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
    }
</style>