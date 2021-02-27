@extends('layout.main')

@section('title', 'Form Ubah Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h1 class="mt-3">Ubah data Mahasiswa</h1>
			<form method="post" action="/students/{{$student->id}}">
			  @method('patch')
			  @csrf	
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama" value="{{ $student->nama }}">
			    @error('nama')
			    <div class="invalid-feedback">{{$message}}</div>
			    @enderror
			  </div>
			  <div class="form-group">
			    <label for="nrp">nrp</label>
			    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="NRP" name="nrp" value="{{ $student->nrp }}">
			    @error('nrp')
			    <div class="invalid-feedback">{{$message}}</div>
			    @enderror
			  </div>
			  <div class="form-group">
			    <label for="email">email</label>
			    <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{ $student->email }}">
			  </div>
			  <div class="form-group">
			    <label for="jurusan">jurusan</label>
			    <input type="text" class="form-control" id="jurusan" placeholder="jurusan" name="jurusan" value="{{ $student->jurusan }}">
			  </div>
			  <button type="submit" class="btn btn-success">SIMPAN</button>
			</form>
		</div>
	</div>
</div>
@endsection
