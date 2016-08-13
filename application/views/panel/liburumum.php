
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Pengaturan Hari Libur Umum 
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button type="button" id="delliburumum" class="btn btn-danger" name="delliburumum">Hapus</button>
                <a href="<?php echo base_url(); ?>index.php/panel/libur-form" class="btn btn-success">Tambah</a>
                <button type="button" id="refbutumum" class="btn btn-primary"> Refresh </button>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="divliburumum">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox" id="chkliburumumall" name="chkliburumumall"></input></td>
                                                <td>No.</td>
                                                <td>Nama Hari Libur</td>
                                                <td>Tanggal Mulai</td>
                                                <td>Jumlah Hari</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php 
                                        $no=1; 
                                        foreach ($sql as $row){
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" id="chkliburumum" name="chkliburumum" class="chkliburumum"  
                                            value=<?php echo $row['HOLIDAYID'] ?>></input></td>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $row['HOLIDAYNAME'] ?></td>
                                          <td><?php echo viewtglweb($row['STARTTIME']) ?></td>
                                          <td><?php echo $row['DURATION'].'Hari' ?></td>
                                          <td><button type="button" class="btn btn-primary"  id="btneditlibur"
                                          value=<?php echo $row['HOLIDAYID'] ?>>Edit</button></td>
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
