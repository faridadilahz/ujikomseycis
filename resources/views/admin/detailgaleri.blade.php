<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>{{ $galeris->judulgaleri }} - Seycis</title>
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
            <div class="mx-auto" style="max-width: 850px">
                <div class="mb-4 text-start">
                    <a href="/admin/galeri" class="text-decoration-none text-secondary mb-2"><i
                            class="fa-solid fa-arrow-left me-2"></i>Kembali</a>
                </div>
                <div class="d-flex text-center flex-column justify-content-center align-items-center">

                    <p class="text-secondary mb-4"><i
                            class="fa-regular fa-calendar me-2"></i>{{ $galeris->created_at->locale('id')->translatedFormat('d F Y') }}
                    </p>
                    <h2 class="fw-bold mb-4" style="max-width: 850px;">{{ $galeris->judulgaleri }}</h2>
                    <img src="{{ asset('storage/' . $galeris->gambargaleri) }}" alt="" class="rounded-3 mb-3 img-fluid"
                        style="max-width: 850px; width: 100%; height: auto;">
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
