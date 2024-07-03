<?php
$cek    = $user->row();
$id_user = $cek->id_siswa;
$nama    = $cek->nama_lengkap;
$no_pendaftaran = $cek->no_pendaftaran;
$nisn = $cek->nisn;

$tgl = date('m-Y');
?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><span class="label label-danger" style="font-size:20px;">Informasi Penting!</span></h4>
      </div>
      <div class="modal-body" align="justify">
        <h4> Hai, <b style="text-transform: uppercase;"><?php echo ucwords($nama); ?></b>. Pastikan anda mencatat informasi <b>akun login</b> di bawah ini. Informasi tersebut akan digunakan untuk masuk (login) kembali ke dalam <b>sistem PPDB MIN 3 WAY KANAN TEGAL MUKTI: </b><br>
          <b>Username (No Pendaftaran) : <?php echo $no_pendaftaran; ?> <br>
            Password (NISN Anda) : <?php echo $nisn; ?></b><br><br>
        </h4>
      </div>
      <div class="modal-footer">
       <a href="<?= base_url('panel_siswa/informasi'); ?> ">   <button type="button" class="btn btn-info">Informasi Kelengkapan Berkas PPDB</button> </a>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Sudah saya catat!</button>
      </div>
    </div>

  </div>
</div>



<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">





    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat bg-info">
        <div class="panel-heading">
          <h3 class="panel-title">
            <center>Selamat Datang Calon Siswa MIN 3 WAY KANAN TEGAL MUKTI, <b style="text-transform: uppercase;"><?php echo ucwords($nama); ?></b></center>
          </h3>
        </div>

      </div>
    </div>
    <h2><b>Anda dapat memilih layanan di bawah ini:</b></h2>

    <!-- Quick stats boxes -->
    <div class="row">
      <div class="col-lg-3">
        <!-- Current server load -->
        <center>
          <a href="panel_siswa/informasi">
            <div class="panel bg-green">
              <div class="panel-body">
                <div class="heading-elements">
                  <span class="heading-text"></span>
                </div>
                <h1 class="no-margin">
                  <i class="icon-file-check2" style="font-size:200px;"></i>
                </h1>
                Informasi berkas & syarat pendaftaran
              </div>
            </div>
          </a>
        </center>
        <!-- /current server load -->
      </div>

      <div class="col-lg-3">
        <!-- Current server load -->
        <center>
          <a href="panel_siswa/cetak" target="_blank">
            <div class="panel bg-teal-400">
              <div class="panel-body">
                <div class="heading-elements">
                  <span class="heading-text"></span>
                </div>
                <h1 class="no-margin">
                  <i class="icon-printer2" style="font-size:200px;"></i>
                </h1>
                Cetak Bukti Pendaftaran
              </div>
            </div>
          </a>
        </center>
        <!-- /current server load -->
      </div>

      <div class="col-lg-3">
        <!-- Current server load -->
        <center>
          <a href="panel_siswa/biodata">
            <div class="panel bg-blue-400">
              <div class="panel-body">
                <div class="heading-elements">
                  <span class="heading-text"></span>
                </div>
                <h1 class="no-margin">
                  <i class="icon-printer4" style="font-size:200px;"></i>
                </h1>
                Biodata Pendaftaran
              </div>
            </div>
          </a>
        </center>
        <!-- /current server load -->
      </div>

      <div class="col-lg-3">
        <!-- Current server load -->
        <center>
          <a href="panel_siswa/pengumuman">
            <div class="panel bg-orange-400">
              <div class="panel-body">
                <div class="heading-elements">
                  <span class="heading-text"></span>
                </div>
                <h1 class="no-margin">
                  <i class="glyphicon glyphicon-bullhorn" style="font-size:200px;"></i>
                </h1>
                Pengumuman
              </div>
            </div>
          </a>
        </center>
        <!-- /current server load -->
      </div>

    </div>
    <!-- /quick stats boxes -->


  </div>

</div>

</div>
<!-- /dashboard content -->