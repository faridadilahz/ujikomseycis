<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<div class="row g-4">
    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><i class="fa-solid fa-lightbulb fa-lg"></i></div>
                <h1 class="card-title text-primary fw-bold">{{ $totalKarya }}</h1>
                <p class="text-secondary">Jumlah Posting Karya</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><i class="fa-solid fa-newspaper fa-lg"></i></div>
                <h1 class="card-title text-primary fw-bold">{{ $totalBerita }}</h1>
                <p class="text-secondary">Jumlah Posting Berita</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><i class="fa-solid fa-image fa-lg"></i></div>
                <h1 class="card-title text-primary fw-bold">{{ $totalGaleri }}</h1>
                <p class="text-secondary">Jumlah Posting Galeri</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><i class="fa-solid fa-star fa-lg"></i></div>
                <h1 class="card-title text-primary fw-bold">{{ $averageRating }}</h1>
                <p class="text-secondary">Rating Pengguna</p>
            </div>
        </div>
    </div>
</div>