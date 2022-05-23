@extends('layouts.navbar')

@section('content')
<div>
    <div class="container-fluid">
        <h2>Data Pegawai</h2>
        <form class="d-flex">
            <button type="button" class="btn btn-success"><a href="/admin/user/add" style="color: white">Add</a></button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $p)
            <tr>
                <th>{{$p->id}}</th>
                <td>{{$p->name}}</td>
                <td>{{$p->username}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->role}}</td>
                <td>
                    <button type="button" class="btn btn-success"><a href="user/edit/{{ $p->id }}" style="color: white">Edit</a></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger"><a href="user/delete/{{ $p->id }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" style="color: white">Delete</a></button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection