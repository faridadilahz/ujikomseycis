<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Ubah Kata Sandi - Seycis</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logoseycisblue.png') }}">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="d-flex flex-column flex-lg-row min-vh-100">
        @include('partials.admin.sidebar')
        <div class="flex-grow-1 p-4 layout-sidebar" style="background-color: #f5f5f5;">
            <div class="container-fluid">

                <form action="{{ route('admin.updatekatasandi') }}" method="POST">
                    @csrf
                    @method("PUT")

                    <div class="mb-4">
                        <label for="current_password" class="form-label text-dark fw-normal mb-2">Masukkan Kata Sandi Saat Ini</label>
                        <div class="position-relative">
                            <input type="password" name="current_password" id="current_password" class="form-control border-0 rounded-3 py-3 pe-5" style="max-width: 360px;"
                                placeholder="Masukkan kata sandi saat ini" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-dark fw-normal mb-2">Masukkan Kata Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password" name="password" id="password" class="form-control border-0 rounded-3 py-3 pe-5" style="max-width: 360px;"
                                placeholder="Masukkan kata sandi baru" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-dark fw-normal mb-2">Konfirmasi Kata Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control border-0 rounded-3 py-3 pe-5" style="max-width: 360px;"
                                placeholder="Konfirmasi kata sandi baru" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <button type="submit" class="btn btn-primary fw-semibold me-2">Simpan Kata Sandi Baru</button>
                        <a href="{{ route('admin.kelolakatasandi') }}" class="btn btn-outline-primary fw-semibold">Batal</a>
                    </div>
                </form>
            </div>
        </div>

        @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-3 border-0 shadow-sm" role="alert">
        <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
