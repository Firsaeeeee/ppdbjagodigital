<?php
$cek    = $user->row();
$id_user = $cek->id_siswa;
$nama    = $cek->nama_lengkap;
$no_pendaftaran = $cek->no_pendaftaran;
$nisn = $cek->nisn;

$tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <?php if ($cek->status_pendaftaran == 'lulus') { ?>
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
            </h3>
          </div>
          <div class="panel-body">
            <h3>
              <center>
                Selamat <b><?php echo $nama; ?></b>, Anda dinyatakan <span class="label label-success" style="font-size:20px;">Lulus</span> Seleksi <br>Sebagai Calon Peserta Didik Baru <b>SMA Negeri 3 Prabumulih</b>, Silahkan Cetak Surat Pengumuman Sebagai Bukti Lulus Seleksi.
               <br>
                <a href="panel_siswa/cetak_lulus" class="btn btn-success btn-lg" target="_blank"><i class="icon-printer4"></i> Cetak Bukti Lulus</a>
                 <br><br>
<hr>
<h3><b>PERSYARATAN DAFTAR ULANG</b></h3>
 <ol style="font-size:18px;text-align:justify">
                               
                                <li>Bagi siswa yang lulus melalui Jalur Tes potensi Akademik diwajibkan mendaftar ulang dengan mengunduh dan mengisi kelengkapan dokumen pemberkasan daftar ulang di bawah ini: </li>
                                <ul>
                                    <li>Cek list dokumen pemberkasan daftar ulang. <a href="/files/CEKLIST DOKUMEN PEMBERKASAN PPDB 2024.xlsx" target="_blank"><b>Download disini</b></a></li>
                                      <li>Data registrasi peserta didik. <a href="/files/FORM REGISTRASI PESERTA DIDIK BARU.xlsx" target="_blank"><b>Download disini</b></a></li>
                                      <li>Surat perjanjian peserta didik baru. <a href="/files/SURAT PERJANJIAN PESERTA DIDIK BARU 2024.doc" target="_blank"><b>Download disini</b></a></li>
                                      <li>Surat pernyataan keabsahan dokumen. <a href="/files/Surat Pernyataan Kebsahan Data SMAN 3 PBM 2024.doc" target="_blank"><b>Download disini</b></a></li>
                                <li>Semua kelengkapan berkas dimasukkan ke map plastik kancing/tali warna kuning untuk siswa perempuan dan merah untuk siswa laki-laki</li>
                                </ul>
                              
                                <li>Jadwal Penyerahan berkas registrasi (daftar ulang) pada tanggal 3 - 8 Juni 2024 Pukul 08.00 s.d 14.00 WIB di SMA Negeri 3 Prabumulih</li>
                               
                             
							
									 </ol>



              </center>
            </h3>
          </div>
        </div>
      <?php } elseif ($cek->status_pendaftaran == 'tidak lulus') { ?>
        <div class="panel panel-warning">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
            </h3>
          </div>
          <div class="panel-body" style="color:red">
            <h3>
              <center>
                Mohon Maaf <b><?php echo $nama; ?></b>
                <span class="label label-danger" style="font-size:20px;">Tidak Lulus</span> <br>
                Sebagai Calon Peserta Didik Baru <b>SMA Negeri 3 Prabumulih</b>. <br>
                <p>Bagi peserta didik yang tidak lulus jalur Afirmasi dan Mutasi Orang Tua, silahkan mendaftar melalui jalur Zonasi atau Prestasi.</p>
              </center>
              <br>
            </h3>
          </div>
        </div>
      <?php } elseif ($cek->status_verifikasi == 1) { ?>
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
            </h3>
          </div>
          <div class="panel-body" style="color:black">
            <h3>
              <center>
                Selamat <b><?php echo $nama; ?></b>
                berkas anda telah terverifikasi
                <br>
             <!--   <hr>
                <a href="panel_siswa/cetakverifikasi" class="btn btn-success btn-lg" target="_blank"><i class="icon-printer4"></i> Cetak Bukti Verifikasi</a> -->
            </h3>
          </div>
        </div>
      <?php } else { ?>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-bullhorn"></i> Informasi & Pengumuman
            </h3>
          </div>
          <div class="panel-body">
            <h3>
              <center> ~ Belum ada pengumuman dari panitia PPDB Online SMA Negeri 3 Prabumulih ~
              </center>
            </h3>


          </div>
        </div>
      <?php } ?>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->