<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<header class="d-flex justify-content-between rounded-3 align-items-center bg-white p-3 mb-4">

    <div class="topbar-left">
        <h4 class="fw-bold">Kelola Karya</h4>
        <p class="text-secondary">Tambah, ubah, atau hapus postingan karya jurusan sekolah.</p>
    </div>

    <div class="topbar-right d-flex align-items-center gap-3">
        <a href="{{ route('karya.posting') }}" class="btn btn-primary btn-fab"><i
                class="fa-solid fa-plus me-0 me-lg-2 fa-lg"></i>
            <span class="d-none d-lg-inline">Posting Karya</span>
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
