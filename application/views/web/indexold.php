<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online | SMAN 3 Prabumulih</title>
    <base href="<?php echo base_url(); ?>" />

    <link rel="icon" href="img/logo.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="img/logo.png" alt="Logo" width="38" style="position:absolute;margin-top:-10px;"> <span style="margin-left:50px;">PPDB Online</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><img src="img/logo.png" alt="Logo" width="15"> Informasi PPDB</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#prosedur"><i class="fa fa-info-circle"></i> Jalur dan Jadwal</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone"></i> Kontak</a>
                    </li>
                    <li><a href="logcs"><i class="fa fa-user"></i> Login</a></li>
                    <!--  <li class="page-scroll">
                        <a href="#jadwal"><i class="fa fa-calendar"></i> Jadwal PPDB</a> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <?php
        if (strtolower($this->uri->segment(1)) == 'logcs') {
            $this->load->view('web/login');
        } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.png" style="margin-top:-15%;margin-bottom:-10px;" width="120">
                    <div class="intro-text">
                        <span class="name shad" style="font-size:35px"><br>PPDB ONLINE 2022/2023<br> SMAN 3 PRABUMULIH</span>

                        <br>
                        <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
                            <!-- <span class="skills">
                        	<a href="img/JUKNIS PPDB 2020 FINAL.pdf" class="btn btn-danger btn-lg"><i class="fa fa-file-pdf-o faa-pulse animated"></i> &nbsp;Download Panduan PPDB Online</a>
                        </span> -->
                            <br> <br>
                            <hr class="star-light">
                            <br>
                            <!-- <h3>Login Calon Siswa Terdaftar </h3> -->
                            <span>
                                <a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran Online Dibuka</a>
                                <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;<?php if ($ceks == '') {
                                                                                                                                                                        echo "Login";
                                                                                                                                                                    } else {
                                                                                                                                                                        echo "Panel";
                                                                                                                                                                    } ?> Calon Siswa</a>
                                <br>
                            </span>
                        <?php } else { ?>
                            <span class="skills">
                            </span>
                            <br> <br>
                            <hr class="star-light">
                            <br>
                            <!-- <h3>Login Calon Siswa Terdaftar </h3> -->
                            <span>
                                <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
                                <br>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang sekolah</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-item text-center">
                    <a href="http://smanegeri3prabumulih.sch.id" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/logo.png" class="img-thumbnail" alt=""><br><br>
                        <span class="btn btn-success btn-block">smanegeri3prabumulih.sch.id</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify">
                    <p>SMAN 3 Prabumulih pada tahun ajaran 2022/2023 menyediakan PPDB secara <i>online</i> diharapkan proses PPDB dapat berjalan cepat
                        dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB Online SMAN 3 Prabumulih. </p>
                </div>
                <div class="col-lg-4" style="text-align:justify">
                    <p>Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon siswa akan mendapat bukti pendaftaran dan harus disimpan yang akan digunakan untuk proses selanjutnya.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="#page-top" class="btn btn-md btn-outline">
                        <i class="fa fa-pencil-square-o "></i> PPDB Online
                    </a> &nbsp;&nbsp;
                    <a href="#prosedur" class="btn btn-md btn-outline">
                        <i class="fa fa-tasks"></i> Prosedur PPDB Online
                    </a>&nbsp;&nbsp;
                    <a href="logcs" class="btn btn-md btn-outline">
                        <i class="fa fa-sign-in"></i> <?php if ($ceks == '') {
                                                            echo "Login";
                                                        } else {
                                                            echo "Panel";
                                                        } ?> Calon Siswa
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

    <section id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Jalur dan Jadwal PPDB Online 2022/2023</h2>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <ol style="font-size:18px;text-align:justify">

                            <li><b style="font-size:24px;">JALUR PMPA, AFIRMASI DAN MUTASI ORANG TUA</b><br>
                                Pendaftaran dan Verifikasi Berkas : 17 – 19 Mei 2022<br>
                                Seleksi Berkas : 18 - 21 Mei 2022<br>
                                Pengumuman : 24 Mei 2022 <br>
                                Daftar Ulang peserta lulus : 25 - 28 Mei 2022

                            </li><br>
                            <li><b style="font-size:24px;">JALUR ZONASI</b><br>
                                Pendaftaran dan Verifikasi Berkas : 30 - 3 Juni 2022<br>
                                Pengumuman Zonasi : 6 Juni 2022 <br>
                                Daftar Ulang Zonasi : 7 - 8 Juni 2022
                            </li><br>

                            <li><b style="font-size:24px;">JALUR TES POTENSI AKADEMIK</b><br>
                                Pendaftaran dan Verifikasi Berkas : 9 - 14 Juni 2022 <br>
                                Tes Potensi Akademik : 16 Juni 2022 <br>
                                Pengumuman TPA : 21 Juni 2022 <br>
                                Daftar Ulang TPA : 22 - 24 Juni 2022

                            </li><br>

                            <br><br>
                        </ol>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center"><br><br><br><br>
                                <h2>Persyaratan Pendaftaran (PPDB 2022)</h2>
                                <hr>
                                <ol style="font-size:18px;text-align:justify">
                                    <li>Warga Negara Indonesia (WNI)</li>
                                    <li>Asal sekolah SMP/MTs di dalam maupun di luar kota Prabumulih</li>
                                    <li>Peserta didik tahun pelajaran 2021/2022 </li>
                                    <li>Nilai rata-rata kumulatif B.Indonesia, Matematika, IPA dan Bahasa Inggris semester 1 s/d 5 minimal 80 </li>
                                    <li>Persyaratan berkas sesuai dengan jalur seleksi yang dipilih dikirim secara online, kecuali jalur zonasi <b>wajib verifikasi rumah</b> ke sekolah secara langsung dengan tim panitia PPDB </li>
                                </ol>
                                <br>
                                <br> <br>




                                <h2>Penjelasan Alur PPDB 2022</h2>
                                <hr>
                                <ol style="font-size:18px;text-align:justify">

                                    <li> Calon peserta didik baru melakukan pendaftaran secara mandiri dan <b>ONLINE</b> melalui website <a href="http://ppdb.smanegeri3prabumulih.sch.id">ppdb.smanegeri3prabumulih.sch.id</a> sesuai dengan jadwal dan jalur yang telah ditentukan. </li>
                                    <li>Calon peserta didik melengkapi biodata pada formulir pendaftaran secara online .</li>
                                    <li>Setelah Calon Siswa berhasil melakukan pendaftaran, Calon siswa akan mendapatkan <b>NOMOR URUT PENDAFTARAN</b> dan wajib mencatat <b>NOMOR PENDAFTARAN</b> tersebut, serta melakukan <b>Print Out Bukti Pendaftaran & Biodata Diri untuk syarat Kelengkapan Berkas PPDB SMAN 3 Prabumulih</b>.</li>
                                 
                                   <li>Calon peserta didik melengkapi berkas syarat pendaftaran. Informasi kelengkapan berkas pendaftaran dan surat keabsahan data dapat dilihat setelah ananda login ke sistem dan pilih <b>menu informasi</b></li>
                                    <li>Seluruh berkas pendukung berupa fotokopi raport dan piagam penghargaan di serahkan ke Panitia PPDB SMAN 3 Prabumulih untuk dapat diverifikasi sesuai dengan Jadwal Kegiatan pada Jam Kerja yaitu Jam 08.00-12.00 WIB</b>.</li>
                                    <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Berkas Pendaftaran</b>.</li>
                                    <li>Pengumuman verifikasi berkas di informasikan melalui halaman login PPDB SMA Negeri 3 Prabumulih dan Calon siswa yang telah lulus tahap pemberkasan dapat mencetak <b>TANDA BUKTI VERIFIKASI</b></li>

                                    <li>Tahap selanjutnya proses seleksi peserta didik baru oleh sekolah</li>
                                    <li>Calon peserta didik dapat mengakses hasil pengumuman dengan memilih menu Login Calon Siswa. Untuk <b>No. Pendaftaran</b> sesuaikan dengan <b>No. Pendaftaran yang ada di bukti pendaftaran</b>, sedangkan untuk <b>Password</b> menggunakan <b>NISN masing-masing calon peserta didik</b></li>
                                    <li>Bagi Calon Peserta Didik Baru yang tidak lulus melalui Jalur PMPA, Jalur Afirmasi & Mutasi Orang Tua, Jalur Zonasi, maka dapat mendaftar seleksi melalui<b> Jalur Tes Potensi Akademik</b>

                                    <li>Brosur PPDB Online 2022, silahkan<b> <a href="https://ppdb.smanegeri3prabumulih.sch.id/img/BROSUR PPDB 2022  SMAN3PRABUMULIH.jpg" target="_blank">Download Brosur PPDB Online 2022</a></b>.</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--   <section id="jadwal">
        <div class="container">
            
                <div class="col-lg-12 text-center">
                    <h2>Jadwal PPDB Online</h2>
                    <hr>
               
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                       <img class="img-responsive" src="img/jadwal.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        </section> -->

    <!-- Contact Section -->
    <section class="success" id="contact">
        <!-- <div class="container"> -->
        <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
            <div class="col-lg-4 text-center">
                <br><br>
                <h2>Kontak Kami</h2>
                <hr class="star-light">
                <h4>
                    Jl. Yusuf Wahid Sukajadi <br><br>
                </h4>
                <span style="color:#222;"><b><i class="fa fa-phone-square"></i>0713-3313242</b> </span>
                &nbsp;
                <span class="eml" style="color:#222;"><i class="fa fa-envelope"></i> smanegeri3prabumulih@gmail.com</span>
                <br>
                <a href="https://smanegeri3prabumulih.sch.id/" target="_blank">
                    <h4 class="btn btn-success">SMA Negeri 3 Prabumulih </h4>
                </a>
            </div>
            <div class="col-lg-8 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.8039670259886!2d104.2456392141137!3d-3.3979621425314175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a337c12844c47%3A0x6ce047a8d3bf4312!2sSMA%20Negeri%203%20Prabumulih!5e0!3m2!1sid!2sid!4v1619397073148!5m2!1sid!2sid" width="100%" height="465" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- </div> -->
    </section>





    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2022 Sistem Informasi PPDB SMAN 3 Prabumulih
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.min.js"></script>

</body>

</html>