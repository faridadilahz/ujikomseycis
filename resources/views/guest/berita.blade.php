<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Berita - Seycis</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="icon" type="image/png" href="../assets/img/logoseycisblue.png">
</head>

<body>
    <header>
        @include('partials.guest.navbar')
    </header>
    <main class="mt-5 pt-6" style="background-color: #f5f5f5;">
        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-5 py-5">
            <div class="container">
                <h2 class="fw-bold mb-3">Berita Seycis</h2>
                <div class="d-flex justify-content-center align-items-center w-100 px-3 px-md-0">
                    <form action="{{ url()->current() }}" method="GET" class="d-flex gap-2 mb-4 w-100"
                        style="max-width: 580px;">
                        <input type="text" name="search" class="form-control border-0 rounded-3 p-2 p-md-3 px-3 px-md-4 flex-grow-1"
                            placeholder="Cari..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary px-3">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        @if (request('search'))
                            <a href="{{ url()->current() }}"
                                class="btn btn-outline-secondary px-3 d-flex align-items-center justify-content-center"><i
                                    class="fa-solid fa-close"></i></a>
                        @endif
                    </form>
                </div>
                <div class="row g-4 justify-content-center">
                    @include('partials.guest.cardberita')
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('partials.guest.footer')
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
