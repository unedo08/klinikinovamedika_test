<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Portal Pasien</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-5" href="/portalPasien">Pasien</a>
                <form class="d-flex">
                    <a class="navbar-brand ms-3" href="/portalPasien/daftar">Buat Janji</a>
                    <a class="navbar-brand ms-3" href="/portalPasien/view">Informasi Transaksi</a>
                    <img src="..." class="img-fluid img-thumbnail" alt="gambar" style="border-radius: 50%" />
                </form>
            </div>
        </nav>
    </div>

        @yield('content')
        </div>
    </div>
</body>

</html>