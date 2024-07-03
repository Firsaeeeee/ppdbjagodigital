<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title><?php echo $judul_web; ?></title>
  <base href="<?php echo base_url(); ?>" />
  <link rel="icon" type="image/png" href="img/logokemenag.png" />
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
  <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
  <b>
    <center>
      PANITIA PPDB MIN 3 WAY KANAN TEGAL MUKTI <br>
      TAHUN PELAJARAN <?php echo $thn_ppdb; ?> / <?php echo $thn_ppdb + 1; ?></center>
  </b>
  <br>

  <table width="100%" border="0">
    <tr>
      <td width="200">NO. PENDAFTARAN</td>
      <td width="1">:</td>
      <td><?php echo $user->no_pendaftaran; ?></td>
    </tr>
    <tr>
      <td>TANGGAL PENDAFTARAN </td>
      <td>:</td>
      <td><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($user->tgl_siswa))); ?></td>
    </tr>
    <tr>
      <td>TANGGAL CETAK </td>
      <td>:</td>
      <td><?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?></td>
    </tr>
    <!--   <tr>
        <td>NIS</td>
        <td>:</td>
        <td><?php echo $user->nis; ?></td>
      </tr> -->
    <tr>
      <td>NISN</td>
      <td>:</td>
      <td><?php echo $user->nisn; ?></td>
    </tr>
    <tr>
      <td>NAMA LENGKAP</td>
      <td>:</td>
      <td><b style="text-transform: uppercase;"><?php echo ucwords($user->nama_lengkap); ?></b></td>
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
      <td>NAMA ORANG TUA /WALI</td>
      <td></td>
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
      <td>NO. HANDPHONE AYAH</td>
      <td>:</td>
      <td><?php echo $user->no_hp_ayah; ?></td>
    </tr>
    <tr>
      <td>ASAL SEKOLAH</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_sekolah); ?></td>
    </tr>

    <tr>
      <td>JALUR PENDAFTARAN</td>
      <td>:</td>
      <td><?php echo $user->jalur_pendaftaran; ?></td>
    </tr>
    <!-- <tr>
        <td>PRESTASI</td>
        <td>:</td>
        <td><?php echo $user->prestasi; ?></td>
      </tr>
      <tr>
        <td>RATA - RATA NILAI USBN</td>
        <td>:</td>
        <td><?php echo number_format($nilai_usbn, 2, ",", "."); ?></td>
      </tr>
      <tr>
        <td>RATA - RATA NILAI UNBK/UNKP</td>
        <td>:</td>
        <td><?php echo number_format($nilai_unbk, 2, ",", "."); ?></td>
      </tr>-->
  </table>
  <br>
  <!--
  <table width="100%" border="1">
    <tr>
      <th rowspan="2">Mata Pelajaran</th>
      <th colspan="5">Nilai Rapor Semester</th>
      <th rowspan="2">Rata - Rata<br>Rapor</th>
    </tr>
    <tr>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
    </tr>
    <tr align="center">
      <td align="left">Ilmu Pengetahuan Alam (IPA)</td>
      <?php
      $ipa = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Ilmu Pengetahuan Alam (IPA)"))->row();
      ?>
      <td><?php echo number_format($ipa->semester1, 2, ",", "."); ?></td>
      <td><?php echo number_format($ipa->semester2, 2, ",", "."); ?></td>
      <td><?php echo number_format($ipa->semester3, 2, ",", "."); ?></td>
      <td><?php echo number_format($ipa->semester4, 2, ",", "."); ?></td>
      <td><?php echo number_format($ipa->semester5, 2, ",", "."); ?></td>
      <td><?php echo number_format($ipa->rata_rata_nilai, 2, ",", "."); ?></td>

    </tr>

    <tr align="center">
      <td align="left">Matematika</td>
      <?php
      $mtk = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Matematika"))->row();
      ?>
      <td><?php echo number_format($mtk->semester1, 2, ",", "."); ?></td>
      <td><?php echo number_format($mtk->semester2, 2, ",", "."); ?></td>
      <td><?php echo number_format($mtk->semester3, 2, ",", "."); ?></td>
      <td><?php echo number_format($mtk->semester4, 2, ",", "."); ?></td>
      <td><?php echo number_format($mtk->semester5, 2, ",", "."); ?></td>
      <td><?php echo number_format($mtk->rata_rata_nilai, 2, ",", "."); ?></td>

    </tr>
    <tr align="center">
      <td align="left">Bahasa Indonesia</td>
      <?php
      $ind = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Bahasa Indonesia"))->row();
      ?>
      <td><?php echo number_format($ind->semester1, 2, ",", "."); ?></td>
      <td><?php echo number_format($ind->semester2, 2, ",", "."); ?></td>
      <td><?php echo number_format($ind->semester3, 2, ",", "."); ?></td>
      <td><?php echo number_format($ind->semester4, 2, ",", "."); ?></td>
      <td><?php echo number_format($ind->semester5, 2, ",", "."); ?></td>
      <td><?php echo number_format($ind->rata_rata_nilai, 2, ",", "."); ?></td>

    </tr>
    <tr align="center">
      <td align="left">Bahasa Inggris</td>
      <?php
      $ing = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Bahasa Inggris"))->row();
      ?>
      <td><?php echo number_format($ing->semester1, 2, ",", "."); ?></td>
      <td><?php echo number_format($ing->semester2, 2, ",", "."); ?></td>
      <td><?php echo number_format($ing->semester3, 2, ",", "."); ?></td>
      <td><?php echo number_format($ing->semester4, 2, ",", "."); ?></td>
      <td><?php echo number_format($ing->semester5, 2, ",", "."); ?></td>
      <td><?php echo number_format($ing->rata_rata_nilai, 2, ",", "."); ?></td>

    </tr>
