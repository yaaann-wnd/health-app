<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIK Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-4 shadow">
        <div class="container">
            <a class="navbar-brand" href="#">TIK Health</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="mb-4">
            <div class="mb-3 text-center">
                <h3>Artikel</h3>
            </div>
            @foreach($data as $d)
            <div class="card mb-3 p-3">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <img src="{{ asset('storage/'.$d->foto) }}" class="rounded" width="75px" alt="">
                    </div>
                    <div>
                        <div class="row">
                            <h4>{{ $d->judul }}</h4>
                        </div>
                        <div class="row">
                            <span>Kategori : <span class="text-capitalize fw-semibold">{{ $d->kategori->kategori }}</span></span>
                        </div>
                        <div class="row">
                            <span>Tanggal artikel : {{ $d->tgl_artikel }}</span>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <span><a href="{{ route('beranda.show', $d->id) }}" class="btn btn-outline-primary">Lihat selengkapnya</a></span>
                    </div>
                </div>
            </div>
            @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
