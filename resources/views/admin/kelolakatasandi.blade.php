<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Kelola Kata Sandi - Seycis</title>
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
        <div class="flex-grow-1 p-4 layout-sidebar" style="background-color: #f5f5f5;">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="mb-4">
                    <label class="form-label text-dark fw-normal mb-2">Kata Sandi Saat Ini</label>
                    <div class="position-relative">
                        <input type="password" class="form-control border-0 rounded-3 py-3 pe-5"
                            style="max-width: 360px;" value="********" readonly style="cursor: not-allowed;">
                    </div>
                </div>

                <div class="d-flex flex-row">
                    <a href="{{ route('admin.ubahkatasandi') }}" class="btn btn-primary fw-semibold me-2">Ubah Kata
                        Sandi</a>
                    <a href="{{ route('profil') }}" class="btn btn-outline-primary fw-semibold">Kembali</a>
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
