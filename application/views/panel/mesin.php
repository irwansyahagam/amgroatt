
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Daftar Mesin Absensi
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content">
                <a href="#" class="btn btn-danger" id="hapusmesin" onclick="javascript:hapusmesin1();">Hapus Mesin</a>
                <a href="<?php echo base_url();?>index.php/panel/mesinbaru" class="btn btn-info" >Tambah Mesin</a>
                <a href="#" class="btn btn-success" id="conmesin1" onclick="javascript:konmesin();">Koneksikan Mesin</a>
                <button type="button" class="btn btn-primary" onclick="javascript:pukonmesin();">Putuskan</button>
                <button type="button" id="butrefreshmes" class="btn btn-default">Refresh</button>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Mesin</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tbodymesin">
                                    <table id="example12" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="chkmesin" name="chkmesin"></input></th>
                                                <th>No.</th>
                                                <th>Nama Mesin</th>
                                                <th>Status</th>
                                                <th>No Mesin</th>
                                                <th>Tipe Komunikasi</th>
                                                <th>Alamat IP</th>
                                                <th>Port</th>
                                                <th>Produk Type</th>
                                                <th>Jumlah Karyawan</th>
                                                <th>Jumlah Admin</th>
                                                <th>Nomor Seri</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no=1;
                                          foreach($machine as $mach){
                                          ?>
                                          <tr>
                                         <td><input type="checkbox" id="chkmesin1" class="chkmesin1"  name="chkmesin1" 
                                         value=<?php echo $mach['ip']?> ></input></td>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $mach['machinealias']?></td>
                                          <td><?php
                                          if($mach['enabled']=="1"){
                                            echo '<span class="label label-success">Connected</span>';
                                          }else{
                                            echo '<span class="label label-danger">Not Connected</span>';
                                          }
                                          ?></td>
                                          <td><?php echo $mach['machinenumber']?></td>
                                          <td><?php
                                          if($mach['connecttype']=='1'){
                                            echo '<span class="label label-success">Jaringan</Span>';
                                          }else{
                                            echo '<span class="label-label-success">USB</span>';
                                          }
                                          ?></td>
                                          <td><span class="label label-success"><?php echo $mach['ip']?></span></td>
                                          <td><?php echo $mach['port']?></td>
                                          <td><?php echo $mach['producttype']?></td>
                                          <td><?php echo $mach['usercount'] ?></td>
                                          <td><?php echo $mach['managercount'] ?></td>
                                          <td><?php echo $mach['sn'] ?></td>
                                          <td><button type="button" class="btn btn-success" id="buteditmesin" 
                                          value=<?php echo $mach['id'] ?>
                                          >Edit</button>&nbsp;|&nbsp;<button type="button" class="btn btn-primary" id="butdownload" 
                                          value=<?php echo $mach['ip'] ?>
                                          >Download</button></td>
                                        </tr>
                                        <?php
                                      }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <!--div class column 6 -->
                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Finger (Auto Refresh)</h3>
                                </div><!-- /.box-header -->
								<div id="msg12" >
								
								</div>
								<!--<button type="button"  class="btn btn-success" 
								id="downloaddata" onclick="">Download</button> <!--javascript:downloaddata();-->
							
								<span id="msg" style="display:none;">
								<img src="<?php echo base_url();?>lib/image/loader3.gif" style="height:8%;" />
								proses Download,Please Wait.......</span>
								
							   <div class="box-body table-responsive" id="mesinmasuk">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="chkmesinkon" name="chkmesinkon" class="chkmesinkon"></input></th>
                                                <th>No.</th>
                                                <th>AC NO</th>
                                                <th>Nama</th>
                                                <th>s time</th>
                                                <th>machine</th>
                                                <th>verify Mode</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div> <!-- end div class column 6 -->
                        <!-- div class column 6 for koneksi -->
                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Machine Status</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="mesinstatus">
                                    <table id="example4" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="chkmesin" name="chkmesin"></input></th>
                                                <th>No.</th>
                                                <th>Id mesin</th>
                                                <th>Status</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <!-- end div class column 6 for koneksi -->
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
