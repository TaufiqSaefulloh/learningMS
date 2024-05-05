@extends('admins.dashboard')

@section('content')
<div class="pagetitle">
    <h1>Halaman Materi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Materi</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('materis.create') }}" type="button" class="btn btn-success mb-3">TAMBAH MATERI</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">TANGGAL</th>
                                    <th scope="col">JUDUL/TEMA</th>
                                    <th scope="col">FILE</th>
                                    <th scope="col">KETERANGAN</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>date</td>
                                    <td>judul</td>
                                    <td class="text-center">
                                        <a href="{{asset('img/logo.png')}}" target="_blank">Buka File PDF</a>
                                    </td>
                                    <td>isi</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                            <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="alert alert-danger">
                                    Tidak ada pengumuman yang ditambahkan.
                                </div>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection