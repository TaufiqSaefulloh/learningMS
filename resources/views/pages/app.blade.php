<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/main.css">
  <!-- Favicons -->
  <link href="{{ asset('img/logo.png') }}" rel='icon'>
  <link href="{{ asset('img/logo.png') }}" rel='icon'>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">

  <!-- cdn  -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

  <!-- Page Header  -->
  <nav class="navbar shadow-sm mb-2" style="background-color: #FFFF;">
    <div class="container-md">
      <a class="navbar-brand" href="#"> <img src="{{asset('img/LMS.png')}}" alt="logo">
      </a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pelatihan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Bantuan</a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-fill">
        <button class="btn btn-primary me-md-2" type="button">Daftar</button>
        <button type="button" class="btn btn-outline-primary">Masuk</button>
      </ul>
    </div>
  </nav>
  <!-- end page header  -->


  @yield('content')

  <!-- footer section start -->
  <section id="footer-sec" class="footer-sec section-bg" data-aos="fade-up">
    <footer id="footer" class="mb-5">
      <div class="ms-5 me-5">
        <div class="row">
          <div class="col-md-3">
            <a href="index.html"><img src="{{ asset('img/LMS.png') }}" alt="logo" class="img-fluid logo-footer"></a>
            <div class="footer-about mt-2">
              <p>Learning Management System Pusat Layananan Usaha Terpadu Koperasi dan Usaha Mikro, Kecil, dan Menengah (LMS PLUT-KUMKM) merupakan website yang memberikan pelayanan kepada UMKM berupa pelatihan-pelatihan online secara gratis untuk meningkatkan kemampuan dan keterampilan para pelaku UMKM.</p>
            </div>

          </div>
          <div class="col-md-3">
            <div class="useful-link">
              <h2>Menu</h2>
              <div class="use-links">
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeNx2ei_agZ_b2Le-jIuhUm4eN0AIsIQRnPdyecllkj9vE3Sw/viewform" target="_blank"><i class="fa-solid fa-angles-right"></i> Beranda</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeNx2ei_agZ_b2Le-jIuhUm4eN0AIsIQRnPdyecllkj9vE3Sw/viewform" target="_blank"><i class="fa-solid fa-angles-right"></i> Pelatihan</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeNx2ei_agZ_b2Le-jIuhUm4eN0AIsIQRnPdyecllkj9vE3Sw/viewform" target="_blank"><i class="fa-solid fa-angles-right"></i> Tentang Kami</a></li>
              </div>
            </div>

          </div>

          <div class="col-md-3">
            <div class="social-links">
              <h2>Ikuti Kami</h2>
              <div class="social-icons">
                <li><a target="_blank" href=""><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                <li><a target="_blank" href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                <li><a target="_blank" href=""><i class="fa-brands fa-youtube"></i> YouTube</a></li>
                <li><a target="_blank" href=""><i class="fa-brands fa-whatsapp"></i> WhatsApp</a></li>
                <li><a target="_blank" href=""><i class="bi bi-tiktok"></i> TikTok</a></li>
              </div>
            </div>

          </div>
          <div class="col-md-3">
            <div class="address">
              <h2>Alamat</h2>
              <div class="address-links">
                <li class="address1"><i class="fa-solid fa-location-dot"></i>Alamat</li>
                <li><i class="fa-solid fa-phone"></i>Handphone</li>
                <li><i class="fa-solid fa-envelope"></i>email</li>
                <li><i class="fa-solid fa-map"></i> Peta Lokasi</li>
                <iframe src="" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

    </footer>
    <!-- footer section end -->
  </section>
  <!-- footer copy right section start -->
  <div class="copyright">
    <svg viewBox="0 -20 700 110" width="100%" height="110" preserveAspectRatio="none">
      <path transform="translate(0, -20)" d="M0,10 c80,-22 240,0 350,18 c90,17 260,7.5 350,-20 v50 h-700" fill="#15A999" />
      <path d="M0,10 c80,-18 230,-12 350,7 c80,13 260,17 350,-5 v100 h-700z" fill="#FFA915" />
    </svg>
    <p class="copyright-text">&copy; 2024 <strong><span>PLUT Banyumas</span></strong>. All Rights Reserved</p>
  </div>
  <!-- footer copy right section end -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- script  -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/js.js') }}"></script>

  <!-- cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset ('vendor/swiper/swiper-bundle.min.js')}}"></script>
</body>

</html>