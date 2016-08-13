
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Download Data Presensi
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">
                  <span class="label label-info" style="margin-bottom:8px;">
                    Konkesikan dahulu mesin untuk download data presensi</span>
                  <br /> <br />
                <a href="#" class="btn btn-danger">koneksikan</a>
                <a href="#" class="btn btn-success" id="printterlambat">Download</a>
                <button class="btn btn-primary" id="downfromflash">Download From Flash</button>
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
                                              <tr>
                                                  <td><input type="checkbox" id="chkmesindonwall" name="chkmesindonwall" class="chkmesindonwall">
                                                  </input></td>
                                                  <td>No.</td>
                                                  <td>Nama Mesin</td>
                                                  <td>Status</td>
                                                  <td>No Mesin</td>
                                                  <td>Tipe Komunikasi</td>
                                                  <td>Alamat IP</td>
                                                  <td>Port</td>
                                                  <td>Nama Produk</td>
                                                  <td>Jumlah Karyawan</td>
                                                  <td>Jumlah Admin</td>
                                                  <td>Nomor Seri</td>
                                              </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no=1;
                                          foreach($machine as $mach){
                                          ?>
                                          <tr>
                                         <td><input type="checkbox" id="chkmesindonw" value=<?php $mach['id']?> name="chkmesindonw" class="chkmesindonw"></input></td>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $mach['machinealias']?></td>
                                          <td><?php
                                          if($mach['enabled']=="1"){
                                            echo '<span class="label label-success">Connected</span>';
                                          }else{
                                            echo '<span class="label label-danger">Not Connected</span>';
                                          }
                                          ?></td>
                                          <td><?php echo $mach['sn']?></td>
                                          <td><?php
                                          if($mach['connecttype']=='1'){
                                            echo '<span class="label label-success">Jaringan</Span>';
                                          }else{
                                            echo '<span class="label-label-success">USB</span>';
                                          }
                                          ?></td>
                                          <td><?php echo $mach['ip']?></td>
                                          <td><?php echo $mach['port']?></td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
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
