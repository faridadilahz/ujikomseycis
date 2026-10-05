<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Edit Galeri - Seycis</title>
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
            <div class="container-fluid" style="max-width: 900px;">

                <form action="{{ route('galeri.update', $galeris->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if ($galeris->gambargaleri)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $galeris->gambargaleri) }}" class="rounded-3"
                                style="max-height: 144px; object-fit: cover;">
                        </div>
                    @endif
                    <div class="mb-4">
                        <label for="gambargaleri" class="form-label text-dark fw-semibold">Gambar Galeri</label>
                        <input type="file" name="gambargaleri" id="gambargaleri" class="form-control"
                            accept="image/*">
                    </div>

                    <div class="mb-4">
                        <label for="judulgaleri" class="form-label text-dark fw-normal mb-2">Judul Galeri</label>
                        <div class="position-relative">
                            <input type="text" name="judulgaleri" id="judulgaleri"
                                class="form-control border-0 rounded-3 py-3 pe-5"
                                placeholder="Masukkan judul galeri disini"
                                value="{{ old('judulgaleri', $galeris->judulgaleri) }}"">
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary text-white">Posting</button>
                        <a href="{{ route('galeri') }}" class="btn btn-outline-primary">Batal</a>
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
