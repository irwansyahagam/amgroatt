
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Pengaturan Dinas Luar/ Izin Cuti
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <!--<a href="<?php echo base_url(); ?>panel/artikel/add" class="btn btn-danger">Hapus</a> --> 
                <button type="button" id="buthapuscuti" name="buthapuscuti" class="btn btn-danger">Hapus</button>
                <a href="<?php echo base_url(); ?>index.php/panel/cuti-add" class="btn btn-primary">Tambah</a>
                <!--<button type="button" id="butrefizin" name="butrefizin" class="btn btn-success">Refresh</button>-->
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tableizincuti">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td><input type="checkbox" name="chkcutiall" id="chkcutiall"></input></td>
                                                <td>No.</td>
                                                <td>Nama</td>
                                                <td>No ID</td>
                                                <td>Departments</td>
                                                <td>Waktu Mulai</td>
                                                <td>Waktu Izin</td>
                                                <td>Kelompok Izin</td>
                                                <td>Alasan</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach ($sql as $row){
                                        ?>
                                        <tr>
                                         <td><input type="checkbox" id="chkcuti" name="chkcuti" class="chkcuti" value=<?php echo $row['USERID'].'|'. viewtglweb($row['startspecday']) ?>>
                                         </input></td>   
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $row['Name'] ?></td>
                                          <td><?php echo $row['USERID'] ?></td>
                                          <td><?php echo $row['DEPTNAME'] ?></td>
                                          <td><?php echo viewtglweb($row['startspecday']) ?></td>
                                          <td><?php echo viewtglweb($row['endspecday']) ?></td>
                                          <td><?php echo $row['namaizin'] ?></td>
                                          <td><?php echo $row['alasan'] ?></td>
                                          <td><button class="btn btn-primary" id="buteditizin" 
                                          value="<?php echo $row['USERID'].'|'.$row['startspecday']?>">Edit</button></td>
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
