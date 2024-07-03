<?php
error_reporting(0);
$user = $user->row(); ?>

<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Dashboard content -->
        <div class="row">


            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="glyphicon glyphicon-bullhorn"></i> VERIFIKASI NILAI RATA-RATA RAPOR
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12 text-center">
                        <h2><b>PERHITUNGAN NILAI RATA-RATA RAPOR<br>
                                SELEKSI PPDB SMA NEGERI 3 PRABUMULIH</b></h2>
                        <hr>

                        <legend class="text-bold"><i class="icon-profile"></i> Nilai Rapor <?php echo ucwords($user->nama_lengkap); ?> | No. Pendaftaran <?php echo $user->no_pendaftaran; ?></legend>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" align="center" width="100%" border="1">
                                <tr id="th_center">
                                    <th rowspan="2">Mata Pelajaran</th>
                                    <th colspan="5" width="25">Semester</th>
                                    <th rowspan="2">Rata-Rata Nilai</th>
                                </tr>
                                <tr id="th_center">
                                    <th width="5">1</th>
                                    <th width="5">2</th>
                                    <th width="5">3</th>
                                    <th width="5">4</th>
                                    <th width="5">5</th>
                                </tr>
                                <tr>
                                    <td>Ilmu Pengetahuan Alam (IPA)</td>
                                    <?php
                                    $ipa = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Ilmu Pengetahuan Alam (IPA)"))->row();
                                    ?>
                                    <td><?php echo number_format($ipa->semester1, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ipa->semester2, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ipa->semester3, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ipa->semester4, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ipa->semester5, 2, ",", "."); ?></td>
                                    <th><?php echo number_format($ipa->rata_rata_nilai, 2, ",", "."); ?></th>
                                </tr>
                                <!--<tr>
                    <td>Ilmu Pengetahuan Sosial (IPS)</td>
                    <?php
                    $ips = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Ilmu Pengetahuan Sosial (IPS)"))->row();
                    ?>
                    <td><?php echo number_format($ips->semester1, 2, ",", "."); ?></td>
                    <td><?php echo number_format($ips->semester2, 2, ",", "."); ?></td>
                    <td><?php echo number_format($ips->semester3, 2, ",", "."); ?></td>
                    <td><?php echo number_format($ips->semester4, 2, ",", "."); ?></td>
                    <td><?php echo number_format($ips->semester5, 2, ",", "."); ?></td>
                    <th><?php echo number_format($ips->rata_rata_nilai, 2, ",", "."); ?></th>
                  </tr>-->
                                <tr>
                                    <td>Matematika </td>
                                    <?php
                                    $mtk = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Matematika"))->row();
                                    ?>
                                    <td><?php echo number_format($mtk->semester1, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($mtk->semester2, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($mtk->semester3, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($mtk->semester4, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($mtk->semester5, 2, ",", "."); ?></td>
                                    <th><?php echo number_format($mtk->rata_rata_nilai, 2, ",", "."); ?></th>
                                </tr>
                                <tr>
                                    <td>Bahasa Indonesia </td>
                                    <?php
                                    $ind = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Bahasa Indonesia"))->row();
                                    ?>
                                    <td><?php echo number_format($ind->semester1, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ind->semester2, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ind->semester3, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ind->semester4, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ind->semester5, 2, ",", "."); ?></td>
                                    <th><?php echo number_format($ind->rata_rata_nilai, 2, ",", "."); ?></th>
                                </tr>
                                <tr>
                                    <td>Bahasa Inggris </td>
                                    <?php
                                    $ing = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel" => "Bahasa Inggris"))->row();
                                    ?>
                                    <td><?php echo number_format($ing->semester1, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ing->semester2, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ing->semester3, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ing->semester4, 2, ",", "."); ?></td>
                                    <td><?php echo number_format($ing->semester5, 2, ",", "."); ?></td>
                                    <th><?php echo number_format($ing->rata_rata_nilai, 2, ",", "."); ?></th>
                                </tr>
                                 
                                 <tr>
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
                            </table>
                        </div>
                        <hr>

                        <?php $ratanilai = number_format(($ipa->rata_rata_nilai + $mtk->rata_rata_nilai + $ind->rata_rata_nilai + $ing->rata_rata_nilai) / 4, 2, ",", "."); ?>

                        <?php if ($ratanilai < 80) {  ?>
                            <h2>
                                <div class="alert alert-danger" role="alert"><b>Mohon maaf, anda belum bisa melanjutkan proses cetak bukti pendaftaran</b></div> <b>Nilai rata-rata rapor anda belum memenuhi persyaratan minimal nilai rata-rata rapor 5 semester yang ditetapkan yaitu rata-rata rapor 5 semester minimal 80</b>
                            </h2>
                        <?php } else { ?>
                            <div class="jumbotron">
                                <h1>Selamat!</h1>

                                <h3>Anda telah memenuhi persyaratan minimal nilai rata-rata rapor 5 semester.<br> Silahkan melanjutkan proses cetak bukti pendaftaran PPDB SMA Negeri 3 Prabumulih</h3>
                                <a class="btn btn-primary btn-lg" href="<?= base_url('panel_siswa/cetak'); ?>" target="_blank" role="button"><i class="icon-printer4"></i> Cetak Bukti Pendaftaran</a>
                            </div>

                        <?php } ?>











                    </div>

                </div>
            </div>
        </div>
        <!-- /dashboard content -->