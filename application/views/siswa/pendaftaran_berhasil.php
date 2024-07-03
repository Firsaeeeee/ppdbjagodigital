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
     
  
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="glyphicon glyphicon-bullhorn"></i> Pendaftaran PPDB Online Berhasil!
          </h3>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
             <center>  <b> <h1>PENDAFTARAN BERHASIL!</h1></b> </center>
                 <h4 class="panel-title">
            <center>Selamat <b style="text-transform: uppercase;"><?php echo ucwords($nama); ?></b> Pengisian Formulir PPDB Online ananda telah berhasil, </center>
            Mohon catat informasi di bawah ini untuk anda login kembali ke sistem PPDB SMAN 3 Prabumulih : <br>
            
             <table width="100%" border="0">
                <tr>
                    <td width="200">Username Anda</td>
                    <td width="1">: </td>
                    <td><b><?php echo $no_pendaftaran; ?></b></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><b><?php echo $nisn; ?></b></td>
                </tr>
            </table>
            
            
            
      
           <br>
           <i> Setelah informasi akun untuk login anda dicatat, Silahkan cetak bukti pendaftaran berikut ini dan segera lengkapi berkas untuk verifikasi data ke SMA Negeri 3 Prabumulih  <br>
           <center>
            <a href="panel_siswa/cetak" class="btn btn-success btn-lg"><i class="icon-printer4"></i> Cetak Bukti Pendaftaran</a> </center>
         
       
           <br><br>
          **  Informasi kelulusan PPDB <?php echo date('Y'); ?>-<?php echo date('Y') + 1; ?> akan diumumkan melalui website ini (akses menu pengumuman)</i>
          </h4>
        </div>
    </div>
      </div>
    </div>