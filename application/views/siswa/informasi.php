<?php
$cek    = $user->row();
$id_user = $cek->id_siswa;
$nama    = $cek->nama_lengkap;

$tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">


      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="glyphicon glyphicon-bullhorn"></i> Informasi, Kelengkapan berkas dan Jadwal PPDB online
          </h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 text-center">
            <h2><b>INFORMASI KELENGKAPAN BERKAS DAN PROSEDUR PPDB ONLINE <?php echo date('Y'); ?></b></h2>
            <hr>
            <ol style="font-size:18px;text-align:justify">

              <li>Pastikan anda sudah mencatat informasi untuk login ke sistem PPDB MIN 3 WAY KANAN TEGAL MUKTI. <a href="<?= base_url('/panel_siswa'); ?>"><b>Lihat disini.</b></a> </li>
              <li>Cetak bukti pendaftaran anda dan lengkapi berkas pendaftaran sesuai jalur pendaftaran PPDB anda.</li>
              <li>Bagi calon siswa <b> MIN 3 WAY KANAN TEGAL MUKTI </b>, persiapkan berkas yang dibawa saat verifikasi ke sekolah yang terdiri dari :

                <ul style="list-style-type:lower-alpha">
                  <li>Fotocopy Rapor (semester 1 sampai 5) yang sudah dilegalisir 1 rangkap</li>
                  <li>Fotocopy Kartu keluarga (KK) 1 lembar</li>
                  <li>Foto Siswa 2x3 sebanyak 2 lembar</li>
                  <li>Map merah untuk calon siswa laki-laki dan Map kuning untuk calon siswa perempuan</li>
                  <li>Fotocopy bukti prestasi(Piagam/sertifikat) 3 tahun terakhir (*Jika ada) </li>
                  <li>Print out jarak rumah ke sekolah (Khusus jalur zonasi) </li>
                  <li>Copy kartu KIP/Keterangan kurang mampu (jika ada) </li>
                  <li>Print Out Surat Pernyataan Keaslian Dokumen. Download Surat Pernyataan Keaslian Dokumen <a href="files/Surat Pernyataan Keaslian Dokumen min3.doc" target="_blank"><b>Download disini</b></a></li>
                   <li>Print Out Bukti Surat Perjanjian Peserta Didik Baru. Download surat perjanjian peserta didik baru <a href="files/SURAT PERJANJIAN PESERTA DIDIK BARU 2024 MIN3.doc" target="_blank"><b>Download disini</b></a></li>



                </ul>

              </li>
              <li>Apabila berkas anda sudah dikirim, anda dapat mengecek status verifikasi berkas anda di menu pengumuman.</li>
              <li>Peserta yang lolos tahap verifikasi akan mendapat Bukti Verifikasi di menu Pengumuman.</li>
              <li>Tahap selanjutnya proses seleksi peserta didik baru oleh sekolah.</li>
              <li>Anda bisa mengecek pengumuman kelulusan proses seleksi di menu Pengumuman.</li>
              <li>Peserta yang dinyatakan lulus, silahkan melakukan daftar ulang melalui formulir yang disediakan.</li>
              
              <li>Brosur PPDB Online <?php echo date('Y'); ?></li>


            </ol>
            <br>




            <h2><b>JALUR PPDB DAN JADWAL PENDAFTARAN</b></h2>
            <hr>
          </div>

          <div class="col-md-8">
                    <ol style="font-size:18px;text-align:justify">
                               
                    <li><b style="font-size:24px;">JALUR AFIRMASI DAN MUTASI ORANG TUA</b><br>
                    Pendaftaran : 23 – 30 April 2024 <br>
                    Verifikasi Berkas : 29 dan 30 April 2024 <br>

                    Pengumuman : 31 Mei 2024<br>
                    Daftar Ulang peserta lulus : 3 - 7 Juni 2024
                                                           
                    </li><br>
                    <li><b style="font-size:24px;">JALUR ZONASI</b><br>
                    Pendaftaran : 3 – 17 Mei 2024 <br>
                    Verifikasi berkas : 13 - 17 Mei 2024<br>
                    Pengumuman : 31 Mei 2024<br>
                    Daftar Ulang peserta lulus : 3 - 7 Juni 2024
                    </li><br>
                                                            
                    <li><b style="font-size:24px;">JALUR PRESTASI</b><br>
                    Pendaftaran : 20 – 29 Mei 2024 <br>
                    Verifikasi Berkas : 27 - 29 Mei 2024 <br>
                    Pengumuman : 31 Mei 2024<br>
                    Daftar Ulang peserta lulus : 3 - 7 Juni 2024
                    </li><br>
                    <br><br>
			</ol>
          </div>
        </div>
        </div>
    </div>
        <!-- /dashboard content -->