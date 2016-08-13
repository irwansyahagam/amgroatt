
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Data Penggajian Karyawan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <a href="#" class="btn btn-info" id="postpayset">Post</a>
                <a href="<?php echo base_url();?>index.php/panel/formpay_setting" class="btn btn-success" id="tambahpayset">Tambah</a>
                <a href="#" class="btn btn-primary" id="hpspayset">Hapus</a>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">

                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td style="width:4%;text-align:center;"><input type="checkbox" id="chkpaysetting" name="chkpaysetting"></input></td>
                                                <td style="width:5%;text-align:center;">No.</td>
                                                <td style="text-align:center;">Kode</td>
                                                <td style="text-align:center;">Uraian</td>
                                                <td style="text-align:center;">Nominal (Rp)</td>
                                                <td style="text-align:center;">Keterangan</td>
                                                <td style="text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no=1;
                                          foreach ($sql as $row){
                                          ?>
                                          <tr>
                                          <td style="width:4%;text-align:center;">
                                            <input type="checkbox" id="chkpayroll" name="chkpayroll"></input></td>
                                          <td style="width:5%;text-align:center;"><?php echo $no++;?></td>
                                          <td><?php echo $row['kode'] ?></td>
                                          <td><?php echo $row['uraian'] ?></td>
                                          <td><?php echo $row['nominal'] ?></td>
                                          <td><?php echo $row['ket'] ?></td>
                                          <td style="text-align:center;">
                                          <a href="#" class="btn btn-primary" id="editpayset">Edit</a></td>
                                        </tr>
                                        <?php
                                      }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
