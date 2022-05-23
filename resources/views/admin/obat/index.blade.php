@extends('layouts.navbar')

@section('content')
    <div>
        <div class="container-fluid">
            <h2>Data Obat</h2>
            <form class="d-flex">
                <button type="button" class="btn btn-success"><a href="/admin/obat/add" style="color: white">Add</a></button>
            </form>
        </div>
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody> 
            @foreach ($obat as $p)
            <tr>
                <th>{{$p->id}}</th>
                <td>{{$p->nama}}</td>
                <td>{{$p->jumlah}}</td>
                <td>Rp. {{$p->harga}},-</td>
                <td>
                    <button type="button" class="btn btn-success"><a href="obat/edit/{{ $p->id }}" style="color: white">Edit</a></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger"><a href="obat/delete/{{ $p->id }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" style="color: white">Delete</a></button>
                </td>
            </tr>                  
            @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
            
                