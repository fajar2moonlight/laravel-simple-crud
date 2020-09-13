@extends('template/main')

@section('title','Detail Student pages')

@section('container')
<p class="h3">Show Detail Student</p>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $student->nama }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
    <p class="card-text">{{ $student->email.', '.$student->jurusan }}</p>
    <a href="/students/{{ $student->id }}/edit" class="btn btn-info">Edit</a>
    <form action="{{ $student->id }}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ url('/students') }}" class="card-link">Back</a>
  </div>
</div>
@endsection