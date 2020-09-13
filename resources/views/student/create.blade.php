@extends('template/main')

@section('title','Detail Student pages')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <p class="h3">Create New Student</p>
      <form method="post" action="{{ url('/')}}/students">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
          <div id="validationServer03Feedback" class="invalid-feedback">
            @error('nama') {{$message}} @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input name="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" value="{{ old('nrp') }}">
          <div id="validationServer03Feedback" class="invalid-feedback">
            @error('nrp') {{$message}} @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" value="{{ old('email') }}">
          <div id="validationServer03Feedback" class="invalid-feedback">
            @error('email') {{$message}} @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input name="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" value="{{ old('jurusan') }}">
          <div id="validationServer03Feedback" class="invalid-feedback">
            @error('jurusan') {{$message}} @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection