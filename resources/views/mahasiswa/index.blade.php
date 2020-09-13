@extends('template/main')

@section('title','Mahasiswa pages')

@section('container')
<p class="h3">Daftar Mahasiswa</p>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Nrp</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nrp }}</td>
            <td>{{ $mhs->email }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
                <a href="#" class="badge badge-primary">Edit</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection