@extends('pages.app')
@guest
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/logo paud srambi.png')}}" rel='icon'>
    <link href="{{asset('img/logo paud srambi.png')}}" rel='icon'>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Start #Main -->
    <main>
        <div class="container">
            @section('content')
            <div class="pagetitle">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Beranda</li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Daftar</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">



                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <!-- <h5 class="card-title text-center pb-0 fs-4">UNtuk USER </h5> -->
                                        <!-- Logo -->
                                        <div class="d-flex justify-content-center py-4">
                                            <p href="index.html" class="logo d-flex align-items-center w-auto">
                                                <img src="{{asset('img/LMS.png')}}" alt="logo">
                                                <!-- <span class="d-none d-lg-block">PLUT Banyumas</span> -->
                                            </p>
                                        </div>
                                        <!-- End Logo -->
                                    </div>

                                    <form class="row g-3 needs-validation" action="" method="POST" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" placeholder="name@example.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="PlutBanyumas@gmail.com" value="{{ old('email') }}" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="nomor" class="form-label">Nomor Handphone</label>
                                            <input type="text" class="form-control" id="nomor" placeholder="0888xxxxxxx">
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Kata Sandi</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="******" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Masukan Ulang Kata Sandi</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="******" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        @if($errors->any())
                                        @foreach($errors->all() as $err)
                                        <p class="alert alert-danger">{{ $err }}</p>
                                        @endforeach
                                        @endif

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Daftar</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                Belum memiliki akun? <a href="">Daftar</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            @endsection
        </div>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
@endguest