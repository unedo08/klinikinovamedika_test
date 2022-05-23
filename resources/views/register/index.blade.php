<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Klinik</title>
</head>
<body>
    <form action="/register" method="post" style="width: 30%" class="m-auto">
        @csrf
        <h2>Daftar Akun</h2>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" name="name" id="name" placeholder="name" />
            <label for="name">Nama Lengkap:</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" name="username" id="username" placeholder="username" />
            <label for="username">Username:</label>
        </div>
        <div class="form-floating mb-2">
            <input type="email" class="form-control" name="email" id="email" placeholder="email" />
            <label for="email">Email:</label>
        </div>
        <div class="form-floating mb-2">
            <input type="password" class="form-control" name="password" id="password" placeholder="password" />
            <label for="password">Password:</label>
        </div>      
        
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">
                Daftar
        </button>
    </form>
</body>
</html>