@extends('layouts.app')

@section('content')
  <!-- ==================== Home-Slider Area (Start) ==================== -->
  <section class="home">

    <div class="swiper-container home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide home-item">
            <img src="assets/images/Home/Home-4.png" alt="">
            <div class="content">
                <div class="text">
                    {{-- <h3>Dan sesungguhnya masjid-masjid itu adalah untuk Allah. Maka janganlah kamu menyembah apa pun di dalamnya selain Allah.</h3>
                    <p>(SURAT AL-JIN AYAT 18)</p> --}}
                    <a href="https://api.whatsapp.com/send?phone=081293339990&text=assalamualaikum warahmatullahi wabarakatuh" class="btn">contact us</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide home-item">
            <img src="assets/images/Home/logo_001.png" alt="">
            <div class="content">
                <div class="text">
                    {{-- <h3>Sesungguhnya rumah &lceil;ibadah&rfloor; yang dibangun untuk manusia, ialah Baitullah yang di Bakkah &Prime;mekah&Prime; yang diberkahi dan menjadi petunjuk bagi semua manusia</h3>
                    <p>(SURAT ALI-IMRON AYAT 96 )</p> --}}
                    <a href="https://api.whatsapp.com/send?phone=081293339990&text=assalamualaikum warahmatullahi wabarakatuh" class="btn">contact us</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide home-item">
            <img src="assets/images/Home/Home-3.png" alt="">
            <div class="content">
                <div class="text">
                    <h3>Bacalah, &lceil;menyebut&rfloor; dengan Nama Tuhanmu Yang Menciptakan</h3>
                    <p>(SURAT AL-ALAQ AYAT 1)</p>
                    <a href="https://api.whatsapp.com/send?phone=081293339990&text=assalamualaikum warahmatullahi wabarakatuh" class="btn">contact us</a>
                </div>
            </div>
        </div>

      </div>

      <div class="swiper-pagination swiper-pagination1"></div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>
  <!-- ==================== Home-Slider Area (End) ==================== -->



  <!-- ==================== About Area (Start) ==================== -->
  <section class="about" id="about">

    <div class="heading">
      <div class="content">
        <h2>Tentang M2 Jannah</h2>
        <div class="design">
          <span></span>
          <i class="fas fa-mosque"></i>
          <span></span>
        </div>
      </div>
    </div>

    <div class="box-container">

      <div class="image">
        <div class="sub-image one">
          <img src="assets/images/About/About-1.png" alt="">
        </div>
        <div class="sub-image two">
          <img src="assets/images/About/About-2.jpeg" alt="">
          <img src="assets/images/About/About-3.jpg" alt="">
        </div>
      </div>

      <div class="content">
        <h3>Pelayanan Umroh dan Haji Khusus</h3>
        <p>PT Gema Kolbu Ihsani merupakan Biro Perjalanan Wisata yang berdiri sejak 2021. Kiprah PT Gema Kolbu Ihsani dalam meramaikan bisnis Pariwisata Domestik dan Internasional memberikan warna tersendiri dengan berbagai layanan Haji dan Umroh yang diselenggarakan. Selalu berinovasi dalam menjalankan bisnis ini dan selalu menjalankan setiap kegiatan dengan amanah.</p>
        <p> <a  style="color: rgb(16, 128, 77)">M2 Jannah </a> brand yang menjadi icon PT Gema Kolbu Ihsani dalam menjalankan layanan Haji dan Umroh yang akan memberikan berbagai pilihan paket Haji dan Umroh sesuai dengan kebutuhan umat. Dengan dukungan akomodasi dan trasnportasi yang memadai selama perjalanan Bersama kami.
        </p>
      </div>

    </div>

  </section>
  <!-- ==================== About Area (End) ==================== -->

  <!-- ==================== Why Us Area (Start) ==================== -->
  <section class="prayer-timing">

    <div class="heading transparent-bg">
      <div class="content">
        <h2>Mengapa M2 Jannah?</h2>
        <div class="design">
          <span></span>
          <i class="fas fa-mosque"></i>
          <span></span>
        </div>
      </div>
    </div>

    <div class="box-container">

      <div class="prayer-item">
        <h4>Resmi & Terpercaya</h4>
        <ul class="content">
          <li><span>M2 Jannah bukan money game ataupun perusahaan fiktif. Semua transaksi & kaidah bisnis kami lakukan sesuai dengan syariah. <a href="#">Lihat Detail</a> </span></li>
        </ul>
      </div>

      <div class="prayer-item">
        <center>
        <h4>Sesuai Sunnah Rasulullah</h4>
        <ul class="content">
          <li><span>Semua proses perjalanan Haji maupun Umroh yang akan dilakukan sesuai dengan tuntunan sunnah & syariah. Kami membersamai perjalanan religi Anda menjemput dengan cara yang diridhoi pula.</span></li>
        </ul>
        </center>
      </div>

      <div class="prayer-item">
        <center>
        <h4>Melayani Seperti Keluarga</h4>
        <ul class="content">
          <li><span>Bagi kami, Anda adalah keluarga. Kami percaya anjuran untuk memuliakan Anda sebagai tamu & keluarga turut berbalas dengan pahala. Bergabunglah bersama M2 Jannah.</span></li>
        </ul>
        </center>
      </div>

      <div class="prayer-item">
        <center>
        <h4>Harga Paling Masuk Akal</h4>
        <ul class="content">
          <li><span>M2 Jannah merupakan ladang dakwah bagi kami. Semua komponen pelayanan perjalanan haji ataupun umroh Anda kami rangkum dengan harga paket terbaik yang Insya Allah sangat terjangkau & sesuai kualitas.</span></li>
        </ul>
        </center>
      </div>

      <div class="prayer-item">
        <h4>Keamanan & Kenyaman</h4>
        <ul class="content">
          <li><span>Keamanan dan kenyamanan klien menjadi prioritas kami dalam menyuguhkan pelayanan dalam mencapai pelayanan prima dari sebelum, awal pemberangkatan hingga kembali pulang.</span></li>
        </ul>
      </div>
    </div>

  </section>

  <!-- ==================== Why Us Area (End) ==================== -->


  <!-- ==================== Team Area (Start) ==================== -->
  <section class="blog main" id="sertifikasi">

    <div class="heading">
      <div class="content">
        <h2>Sertifikasi</h2>
        <div class="design">
          <span></span>
          <i class="fas fa-mosque"></i>
          <span></span>
        </div>
      </div>
    </div>


        <div class="image"><center>
            <img src="assets/images/Sertifikasi/All.jpg" alt="Blog-Image" >
            {{-- <img src="assets/images/Sertifikasi/Depag.png" alt="Blog-Image" height="150" width="180">
            <img src="assets/images/Sertifikasi/Himpuh.png" alt="Blog-Image" height="150" width="130" padding="100"> --}}
            {{-- <img src="assets/images/Sertifikasi/IATA.png" alt="Blog-Image" height="100" width="100">
            <img src="assets/images/Sertifikasi/Sisko_Patuh.png" alt="Blog-Image" height="100" width="100">
            <img src="assets/images/Sertifikasi/KAN.png" alt="Blog-Image" height="100" width="100"> --}}
        </div>

  </section>
  <!-- ==================== Team Area (End) ==================== -->

