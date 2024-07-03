<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
          <?php
        echo $this->session->flashdata('msg');
        ?>

        <!-- Dashboard content -->
        <div class="row">
            <!-- Basic datatable -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"> Manajemen User</h5>
                    <hr style="margin:0px;">


                    <br>
                  



                </div>
                <div class="table-responsive">
                    <table class="table datatable-basic table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th width="30px;">No.</th>
                                <th>No. Pendaftaran</th>

                                <th width="80px;">NISN (Password)</th>

                                <th>Nama Lengkap</th>

                                <th class="text-center" width="130">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($v_siswa->result() as $baris) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>

                                    <td><?php echo $baris->nisn; ?></td>

                                    <td style="text-transform: uppercase;"><?php echo $baris->nama_lengkap; ?></td>

                                    <td align="center">
                                       <!-- <a href="panel_admin/edituser/<?php echo $baris->no_pendaftaran; ?>" class="badge badge-primary">Edit</a> -->
                                        <a href="panel_admin/hapususer/<?php echo $baris->no_pendaftaran; ?>" class="badge badge-danger" title="hapus user" onclick="return confirm('Anda Yakin?')">Delete</a>

                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /basic datatable -->
        </div>
        <!-- /dashboard content -->

        <script type="text/javascript">
            function thn() {
                var thn = $('[name="thn"]').val();
                window.location = "panel_admin/verifikasi/thn/" + thn;
            }

            $('[name="thn"]').select2({
                placeholder: "- Tahun -"
            });
        </script>