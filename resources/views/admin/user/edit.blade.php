<!DOCTYPE html>
<html lang="en">
    <head>
        <title>register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    </head>
    
    <body>
        @foreach ($user as $p)
        <form action="/register" method="post" style="width: 30%" class="m-auto">
            @csrf
            <h2>Edit Data Pasien</h2>
            <input type="hidden" value="{{$p->id}}" />
            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$p->name}}" />
                <label for="name">Nama Lengkap:</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{$p->username}}" />
                <label for="username">Username:</label>
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{$p->email}}" />
                <label for="email">Email:</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" name="password" id="password" placeholder="password" value="{{$p->password}}" />
                <label for="password">Password:</label>
            </div>
            <div class="form-floating mb-2">
                <select name="role" class="form-select" aria-label="Default select example" >
                        <option selected>{{$p->role}}</option>
                        <option value="dokter">Dokter</option>
                        <option value="admin">Admin</option>
                    </select>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">
                    Edit
                </button>
        </form>
        @endforeach
    </body>
</html>
