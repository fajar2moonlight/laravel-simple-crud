@extends('template/main')

@section('title','About')

@section('container')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Hello, this is {{ $name }}</h1>
        <p>Welcome to the about page. Hope you enjoy Laravel so far.</p>
        <p><a class="btn btn-primary btn-lg" href="https://codingovernight.com/laravel/" role="button">Learn more about laravel »</a></p>
    </div>
</div>
@endsection