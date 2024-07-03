<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB Online MIN 3 WAY KANAN TEGAL MUKTI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="img/logo_min.png" type="image/x-icon" />
    <link href="<?= base_url('assets/homepage/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/homepage/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/homepage/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/homepage/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/homepage/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/homepage/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/homepage/'); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/homepage/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/homepage/'); ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="#"><img src="img/logo_min.png" alt="Logo" width="38"><span> PPDB Online</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

                    <li><a class="nav-link scrollto" href="#fasilitas">Fasilitas</a></li>
                    <li><a class="nav-link scrollto" href="#details">Persyaratan</a></li>
                    <li><a class="nav-link scrollto" href="#informasi">Informasi dan Jadwal</a></li>
                    <li><a class="nav-link scrollto" href="#faq">Alur Pendaftaran</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('web/login'); ?>">Login</a></li> 
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>PPDB Online <br>
                            MIN 3 WAY KANAN TEGAL MUKTI <br>
                            2024/2025

                        </h1>
                        <?php if ($web_ppdb->status_ppdb == 'buka') { ?>

                            <div class="text-center text-lg-start">
                                <a href="<?= base_url('pendaftaran'); ?>" class="btn-get-started scrollto">Daftar Sekarang</a>
                            </div>
                        <?php } else { ?>
                            <div class="text-center text-lg-start">
                                <a href="#pricing" class="btn btn-danger btn-rounded">Pendaftaran Belum Dibuka</a>
                            </div>
                        <?php } ?>


                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="<?= base_url('assets/homepage/'); ?>assets/img/h1.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
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

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center" data-aos="fade-right">
                        <img src="img/logo_min.png" height="50" class="img-fluid" alt="">
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                        <h3>Tentang MIN 3 WAY KANAN TEGAL MUKTI</h3>
                        <p style="text-align: justify ">
                          Berdasarkan sejarah berdirinya Madrasah Ibtidaiyah Negeri 3 Way Kanan adalah salah satu Madrasah Ibtidaiyah yang yang sebelumnya merupakan Madrasah Ibtidaiyah Swasta yang bernama MI Nurul Huda. Adapun yang melatar belakangi berdirinya Madrasah Ibtidaiyah Nurul Huda ialah mengingat pada masa-masa tahun 1983 Tegal Mukti Kecamatan Pakuan Ratu Kabupaten Lampung Utara tersebut belum terdapat madrasah Ibtidaiyah
                        <p style="text-align: justify ">
