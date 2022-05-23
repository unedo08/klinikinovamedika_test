<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    </head>
<body>
 	@foreach($obat as $p)
	<form action="/admin/obat/edit" method="post" style="width: 30%" class="m-auto">
		@csrf
        <input type="hidden" name="id" value="{{$p->id}}">
        <h2>Edit Data Obat</h2>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name='nama' required = 'required' value="{{$p->nama}}"\>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name='jumlah' required = 'required' value="{{$p->jumlah}}"\>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name='harga' required = 'required' value="{{$p->harga}}"\>
        </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">
            Update
        </button>
	</form>
	@endforeach
		
 
</body>
</html>