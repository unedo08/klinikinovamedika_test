<!DOCTYPE html>
<html>

<head>
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>
    <form action="/admin/obat/add" method="post" style="width: 30%" class="m-auto">
        @csrf
        <h2>Tambah Data Obat</h2>
        <div class="form-floating mb-2">
            <input type="text" class="form-control " name="nama" id="nama" placeholder="nama" />
            <label for="nama">Nama Obat:</label>
        </div>
        <div class="form-floating mb-2">
            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="jumlah" />
            <label for="jumlah">Jumlah</label>
        </div>
        <div class="form-floating mb-2">
            <input type="number" class="form-control " name="harga" id="harga" placeholder="harga" />
            <label for="harga">Harga</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">
                Tambah
            </button>
    </form>
</body>

</html>