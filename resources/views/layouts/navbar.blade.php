<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Klinik</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-5" href="/">Admin</a>
                <form class="d-flex">
                    <a class="navbar-brand ms-5" href="/logout">Logout</a>
                </form>
            </div>
        </nav>
    </div>
    <div class="mt-3"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-1 me-5">
                <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/user">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/obat">Obat</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>