<!-- ==================== Pillars of Islam Area (Start) ==================== -->
  <section class="pillars">

    <div class="heading transparent-bg">
      <div class="content">
        <h2>Pelayanan Kami</h2>
        <div class="design">
          <span></span>
          <i class="fas fa-mosque"></i>
          <span></span>
        </div>
      </div>
    </div>

    <div class="box-container">
        <div class="pillar-item">
            <a href="{{ route('haji_service') }}">
            <h4 class="icon fas fa-kaaba"></h4>
            <h4>Haji</h4>
            <h4 style="font-size: 15px">Pelayanan perjalanan ibadah umroh secara peofesional dan amanah.</h4>
             </a>
        </div>

      <div class="pillar-item">
        <a href="{{ route('umroh_service') }}">
        {{-- <h4><div class="icon"><i class="fas fa-kaaba"></i></div></h4> --}}
        <h4 class="icon fas fa-kaaba"></h4>
        <h4>Umroh</h4>
        <h4 style="font-size: 15px"> perjalanan ibadah umroh secara peofesional dan amanah.</h4>
        </a>
      </div>

     <div class="pillar-item">
        <a href="#">
        <h4 class="icon fas fa-kaaba"></h4>
        <h4>Private Umroh</h4>
        <h4 style="font-size: 15px">Pelayanan perjalanan ibadah umroh secara ekslusif, peofesional dan amanah.</h4>
        </a>
    </div>

      <div class="pillar-item">
        <a href="#">
        <h4 class="icon fas fa-kaaba"></h4>
        <h4>Tabungan Haji / Umroh</h4>
        <h4 style="font-size: 15px">Pelayanan tabungan bagi calon Jemaah haji ataupun umroh yang langsung terhubung dengan perbankan.</h4>
        </a>
    </div>



    </div>

  </section>
  <!-- ==================== Pillars of Islam Area (End) ==================== -->


  <!-- ==================== Gallery Area (Start) ==================== -->
  <section class="gallery" id="galeri">

    <div class="heading">
      <div class="content">
        <h2>Galeri</h2>
        <div class="design">
          <span></span>
          <i class="fas fa-mosque"></i>
          <span></span>
        </div>
      </div>
    </div>

    <div class="box-container">

      <div class="gallery-item image double Quran">
        <img src="assets/images/Gallery/Gallery-1.jpg" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-1.jpg"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="gallery-item image single Community">
        <img src="assets/images/Gallery/Gallery-2.jpg" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-2.png"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="gallery-item image double Mosque">
        <img src="assets/images/Gallery/Gallery-3.jpeg" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-3.jpeg"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="gallery-item image single Quran">
        <img src="assets/images/Gallery/Gallery-4.png" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-4.png"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="gallery-item image single Community">
        <img src="assets/images/Gallery/Gallery-5.jpeg" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-5.jpeg"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="gallery-item image double Mosque">
        <img src="assets/images/Gallery/Gallery-6.png" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-6.png"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="gallery-item image single Community">
        <img src="assets/images/Gallery/Gallery-7.png" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-7.png"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="gallery-item image double Mosque">
        <img src="assets/images/Gallery/Gallery-8.png" alt="Gallery-Image">
        <div class="content">
          <div class="text">
            <a href="assets/images/Gallery/Gallery-8.png"><i class="fas fa-plus"></i></a>
          </div>
        </div>
      </div>

      </div>

  </section>
  <!-- ==================== Gallery Area (End) ==================== -->




