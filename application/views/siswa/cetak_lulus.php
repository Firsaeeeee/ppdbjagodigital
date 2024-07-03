<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title><?php echo $judul_web; ?></title>
  <base href="<?php echo base_url(); ?>" />
  <link rel="icon" type="image/png" href="img/logo3.png" />
  <style>
    table {
      border-collapse: collapse;
    }

    thead>tr {
      background-color: #0070C0;
      color: #f1f1f1;
    }

    thead>tr>th {
      background-color: #0070C0;
      color: #fff;
      padding: 10px;
      border-color: #fff;
    }

    th,
    td {
      padding: 2px;
    }

    th {
      color: #222;
    }

    body {
      font-family: Calibri;
    }
  </style>
</head>

<body onload="window.print();">
  <?php $this->load->view('kop_lap'); ?>

  <h4 align="center" style="margin:0px;font-size:19px;"><u><b>S U R A T  P E N G U M U M A N</b></u></h4>
  <center>
   Nomor: 422/146/SMAN3PBM/Disdik.SS/04/<?php echo $thn_ppdb; ?>
  </center>

  <br>
  <table width="100%" border="0">
    <tr>
      <td colspan="3">Kepala SMA Negeri 3 Prabumulih kota Prabumulih dengan ini menyatakan bahwa :</td>
    </tr>
    <tr>
      <td width="200">NO. PENDAFTARAN</td>
      <td width="1">:</td>
      <td><?php echo $user->no_pendaftaran; ?></td>
    </tr>
    <tr>
      <td>TANGGAL PENDAFTARAN </td>
      <td>:</td>
      <td><?php echo date('d-m-Y', strtotime($user->tgl_siswa)); ?></td>
    </tr>
    <tr>
      <td>TANGGAL CETAK </td>
      <td>:</td>
      <td><?php echo date('d-m-Y'); ?></td>
    </tr>
    <!--    <tr>
        <td>NIS</td>
        <td>:</td>
        <td><?php echo $user->nis; ?></td>
      </tr> -->
    <tr>
      <td>NISN</td>
      <td>:</td>
      <td><?php echo $user->nisn; ?></td>
    </tr>
    <!--      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $user->nik; ?></td>
      </tr> -->
    <tr>
      <td>NAMA LENGKAP</td>
      <td>:</td>
      <td style="text-transform: uppercase;"><?php echo ucwords($user->nama_lengkap); ?></td>
    </tr>
    <tr>
      <td>JENIS KELAMIN</td>
      <td>:</td>
      <td><?php echo $user->jk; ?></td>
    </tr>
    <tr>
      <td>TEMPAT, TANGGAL LAHIR</td>
      <td>:</td>
      <td><?php echo "$user->tempat_lahir, " . $this->Model_data->tgl_id($user->tgl_lahir); ?></td>
    </tr>
    <tr>
      <td>AGAMA</td>
      <td>:</td>
      <td><?php echo $user->agama; ?></td>
    </tr>
    <tr>
      <td>NAMA ORANG TUA /WALI</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td style="padding-left:55px;">AYAH</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_ayah); ?></td>
    </tr>
    <tr>
      <td style="padding-left:55px;">IBU</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_ibu); ?></td>
    </tr>
    <tr>
      <td style="padding-left:55px;">WALI</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_wali); ?></td>
    </tr>
    <tr>
      <td>NO. HANDPHONE (HP)</td>
      <td>:</td>
      <td><?php echo $user->no_hp_siswa; ?></td>
    </tr>
    <tr>
      <td>ASAL SEKOLAH</td>
      <td>:</td>
      <td style="text-transform: uppercase;"><?php echo ucwords($user->nama_sekolah); ?></td>
    </tr>
    <tr>
        <td>Jalur Pendaftaran</td>
        <td>:</td>
        <td><?php echo ucwords($user->jalur_pendaftaran); ?></td>
      </tr>
  </table>
  <br>

  <center>
    <div style="border:1px solid black; color:red;width:50%;padding:10px;">
      <b style="font-size:20px;"><u>L U L U S</u></b>
    </div>
  </center>
 

  Seleksi Sebagai Calon Peserta Didik SMA Negeri 3 Prabumulih tahun ajaran <?php echo $thn_ppdb; ?>/<?php echo $thn_ppdb + 1; ?>. Demikian pengumuman ini disampaikan untuk dapat digunakan sebagai mestinya.
  <br>

  <div style="float:right;">
    Prabumulih, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
    Kepala Sekolah, <br>
    <img src="img/qrcode.png" alt="" width="100"><br>
    <!--<center>dto</center>-->
    <center><b><u>Freni Listiyan, S.Pd., M.Si.</u></b><br></center>
    NIP. 198106202007012005
  </div>

<table width="100%" border="0" style="margin-left:5px;">
      <tr>
        <td width="1"></td>
      
        <?php echo $v_ket->ket_pengumuman; ?>
		
		</td>
      </tr>
	  
    </table> </i>
  

</body>

</html>