@extends('admins.dashboard')

@section('content')
<div class="pagetitle">
  <h1>Halaman Berita</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item">Pages</li>
      <li class="breadcrumb-item active">Berita</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- main code  -->
<section class="section profile">
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="" type="button" class="btn btn-success mb-3">TAMBAH BERITA</a>
  </div>

  @if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif


  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/logo.png')}}" class="bd-placeholder-img img-fluid rounded-start" style="width: 18rem;">
      </div>

      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Judul</h5>
          <p class="card-text">Konten
          </p>
          <p class="card-text"><small class="text-muted">{{ date('d F Y') }}</small></p>
        </div>

        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
          <a href="" class="btn btn-sm btn-primary">EDIT</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
        </form>
      </div>
    </div>
  </div>
  <div class="alert alert-danger">
    Berita belum Tersedia.
  </div>
</section>
@endsection