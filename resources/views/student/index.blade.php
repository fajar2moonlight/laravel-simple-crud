@extends('template/main')

@section('title','Student pages')

@section('container')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<p class="h3">Student List</p>
<a class="btn btn-primary my-3" href="students/create">Create New Student</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Major</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($student as $mhs)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
                <a href="students/{{ $mhs->id }}" class="badge badge-success">Detail</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection