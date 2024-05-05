@extends('admins.dashboard')

@section('content')
<div class="pagetitle">
    <h1>Daftar Aktifitas</h1>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item">Aktifitas</li>
        </ol>
    </nav>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Nama Aktifitas</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Kosong</td>
            <td>
                <img src="{{asset('img/logo.png')}}" alt="logo">
            </td>
            <td>Kosong</td>
            <td>
                <a href="" class="btn btn-primary mb-2">Edit</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection