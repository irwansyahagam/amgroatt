
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Master Uraian
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button type="button" class="btn btn-danger" id="hpsdatauraian">Hapus</button>
                <a href="<?php echo base_url(); ?>index.php/panel/formadduraian" class="btn btn-success">Tambah</a>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Master Uraian</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="text-align:center; width:5%;"><input type="checkbox" id="chkgolongall" name="chkgolongall" class="chkgolongall"></input></td>
                                                <td  style="text-align:center; width:5%;">No.</td>
                                                <td  style="text-align:center; width:15%;">Kode Uraian</td>
                                                <td   style="text-align:center;">Uraian</td>
                                                <td   style="text-align:center;">Status</td>
                                                <td style="text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no=1;
                                          foreach ($sql as $row)
                                          {
                                          ?>
                                          <tr>
                                           <td  style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" name="chkgolong" class="chkgolong" value=<?php echo $row['iduraian'] ?>></input></td>
                                          <td  style="text-align:center; width:5%;"><?php echo $no++; ?></td>
                                          <td   style="text-align:left; width:15%;"><?php echo $row['iduraian']?></td>
                                          <td><?php echo $row['namauraian'] ?></td>
                                          <td><?php
                                          if($row['status']=='1'){
                                            echo '<span class="label label-success">Aktif</span>';
                                          }else{
                                            echo '<span class="label label-danger">Tidak Aktif</span>';
                                          }
                                          ?></td>
                                          <td>
                                            <button type="button" class="btn btn-primary" id="btnediturai" class="btnediturai" 
                                            value=<?php echo $row['iduraian'].'|'.$row['namauraian'].'|'.$row['status'] ?>>Edit</button>
                                          </td>
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
