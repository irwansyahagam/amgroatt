
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Daftar Mesin Absensi
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content">

					<div class="row">

                        <!--div class column 6 -->
                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar Mesin</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example7" class="table table-bordered table-striped tbuploaddata">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>IP</th>
                                                <th>Mesin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no=1;  
                                        foreach($sql as $row){
                                        ?>
                                        <tr id="trdownloddata">
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $row['ip']; ?></td>
                                        <td><?php echo $row['machinealias']?></td>
                                        </tr>
                                        <?php 
                                        } 
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div> <!-- end div class column 6 -->
                        <!-- div class column 6 for koneksi -->
                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Pegawai</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tbluploadpeg">
                                    <table id="example4" class="table table-bordered table-striped tbpegupload">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="chkuplodpegall" name="chkuplodpegall" 
												class="chkuplodpegall"></input></th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Department</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <!-- end div class column 6 for koneksi -->
                        <div class="col-xs-12">
                                
            
			         <button type="button" class="btn btn-success" 
			         id="butdownload" name="butdownload" onclick="">
			         Download
			         </button>


                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
