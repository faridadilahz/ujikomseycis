<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Ubah Profil - Seycis</title>
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

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('admin.updateprofil') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="form-label text-dark fw-normal mb-2">Username</label>
                        <div class="position-relative">
                            <input type="text" name="name" id="name"
                                class="form-control border-0 rounded-3 py-3 pe-5" style="max-width: 360px;"
                                value="{{ old('name', $user->name) }}" placeholder="Masukkan username" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label text-dark fw-normal mb-2">Alamat Email</label>
                        <div class="position-relative">
                            <input type="email" name="email" id="email"
                                class="form-control border-0 rounded-3 py-3 pe-5" style="max-width: 360px;"
                                value="{{ old('email', $user->email) }}" placeholder="Masukkan email" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <button type="submit" class="btn btn-primary fw-semibold me-2">Simpan Profil</button>
                        <a href="{{ route('profil') }}" class="btn btn-outline-primary fw-semibold">Batal</a>
                    </div>
                </form>
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