<!-- ==================== Testimonials Area (Start) ==================== -->
<section class="testimonial" id="testimoni">

    <div class="heading">
      <div class="content">
        <h2>Testimoni</h2>
        <div class="design">
          <span></span>
          <i class="fas fa-mosque"></i>
          <span></span>
        </div>
      </div>
    </div>

    <div class="swiper-container testimonial-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right top-quote"></i>
          <p>
            <i class="fas fa-quote-left"></i>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Fuga, nemo doloremque? Laboriosam iure vero inventore eligendi
            vitae accusamus, fugiat quas libero nisi odio fugit dignissimos
            debitis minima nostrum necessitatibus. Eius!
            <i class="fas fa-quote-right"></i>
          </p>
          <div class="text">
            <h4>~ Haroon Rasheed ~</h4>
          </div>
        </div>

        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right top-quote"></i>
          <p>
            <i class="fas fa-quote-left"></i>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Fuga, nemo doloremque? Laboriosam iure vero inventore eligendi
            vitae accusamus, fugiat quas libero nisi odio fugit dignissimos
            debitis minima nostrum necessitatibus. Eius!
            <i class="fas fa-quote-right"></i>
          </p>
          <div class="text">
            <h4>~ Rabia Khan ~</h4>
          </div>
        </div>

        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right top-quote"></i>
          <p>
            <i class="fas fa-quote-left"></i>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Fuga, nemo doloremque? Laboriosam iure vero inventore eligendi
            vitae accusamus, fugiat quas libero nisi odio fugit dignissimos
            debitis minima nostrum necessitatibus. Eius!
            <i class="fas fa-quote-right"></i>
          </p>
          <div class="text">
            <h4>~ Mohammad Nazir ~</h4>
          </div>
        </div>

        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right top-quote"></i>
          <p>
            <i class="fas fa-quote-left"></i>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Fuga, nemo doloremque? Laboriosam iure vero inventore eligendi
            vitae accusamus, fugiat quas libero nisi odio fugit dignissimos
            debitis minima nostrum necessitatibus. Eius!
            <i class="fas fa-quote-right"></i>
          </p>
          <div class="text">
            <h4>~ Humera Masroor ~</h4>
          </div>
        </div>

      </div>

      <div class="swiper-pagination swiper-pagination2"></div>

    </div>

  </section>
  <!-- ==================== Testimonials Area (End) ==================== -->



  <!-- ==================== Blogs Area (Start) ==================== -->
  <section class="blog main" id="mitra">

    <div class="heading">
      <div class="content">
        <h2>Mitra</h2>
        <div class="design">
          <span></span>
          <i class="fas fa-mosque"></i>
          <span></span>
        </div>
      </div>
    </div>


        <div class="image">
            <img src="assets/images/Partner/All.png" alt="Blog-Image">
            {{-- <img src="assets/images/Partner/hotel-mekah.png" alt="Blog-Image" width="320" height="200">
            <img src="assets/images/Partner/pesawat.png" alt="Blog-Image" width="320" height="50"> --}}
            <center>
            <img src="assets/images/Partner/bus.jpg" alt="Blog-Image"  width="320" height="200">
            <img src="assets/images/Partner/train.jpg" alt="Blog-Image"  width="320" height="200">
        </div>

  </section>
  <!-- ==================== Blogs Area (End) ==================== -->


  <!-- Jquery -->
  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/vendors/jquery/jquery-3.6.0.js"></script>

  <!-- Magnific-Popup JS -->
  <script src="assets/vendors/magnific-popup/jquery.magnific-popup.js"></script>

  <!-- Swiper (JS) -->
  <script src="assets/vendors/swiper/swiper.js"></script>

  <!-- Custom Script Files -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/nav-link-toggler.js"></script>
  <script src="assets/js/home-slider.js"></script>
  <script src="assets/js/gallery.js"></script>
  <script src="assets/js/counter-up.js"></script>
  <script src="assets/js/testi-slider.js"></script>

</body>

</html>
@endsection
