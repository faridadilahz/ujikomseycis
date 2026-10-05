<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Profil - Seycis</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoseycisblue.png') }}">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="d-flex flex-column flex-lg-row min-vh-100">
        @include('partials.admin.sidebar')
        <div class="flex-grow-1 p-4 px-4 layout-sidebar" style="background-color: #f5f5f5;">

            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="row g-4">

                    <div class="col-lg-4">
                        <div class="card border-0 rounded-3 shadow-sm h-100">
                            <div
                                class="card-body d-flex flex-column justify-content-center align-items-center text-center p-4">
                                <img src="../assets/img/logoSeycisblue.png" class="rounded-3 mb-3"
                                    style="max-width: 140px;">
                                <h4 class="card-title fw-bold mb-1">{{ $user->name ?? 'Admin Seycis' }}</h4>
                                <p class="text-secondary mb-2">{{ $user->email ?? 'adminseycis@gmail.com' }}</p>
                                <a href="{{ route('admin.ubahprofil') }}" class="text-primary">Edit</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="card border-0 rounded-3 shadow-sm mb-3">
                            <a href="{{ route('admin.kelolakatasandi') }}" class="text-decoration-none">
                                <div class="card-body p-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold mb-1 text-primary"><i class="fa-solid fa-key me-2"></i>Kelola
                                            Kata Sandi</h5>
                                        <p class="text-secondary mb-0">Ubah kata sandi akun untuk menjaga keamanan.</p>
                                    </div>
                                    <i class="fa-solid fa-chevron-right text-secondary fs-5"></i>
                                </div>
                            </a>
                        </div>

                        <div class="card border-0 rounded-3 shadow-sm mb-3">
                            <form action="{{ route('logout') }}" method="post"
                            onsubmit="return confirm('Apakah Anda yakin keluar dari akun ini?')">
                            @csrf
                            <button type="submit" class="btn btn-danger text-start w-100 p-0 border-0 shadow-none">
                                <div class="card-body p-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold mb-0 text-white"><i class="fa-solid fa-right-from-bracket me-2"></i>Keluar dari Akun</h5>
                                    </div>
                                    <i class="fa-solid fa-chevron-right text-secondary fs-5 text-white"></i>
                                </div>
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
