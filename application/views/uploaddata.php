
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
                                    <h3 class="box-title">Department</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example7" class="table table-bordered table-striped tbuploaddata">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Department</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach($sql as $row){
                                        ?>
                                        <tr id="truploaddata">
                                        <td><?php echo $row['DEPTID'] ?></td>
                                        <td><?php echo $row['DEPTNAME']?></td>
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
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Mesin</h3>
                                </div><!-- /.box-header -->

                                <div class="box-body table-responsive">
                                    
<legend>&nbsp;</legend> 
<ul> 
  <li><input type="checkbox" id="cb1" value="0" /><label for="cb1">User Info</label></li> 
  <li><input type="checkbox" id="cb2" value="1" /><label for="cb2">Finger Print</label></li> 
  <li><input type="checkbox" id="cb3" value="2" /><label for="cb3">Photo</label></li> 
    <li><input type="checkbox" id="cb3" value="3" /><label for="cb3">Overwrite</label></li> 
</ul> </div>
                                
            
			<button type="button" class="btn btn-success" 
			id="butupload" name="butupload" onclick="javascript:uploaddtpegawai();">
			Upload
			</button>
                            </div><!-- /.box -->

                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
