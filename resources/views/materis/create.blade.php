@extends('admin.dashboard')

@section('content')
<div class="pagetitle">
  <h1>Tambah Berita</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item">Pages</li>
      <li class="breadcrumb-item active">Tambah Berita</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- main code  -->
<div class="row">
  <div class="col-md-12">
    <div class="card border-0 shadow rounded">
      <div class="card-body">
        <form action="{{ route('kontens.store') }}" method="POST" enctype="multipart/form-data">

          @csrf

          <div class="form-group">
            <label class="font-weight-bold">JUDUL/TEMA</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Pengumuman">

            <!-- error message untuk judul -->
            @error('judul')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label class="font-weight-bold">FILE</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" name="file">

            <!-- error message untuk file -->
            @error('file')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label class="font-weight-bold">KETERANGAN</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan keterangan">

            <!-- error message untuk keterangan -->
            @error('keterangan')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>

          <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
          <a href="{{ route('materis.materi') }}" class="btn btn-md btn-warning">Batal</a>


        </form>
      </div>
    </div>
  </div>
</div>
@endsection