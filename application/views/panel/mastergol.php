
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Daftar Mesin Absensi
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button type="button" class="btn btn-danger" id="hapusgolo">Hapus</button>
                <a href="<?php echo base_url(); ?>index.php/panel/formgolbaru" class="btn btn-success">Tambah</a>
                <button type="button" class="btn btn-primary" id="butrefgol">Refresh</button>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Master Pangkat</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tbmastergol">
                                    <table id="example12" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="text-align:center; width:5%;"><input type="checkbox" id="chkgolongall" name="chkgolongall" class="chkgolongall"></input></td>
                                                <td  style="text-align:center; width:5%;">No.</td>
                                                <td  style="text-align:center; width:15%;">Kode Pangkat</td>
                                                <td   style="text-align:center;">Pangkat</td>
                                                <td   style="text-align:center;">Status</td>
                                                <td style="text-align:center;">Skor</td>
                                                <td style="text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no=1;
                                          foreach ($golongan as $gol)
                                          {
                                          ?>
                                          <tr>
                                           <td  style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" class="chkgolong" name="chkgolong" value=<?php echo $gol['kd_golongan'] ?>></input></td>
                                          <td  style="text-align:center; width:5%;"><?php echo $no++; ?></td>
                                          <td   style="text-align:left; width:15%;"><?php echo $gol['kd_golongan']?></td>
                                          <td><?php echo $gol['golongan'] ?></td>
                                          <td><?php
                                          if($gol['aktif']=='1'){
                                            echo '<span class="label label-success">Aktif</span>';
                                          }else{
                                            echo '<span class="label label-danger">Tidak Aktif</span>';
                                          }
                                          ?></td>
                                          <td style="text-align:left; width:15%;"><?php echo $gol['skor']?></td>
                                          <td>
                                          <button class="btn btn-primary" id="btneditgol" value=<?php echo $gol['kd_golongan']?> >Edit</button>
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