<tr align="center">
                                    <td>Ilmu Pengetahuan Sosial </td>
                                    <?php
                                    $ips = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Ilmu Pengetahuan Sosial (IPS)"))->row();
                                    ?>
                                    <td><?php echo number_format($ips->semester1, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ips->semester2, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ips->semester3, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ips->semester4, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ips->semester5, 2, ",", "."); ?></td>
                                    <th><?php echo number_format($ips->rata_rata_nilai, 2, ",", "."); ?></th>
                                </tr>
                                
                                <tr id="th_center">
                                    <th colspan="6">Rata-Rata Rapor 5 Semester</th>
                                    <th><b><?php echo number_format(($ipa->rata_rata_nilai + $mtk->rata_rata_nilai + $ind->rata_rata_nilai + $ing->rata_rata_nilai + $ips->rata_rata_nilai) / 5, 2, ",", "."); ?></b></th>
                                </tr>

  </table> -->
  <br><br>

  <div style="float:right;">
    Waykanan, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
    Kepala Sekolah <br>

    <img src="img/qrcodemin3.png" alt="" width="100"><br>
    <!--<center>dto</center>-->
    <center><b><u>MIDI, S.IP.,S.Pd.I</u></b><br></center>
    NIP. 196803052005011006
  </div>
 

  <b><u>KETERANGAN :</u></b>
  <ul>
   <li>Calon peserta didik membawa kelengkapan berkas verifikasi</li>   
<li>Verifikasi berkas <?php echo $user->jalur_pendaftaran; ?> tanggal  13 s.d 17 Mei 2024
</li>
<li>Jam pelayanan verifikasi : 08.00 s.d 15.00 WIB</li>
<li>Map merah untuk calon siswa laki-laki dan Map kuning untuk calon siswa perempuan</li>
<li>Mencetak surat pernyataan keaslian dokumen yang dapat diunduh melalui web PPDB MIN 3 Way Kanan Tegal Mukti</li>

     
  </ul>
    
    
</body>

</html>