Disamping itu didorong oleh keinginan dari tokoh masyarakat akan kemajuan agama yang lebih kuat. Selain itu juga dalam rangka membantu pemerintah untuk turut serta mencerdaskan kehidupan bangsa, maka atas perjuangan Tokoh Masyarakat Desa Tegal Mukti Kecamatan Pakuan Ratu Kabupaten Lapung Utara akhirnya berdirilah Madrasah, yaitu MI Nurul Huda yang didirikan Tahun 1983 pada saat itu dipimpin oleh Bapak Mairin
Pada Tahun 1997 MI Nurul Huda statusnya menjadi Madrasah Negeri. Yang awalnya namanya Madrash Ibtidaiyah Nurul Huda menjadi Madrasah Ibtidaiyah (MIN) Tegal Mukti Kecamatan Negeri Besar Kabupaten Way Kanan. Setelah di negerikan kepimimpinan sebaga Kepala Madrasah Pertama yang menjabat dari tahun 1997-2000 adalah Bp. Firman Manaf. Pergantian Kepemimpnan periode berikutnya yang menjabat sebagai kepala Madrasah pada tahun 2000-2008 adalah Bp. Mahput, S.Pd.I Periode Kepemimpinan sebagai Kepala Madrasah selanjutnya adalah sebagai berikut:
-	Tahun 2008-2015 Imam Kahfi, S.Pd.I
-	Tahun 2015-2019 Darmadi, S.Pd.I
-	Tahun 2019- 2024 Irawan S.Pd.I
- Tahun 2024 - Sampai Sekarang Midi, S,IP.,S.Pd.I.
                                                   </p>



                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="fasilitas" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Fasilitas</h2>
                    <p>Ada Fasilitas Apa Saja?</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="bi bi-building" style="color: #ffbb2c;"></i>
                            <h3><a href="">Lokasi Sekolah Strategis</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="bi bi-buildings" style="color: #5578ff;"></i>
                            <h3><a href="">Aula Serbaguna</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bi bi-building" style="color: #e80368;"></i>
                            <h3><a href="">Ruang Kelas Nyaman</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="bi bi-house-door-fill" style="color: #e361ff;"></i>
                            <h3><a href="">Masjid di Area Sekolah</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                            <i class="bi bi-book" style="color: #47aeff;"></i>
                            <h3><a href="">Perpustakaan Winaya Graha</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <i class="bi bi-trophy" style="color: #ffa76e;"></i>
                            <h3><a href="">Sekolah Berprestasi</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
                            <i class="bi bi-laptop" style="color: #11dbcf;"></i>
                            <h3><a href="">Laboratorium Komputer Lengkap</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                            <i class="bi bi-projector" style="color: #4233ff;"></i>
                            <h3><a href="">Proyektor di Ruang Kelas</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
                            <i class="bi bi-shop" style="color: #b2904f;"></i>
                            <h3><a href="">Kantin Bersih</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                            <i class="bi bi-p-circle" style="color: #b20969;"></i>
                            <h3><a href="">Area Parkir Luas</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
                            <i class="bi bi-dash-square-fill" style="color: #ff5828;"></i>
                            <h3><a href="">Area Lapangan Luas</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
                            <i class="bi bi-badge-wc" style="color: #29cc61;"></i>
                            <h3><a href="">Toilet Bersih dan Sehat</a></h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8 pt-4">

            </div>
        </section><!-- End Features Section -->
        
        <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Gallery MIN 3 WAY KANAN TEGAL MUKTI</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g6.jpg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g2.jpeg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g2.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g4.jpeg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g4.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g5.jpeg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g5.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g3.jpeg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g3.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g7.jpeg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g7.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g8.jpeg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g8.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g1.jpeg" class="gallery-lightbox">
                <img src="<?= base_url('assets/homepage/'); ?>assets/img/gallery/g1.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> <!-- End Gallery Section -->

        <!-- ======= Counts Section =======
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div> 
    </section>  --><!-- End Counts Section -->

        <section id="details" class="details">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Informasi</h2>
                    <p>Persyaratan dan Kelengkapan Berkas</p>
                </div>


                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="<?= base_url('assets/homepage/'); ?>assets/img/checklist.jpg" height="60%" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Syarat Pendaftaran</h3>

                        <ul>
                            <li><i class="bi bi-check"></i> Warga Negara Indonesia (WNI).</li>
                            <li><i class="bi bi-check"></i> Calon Peserta didik telah menyelesaikan kelas RA atau TK atau bentuk lain sederajat.</li>
                            <li><i class="bi bi-check"></i> Usia maksimal 6 - 7 Tahun pada tanggal 1 Juli 2024.</li>
                            <li><i class="bi bi-check"></i> Melakukan pendaftaran secara online dan mencetak bukti pendaftaran yang sudah dicetak dibawa saat pengumpulan berkas</li>
                            <li><i class="bi bi-check"></i> Bukti pendaftaran dan persyaratan di kirimkan secara langsung oleh Calon Peserta Didik ke MIN 3 WAY KANAN TEGAL MUKTI untuk diverifikasi.</li>

                        </ul>

                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="<?= base_url('assets/homepage/'); ?>assets/img/checklist-concept.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-2 order-2 order-md-1" data-aos="fade-up">
                        <h3>Kelengkapan berkas</h3>
                        <p>Peserta mengisi formulir pendaftaran online melalui website https://min3waykanan.jagodigital.web.id/</p>

                        <div class="col-md-8" data-aos="fade-up">


                            <ul>
                                <li><i class="bi bi-check"></i> Foto 3x4 sebanyak 2 lembar</li>
                                <li><i class="bi bi-check"></i> FC akte kelahiran</li>
                                <!--<li><i class="bi bi-check"></i> FC rapor Semester 1 s.d 5</li>-->
                                <li><i class="bi bi-check"></i> Kelengkapan berkas sesuai jalur seleksi masing-masing</li>
                                <li><i class="bi bi-check"></i> Surat pernyataan keaslian dokumen (dapat diunduh melalui website PPDB)</li>
                                <li><i class="bi bi-check"></i> Berkas asli wajib dibawa untuk proses verifikasi.</li>

                            </ul>

                        </div>
                    </div>
                </div>





            </div>
        </section> <!-- End Details Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="informasi" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Informasi</h2>
                    <p>JALUR PENDAFTARAN</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="faq-list">
                        <ul>
                            

                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">JALUR AFIRMASI (BAGI PESERTA DIDIK DARI KELUARGA TIDAK MAMPU)<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                           <ol style="text-align:justify">

                                    <li>	Jalur Afirmasi adalah seleksi Calon Peserta Didik Baru diperuntukan bagi peserta didik yang berasal dari keluarga ekonomi tidak mampu dengan dibuktikan kepemilikan Kartu Program Indonesia Pintar  (KIP ) yang diterbitkan oleh Kementerian dan terdata dalam Dapodik, Kartu peserta Program Keluarga Harapan (PKH)  yang diterbitkan Kementrian dan terdata dalam DTKS Dinas Sosial.</li>
                                    <li>	Memprioritaskan jarak tempat tinggal terdekat ke sekolah dalam wilayah zonasi yang ditetapkan</li>
                                    <li>	Seleksi jalur afirmasi dilaksanakan terintegrasi dengan jalur lainnya</li>

                            </ol>

                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">JALUR MUTASI ORANG TUA (BAGI PESERTA DIDIK YANG IKUT ORANG TUA PINDAH KE KABUPATEN WAY KANAN) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <ol style="text-align:justify">
                                <li>Jalur perpindahan tugas orang tua/wali ditujukan bagi calon peserta didik yang berdomisili di luar zonasi MIN 3 WAY KANAN TEGAL MUKTI dibuktikan dengan surat penugasan dari instansi, lembaga, kantor atau perusahaan orang tua/wali.</li>
                                <li>Calon Peserta Didik Baru bagi anak kandung guru dibuktikan dengan Akta Kelahiran atau Surat Keterangan lain yang sah yang diterbitkan oleh Instansi Pemerintah yang berkompeten.</li>
                               <li>	Anak kandung sebagaimana dimaksud pada ayat 2 menyerahkan surat keterangan yang menyatakan benar orang tua bekerja di MIN 3 WAY KANAN TEGAL MUKTI.</li>
                                </ol>

                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">JALUR ZONASI (BAGI PESERTA DIDIK YANG BERDOMISILI BERDASARKAN JARAK TERDEKAT DENGAN SEKOLAH) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <ol style="text-align:justify">
                                <li>Jalur zonasi adalah Seleksi Calon Peserta Didik berdasarkan jarak terdekat tempat tinggal calon peserta didik baru dengan MIN 3 WAY KANAN TEGAL MUKTI. </li>
                                <li>Penentuan jarak tempat tinggal Calon Peserta Didik Baru berdasarkan alamat pada Kartu Keluarga yang diterbitkan paling singkat 1 tahun pada pelaksanaan PPDB dan atau jika Kartu Keluarga diterbitkan kurang dari 1 tahun dapat digunakan karena adanya perubahan data tanpa menyebabkan perpindahan domisili.</li>
                                <li>Jika dalam Kartu Keluarga terdapat perubahan maka berlaku ketentuan sebagai berikut :<br>
                                a.	Melampirkan Kartu keluarga yang lama  (sebelum terbit KK perubahan)<br>
                                b.	Terjadi kepindahan domisili seluruh keluarga<br>
                                c.	Nama orang tua/wali calon peserta didik baru tercantum dalam KK sama dengan nama orang tua/wali Calon peserta didik baru pada raport/ijazah<br>
                                d.	Jika terjadi perbedaan nama orang tua/wali calon peserta didik baru sebagaimana dimaksud pada poin c, maka KK dapat digunakan jika orang tua/wali meninggal dunia atau bercerai sebelum tanggal penerbitan KK terakhir. <br>
                               </li>
                                <li>Calon Peserta Didik Baru yang boleh mendaftar melalui jalur zonasi  jika berada pada wilayah zona MIN 3 WAY KANAN TEGAL MUKTI.</li>	
                                <li>Calon Peserta Didik Baru yang dinyatakan lulus melalui jalur zonasi berdasarkan pemeringkatan jarak tempat tinggal terdekat dengan MIN 3 WAY KANAN TEGAL MUKTI yang diukur dari titik nol MIN 3 WAY KANAN TEGAL MUKTI menuju tempat tinggal calon peserta didik melalui garis lurus titik ordinat (jalur udara)</li>
                                <li> Wilayah Zonasi MIN 3 WAY KANAN TEGAL MUKTI<br>
                                        Zona I : Kecamatan Negeri Besar <br>
                                        Zona II :Kecamatan Negeri Besar 
                                </li>
                                </ol>
                                </div>
                            </li>
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">JALUR PRESTASI (BAGI PESERTA DIDIK YANG MEMILIKI PRESTASI AKADEMIK DAN NON AKADEMIK) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse show">
                                    <p>
                                <ol style="text-align:justify">
                                <li>Jalur prestasi sebagaimana tersebut dalam pasal 24 ayat 1 huruf b Permendikbud No 1 Tahun 2021  dilaksanakan dengan mempertimbangkan prestasi-prestasi bidang akademik maupun non akademik dibuktikan dengan piagam yang dilegalisir sekolah asal dan menunjukan aslinya.</li>
                                <li>Jalur Prestasi terdiri prestasi akademik maupun prestasi non akademik.</li>
                                <li>Jalur Prestasi Akademik terdiri dari peserta didik yang memiliki  peringkat paralel 1-3 di tiap semester dari sekolahnya dan atau peringkat 1-10 kelas. Dan atau mendapatkan prestasi pada kompetisi di bidang riset, inovasi, sains dan teknologi. </li>
                                <li>Prestasi Non Akademik terdiri dari prestasi yang diperoleh dari kompetisi di bidang seni budaya, olah raga dan atau hafalan Al Qur’an.</li>
                                <li>	Prestasi diperoleh selama kurun waktu 3 tahun terakhir, minimal prestasi di tingkat kabupaten/Kota. </li>
                                <li>	Prestasi dibuktikan dengan piagam/sertifikat asli </li>
                                <li>	Calon peserta didik baru yang dinyatakan lulus melalui jalur prestasi berdasarkan pemeringkatan jumlah skor kumulatif hasil capaian prestasi.</li>
                                </ol>
                                </p>
                                </div>
                            </li>

                            



                        </ul>
                    </div>





                </div>

            </div>
        </section><!-- End Pricing Section -->


        <!-- ======= Pricing Section ======= -->
        <section id="jadwal" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Timeline</h2>
                    <p>JADWAL PENDAFTARAN</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="timeline">
                        <div class="timeline-wrapper timeline-wrapper-warning">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h6 class="timeline-title"><b>JALUR
                                             AFIRMASI DAN MUTASI ORANG TUA - <span style="background-color:rgb(255, 0, 0);color:white;">Pendaftaran belum dibuka</span></b></h6>

                                </div>
                                <div class="timeline-body">
                                    <ol>
                                        <li>Pendaftaran Online : 23 – 30 April 2024</li>
                                        <li>Verifikasi Berkas : 29- 30 April 2024</li>
                              

                                    </ol>


                                </div>

                            </div>
                        </div>
                        <div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h6 class="timeline-title"><b>JALUR
                                            ZONASI - <span style="background-color:rgb(255, 0, 0);color:white;">Pendaftaran belum dibuka</b></h6>
                                </div>
                                <div class="timeline-body">
                                    <ol>
                                        <li>Pendaftaran Online : 3 – 17 Mei 2024 </li>
                                        <li>Verifikasi berkas : 13 - 17 Mei 2024</li>
                                      

                                    </ol>
                                </div>

                            </div>
                        </div>
                        <div class="timeline-wrapper timeline-wrapper-success">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h6 class="timeline-title"><b>JALUR PRESTASI - <span style="background-color:rgb(255, 0, 0);color:white;">Pendaftaran belum dibuka</span></b></h6>
                                </div>
                                <div class="timeline-body">
                                    <ol>
                                        <li>Pendaftaran Online : 20 - 29 Mei 2024</li>
                                        <li>Verifikasi Berkas : 27 - 29 Mei 2024</li>
                                     

                                    </ol>
                                </div>

                            </div>
                        </div>
                         <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h6 class="timeline-title"><b>PENGUMUMAN HASIL SELEKSI PPDB SEMUA JALUR </b></h6>
                                </div>
                                <div class="timeline-body">
                                    <ol>
                                        <li>Pengumuman PPDB : 31 Mei 2024 </li>
                                      
                                      

                                    </ol>
                                </div>

                            </div>
                        </div>
                        <div class="timeline-wrapper timeline-wrapper-warning">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h6 class="timeline-title"><b>DAFTAR ULANG</b></h6>

                                </div>
                                <div class="timeline-body">
                                    <ol>
                                        <li>Daftar Ulang Semua Jurusan : 3 - 8 Juni 2024</li>
                   
                              

                                    </ol>


                                </div>

                            </div>
                        </div>
                        
                        
                    </div>






                </div>

            </div>
        </section><!-- End Pricing Section -->










        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Alur Pendaftaran</h2>
                    <p>Bagaimana Alur Pendaftarannya ?</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Membaca Informasi Jadwal Jalur Pendaftaran <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Calon peserta didik membaca informasi, persyaratan dan jadwal jalur seleksi yang akan dipilih.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"> Pilih Jalur Seleksi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Calon Peserta didik menentukan jalur seleksi yang akan diambil.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Mengisi Formulir Pendaftaran Online <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Calon peserta didik melengkapi formulir data diri, alamat, data orang tua, data asal sekolah dan nilai rapor dari semester 1 s/d semester 5 secara online.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Mencatat Akun Login <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Setelah Calon peserta didik berhasil melakukan pendaftaran secara online, Ananda akan mendapatkan NOMOR URUT PENDAFTARAN dan wajib mencatat NOMOR PENDAFTARAN tersebut yang akan digunakan sebagai username untuk login ke sistem PPDB Online MIN 3 WAY KANAN TEGAL MUKTI.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Mencetak Bukti Pendaftaran <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Calon peserta didik login ke sistem PPDB online dan memilih menu CETAK BUKTI PENDAFTARAN untuk mencetak Bukti Pendaftaran sebagai syarat Kelengkapan Berkas PPDB MIN 3 WAY KANAN TEGAL MUKTI.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Mempersiapkan Berkas Pendaftaran <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Calon peserta didik melengkapi berkas syarat pendaftaran. Selanjutnya membawa berkas pendaftaran lengkap dengan lembar cetak bukti pendaftaran untuk diverifikasi ke MIN 3 WAY KANAN TEGAL MUKTI sesuai dengan jadwal yang ditentukan.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Memantau Informasi Pengumuman <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Calon peserta didik dapat mengecek dan memantau status verifikasi berkas melalui halaman login PPDB MIN 3 WAY KANAN TEGAL MUKTI dan Calon peserta didik yang telah lulus tahap pemberkasan dapat mencetak TANDA BUKTI VERIFIKASI
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Mencetak Bukti Kelulusan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Calon peserta didik yang telah dinyatakan lulus dan diterima sebagai calon peserta didik dapat mencetak Bukti Kelulusan pada menu PENGUMUMAN.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Melakukan Daftar Ulang <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Calon peserta didik yang telah dinyatakan lulus dan diterima sebagai calon peserta didik mengisi formulir daftar ulang pada halaman DASHBOARD.
                                </p>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>
        </section><!-- End F.A.Q Section -->


        <!-- ======= Details Section ======= -->


        <!-- ======= Gallery Section ======= 
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check our Gallery</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="img/logo_min.png" class="testimonial-img" alt="">
                                <h3>Visi</h3>
                                <h4>MIN 3 WAY KANAN TEGAL MUKTI</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                   Terwujudnya Madrasah berstandar nasional yang handal, tangguh, kompetitif dan Islami
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="img/logo_min.png" class="testimonial-img" alt="">
                                <h3>MISI</h3>
                                <h4>MIN 3 WAY KANAN TEGAL MUKTI</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                  a.	Menciptakan suasana madrasah yang Islami;<br>
