@extends('template/main')

@section('title','Home pages')

@section('container')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Welcome to the campus</h1>
        <p>Website ini adalah contoh simple penggunaan Laravel Bootstrap dalam membuat portal lengkap dengan fungsi CRUD nya.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Apa itu Laravel</h2>
            <p>Laravel merupakan salah satu framework php terpopuler saat ini. </p>
            <p><a class="btn btn-secondary" href="https://codingovernight.com/laravel/" role="button">Pelajari &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>About</h2>
            <p>Ini merupakan demo atau contoh halaman statis. Feel free to edit. </p>
            <p><a class="btn btn-secondary" href="{{ url('/about')}}" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Mahasiswa</h2>
            <p>Pada halaman ini terdapat contoh aplikasi CRUD. Check this out.</p>
            <p><a class="btn btn-secondary" href="{{ url('/mahasiswa')}}" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <hr>
</div> <!-- /container -->

@endsection