<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> --}}

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/remixicon/remixicon.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>The Kost</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">The Kost</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto py-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FACILITY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DATA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
                <div>
                    {{-- <a href="#" class="btn btn-secondary">SIGN UP</a> --}}
                    <a href="#" class="btn btn-primary">LOGIN</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- home section -->
    <section id="home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 my-auto home-tagline" data-aos="zoom-out">
                    <h1>Cari Kos Sambil Rebahan
                        Dengan <span>The Kost.</span></h1>
                    <p><span class="fw-bold">Cari kosan</span> yang aman, tenang, dan terjangkau? Kami punya
                        solusinya! Kosan kami memiliki lingkungan yang aman dan
                        tenang untuk Anda tinggali.</p>

                    <button class="button-lg-primary">For more information</button>
                    <a href="#">
                        <img src="{{ asset('assets/img/arrow-right.png') }}" alt="">
                    </a>
                </div>
            </div>

            <div class="home-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{ asset('assets/img/home.png') }}" alt="" class="animated">
            </div>
            <img src="{{ asset('assets/img/layer.png') }}" alt=""
                class="accsent-img h-100 position-absolute top-0 start-0">

        </div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>
    </section>

    <!-- about section -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                    data-aos="fade-right">
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                    data-aos="fade-left">
                    <h3>Tentang The Kost</h3>
                    <p>The Kost adalah kos-kosan mahasiswa khusus laki-laki yang terletak pada jalan Semanggi
                        Barat no.18 yang memiliki beberapa keunggulan, diantaranya</p>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Jarak ke kampus yang dekat</a></h4>
                        <p class="description">Kos The Kost memiliki lokasi yang dekat dengan kampus
                            Politeknik Negeri Malang, kita hanya perlu berjalan kaki kurang lebih 5 menit</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Harga relatif murah</a></h4>
                        <p class="description">Harga kos Daarus Saa'dah jauh lebih murah dibandingkan dengan kos yang
                            terdapat disekitar kampus Politeknik Negeri Malang yang biasanya mempunyai harga yang
                            lumayan tinggi</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-atom"></i></div>
                        <h4 class="title"><a href="">Fasilitas kos yang lumayan lengkap</a></h4>
                        <p class="description">The Kost menyediakan fasilitas berupa meja, kursi, lemari dan
                            juga kasur, termasuk gratis listrik, air dan parkir kendaraan yang aman</p>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->

    <!-- Vendor JS Files -->
    <script src={{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
    <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset('assets/js/main.js') }}></script>

</body>

</html>