b.	Menyelenggarakan pembelajaran yang inovatif kreatif dan dan berwawasan teknologi;<br>
c.	Sumber daya manusia yang adaptif, kompetitif dan mengembangkan multi kecerdasan;<br>
d.	Menjadikan lingkungan Madrasah sebagai sumber belajar;<br>
e.	Membangun citra Madrasah sebagai Mitra terpercaya masyarakat di bidang pendidikan.<br>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="img/logo_min.png" class="testimonial-img" alt="">
                                <h3>TUJUAN</h3>
                                <h4>MIN 3 WAY KANAN TEGAL MUKTI</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                  a.	Menghasilkan output/lulusan yang tekun beribadah memiliki budi pekerti luhur sesuai dengan ajaran agama Islam;<br>
b.	Menghasilkan output/lulusan yang berprestasi sesuai dengan tingkat kecerdasannya;<br>
c.	Menghasilkan output/lulusan yang menguasai salah satu bidang kerajinan tanganm, kesenian atau olahraga sesuai bakat dan minatnya.<br>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->









                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= 
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Team Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Hubungi Kami</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat:</h4>
                                <p>Jl. Pesantren No. 02 Tegal Mukti, Kec. Negeri Besar KAB. WAY KANAN Provinsi LAMPUNG</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>min3waykanan@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telpon:</h4>
                                <p>0822-8136-2434</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-instagram"></i>
                                <h4>Instagram:</h4>
                                <p>@min3waykanan</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                      <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d75687.12032954549!2d105.02976903303596!3d-4.445637999469503!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMjYnNTguMyJTIDEwNcKwMDEnMjQuNSJF!5e0!3m2!1sen!2sus!4v1715602003304!5m2!1sen!2sus" width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <h3>Posko Layanan dan Bantuan PPDB 2024/2025 <br>
                                MIN 3 WAY KANAN TEGAL MUKTI</h3>
                            <p class="pb-3"><em>Untuk bantuan dan layanan informasi PPDB 2024/2025 MIN 3 WAY KANAN TEGAL MUKTI silahkan hubungi kontak Whatsapp yang telah disediakan.</em></p>

                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-links">
                        <h4>Saluran Whatsapp Layanan Informasi dan Bantuan PPDB Online</h4>
                      <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://api.whatsapp.com/send?phone=6285379967978&text=Assalamualaikum%20Wr.%20Wb.%20Tim%20helpdesk%20PPDB%20MIN%20%203%20PWay%20Kanan%20Tegal%20Mukti%20,%20Saya%20ingin%20bertanya%20mengenai%20">Istikansh, S.Pd.I.: 085379967978</a></li>

                           
                        </ul> 
                        <p class="pb-3"><em>Jam Layanan Informasi Selama Jam Kerja (08.00 - 12.00 WIB)</em></p>
                    </div>





                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright 2024 Jagodigital- <strong><span>Sistem PPDB Online MIN 3 WAY KANAN TEGAL MUKTI</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->

            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/homepage/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/homepage/'); ?>assets/js/main.js"></script>

</body>

</html>