<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SIM MBKM UNIVERSITAS BOROBUDUR</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/icon.png')}}" rel="icon" />
    <link href="{{ asset('assets/img/icon.png')}}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
    <link
      href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}"
      rel="stylesheet"
    />

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style-list-topik.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style-table-pembayaran.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style-timeline.css')}}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="index-page">
    <header id="header" class="header fixed-top">
      <div class="topbar d-flex align-items-center">
        <div
          class="container d-flex justify-content-center justify-content-md-between"
        >
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"
              ><a href="mailto:semnastera@polteksmi.ac.id "
                >mbkm@borobudur.ac.id</a
              ></i
            >
            <i class="bi bi-phone d-flex align-items-center ms-4"
              ><span>021-8613868</span></i
            >
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

      <div class="branding d-flex align-items-center bg-white">
        <div
          class="container position-relative d-flex align-items-center justify-content-between"
        >
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img
              src="{{ asset('assets/img/logo/logo-kampus-merdeka.png')}}"
              width="120"
              height="43"
              alt=""
            />
            <h5 class="sitename" style="color: black">UNIVERSITAS BOROBUDUR</h5>
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="#hero" class="active">Beranda</a></li>
              <li><a href="#program">Program</a></li>
              <li><a href="#kontak">Kontak</a></li>
              <li>

                @if (Route::has('login'))
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        @else
                            <div class="btn-group ms-3 rounded-pill" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ url('/login') }}'">Sign-In</button>
                                <button type="button" class="btn btn-warning" onclick="window.location.href='{{ url('/register') }}'">Sign-Up</button>
                            </div>
                        @endauth
                @endif
                
              </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
        </div>
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <img src="{{ asset('assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in" />

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-start">
            <div class="col-lg-8">
              <h2>Ambil Kendali</h2>
              <h2>Masa Depanmu</h2>
              <p>
                Kampus Merdeka adalah cara terbaik berkuliah. Dapatkan
                kemerdekaan untuk membentuk masa depan yang sesuai dengan
                aspirasi kariermu.
              </p>
              <a href="#program" class="btn-get-started">Telusuri Program</a>
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- Submit Section -->
      <section id="program" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Program</span>
          <h2>Program</h2>
          <!--        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6 col-sm-12"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-toggles"></i>
                </div>
                <h3>PERTUKARAN MAHASISWA</h3>
                <p>
                  Bertukar pengalaman budaya dengan universitas lain melalui
                  Pertukaran Mahasiswa dalam negeri
                </p>
                <br />
                <button class="btn btn-sm btn-outline-dark p-2 w-100">
                  <a href="#" class="text-warning"
                    >Selengkapnya <i class="bi bi-arrow-up-right"></i
                  ></a>
                </button>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-lg-4 col-md-6 col-sm-12"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>

                <h3>MAGANG</h3>

                <p>
                  Rasakan pengalaman dunia kerja dengan terjun langsung melalui
                  Magang.
                </p>
                <br />
                <button class="btn btn-sm btn-outline-dark p-2 w-100">
                  <a href="#" class="text-warning"
                    >Selengkapnya <i class="bi bi-arrow-up-right"></i
                  ></a>
                </button>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-lg-4 col-md-6 col-sm-12"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-suitcase-lg"></i>
                </div>
                <h3>KEWIRAUSAHAAN</h3>
                <p>
                  Ikuti program wirausaha dari perguruan tinggi lain melalui
                  Wirausaha Merdeka.
                </p>
                <br />
                <button class="btn btn-sm btn-outline-dark p-2 w-100">
                  <a href="#" class="text-warning"
                    >Selengkapnya <i class="bi bi-arrow-up-right"></i
                  ></a>
                </button>
              </div>
            </div>
            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- /Submit Section -->

      <!-- Contact Section -->
      <section id="kontak" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Kontak</span>
          <h2>Kontak</h2>
          <!--        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 mt-1">
            <div
              class="col-md-6 col-sm-12"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center p-5"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <i class="bi bi-info-lg"></i>
                <h3>Kontak Informasi</h3>

                <ol class="custom-list_narahubung">
                  <li>
                    <p>
                      Hilman Firmansyah<br />
                      Phone: +62 815-1234-5678 (Whatsapp)<br />
                      E-mail: it.hilman@gmail.com
                    </p>
                  </li>
                  <li>
                    <p>
                      xxxxxxxxxxxxxxxxxx.<br />
                      Phone: +62 812-1234-1033 (Whatsapp)<br />
                      E-mail: xxxxxxxxxxxxxxxxxxx
                    </p>
                  </li>
                </ol>
              </div>
            </div>
            <div
              class="col-md-6 col-sm-12"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1492088754344!2d106.89539997378036!3d-6.244058761138473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f33ae65cd19d%3A0xc7a63982bb34d6!2sUniversitas%20Borobudur!5e0!3m2!1sid!2sid!4v1720686318562!5m2!1sid!2sid"
                width="100%"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <!-- End Google Maps -->
          </div>
        </div>
      </section>
      <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer position-relative dark-background">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col">
            <div class="footer-about">
              <a href="#" class="logo sitename">UNIVERSITAS BOROBUDUR</a>
              <div class="footer-contact pt-3">
                <p>
                  Jl. Raya Kalimalang No.1, RT.9/RW.4, Cipinang Melayu, Kec.
                  Makasar
                </p>
                <p>Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13620</p>
                <p class="mt-3">
                  <strong>Phone:</strong> <span>021-8613868</span>
                </p>
                <p>
                  <strong>Email:</strong>
                  <span>info@borobudur.ac.id</span>
                </p>
              </div>
              <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright 2024</span> <strong class="px-1 sitename">SIM MBKM Universitas Borobudur</strong>
        </p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
  </body>
</html>
